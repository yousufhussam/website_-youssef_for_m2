<?php

namespace App\Http\Controllers\Mall;

use App\Http\Controllers\Controller;
use App\Models\Mall\MallItem;
use App\Utils\ImageHelpers;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;


class ItemController extends Controller
{
    public function show(int $id): View
    {
        $item = MallItem::find($id);
        $suggestions = MallItem::getSuggestions(7, $item);

        return view('mall/item/show', [
            'item' => $item,
            'suggestions' => $suggestions,
        ]);
    }

    public function generateImage(int $id, bool $isLarge = false, float $maxIconRatio = 0.8): Response
    {
        $item = MallItem::find($id);

        // Return an error image if the item or its image is not found
        if (!$item || !$item->image) {
            return response()->file(public_path('assets/mall/img/error.png'));
        }

        // Return an error if the item image is not available on the server
        if (!file_exists(public_path("assets/mall/img/item/icon/{$item->image}.png"))) {
            return response()->file(public_path('assets/mall/img/error.png'));
        }

        // Load the proper background
        if (!$isLarge)
            $imageData = imagecreatefrompng(public_path('assets/mall/img/item/background.png'));
        else
            $imageData = imagecreatefrompng(public_path('assets/mall/img/item/background-lg.png'));


        // Get the max width or height we can work with
        $maxSquareSize = (int) (min(imagesx($imageData), imagesy($imageData)) * $maxIconRatio);

        // Load the item icon
        $itemIcon = imagecreatefrompng(public_path("assets/mall/img/item/icon/{$item->image}.png"));

        // Get the max dimension of the icon
        $maxIconDimension = max(imagesx($itemIcon), imagesy($itemIcon));

        // Resize the icon
        $scalingFactor = (float) $maxSquareSize / $maxIconDimension;

        // Select the best resizing algorithm based on whether we have to enlarge or reduce the icon size
        $mode = IMG_BILINEAR_FIXED;
        if ($scalingFactor < 1)
            $mode = IMG_BICUBIC_FIXED;

        $itemIcon = imagescale($itemIcon, imagesx($itemIcon) * $scalingFactor, mode: $mode);

        $destX = (imagesx($imageData) - imagesx($itemIcon)) / 2;
        $destY = (imagesy($imageData) - imagesy($itemIcon)) / 2;

        // Apply the icon onto the background
        ImageHelpers::imagecopymerge_alpha($imageData, $itemIcon, $destX, $destY, 0, 0, imagesx($itemIcon), imagesy($itemIcon), 100);

        return response()->streamDownload(
            function () use ($imageData) {
                echo imagejpeg($imageData);
            },
            headers: [
                'Content-Type' => 'image/jpeg',
                'Cache-Control' => 'max-age=3600',
            ]
        );
    }

    public function generateLargeImage(int $id): Response
    {
        return $this->generateImage($id, true, 0.7);
    }

}
