<?php

namespace App\Http\Controllers\Patch;

use App\Http\Controllers\Controller;
use SimpleXMLElement;

class PatchConfigController extends Controller
{
    public function config(): \Illuminate\Http\Response
    {
        $patchMethod = 'TORRENT';
        $currentVersion = 'nightly-d19dc772db';
        $config = [];

        if ($patchMethod == 'TORRENT') {
            $torrentConfig = [
                'port_range' => '6881~6891',
                'bandwidth_range' => '5:10:25:50:75:100:150:200:250:500:1000',
                'foreground_speed' => 0,
                'background_speed' => 10,
                'max_uploads_per_session' => 16,
                'max_connections_per_session' => 200,
                'max_uploads_per_torrent' => 4,
                'max_connections_per_torrent' => 50,
                'seeding_duration' => 21600,
                'web_seed_enable' => 1
            ];
            $config = array_merge($config, $torrentConfig);
        }

        $noticeConfig = [
            'notice_ver' => 1,
            'notice_url' => route('patch.notice'),
            'notice_width' => 680,
            'notice_height' => 500,
        ];
        $config = array_merge($config, $noticeConfig);

        $patcherConfig = [
            'cur_patcher_path' => 'TorrentPatch.exe',
            'new_patcher_path' => 'TorrentPatch.bin',
            'new_patcher_crc32' => '0x414EEA07',
        ];
        $config = array_merge($config, $patcherConfig);

        $clientConfig = [
            'run_path' => 'metin2client.bin',
        ];
        $config = array_merge($config, $clientConfig);

        // Build the XML file
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><torrent_config/>');
        foreach ($config as $item => $value)
            $xml->addAttribute($item, $value);

        if ($patchMethod == 'CRC') {
            $patchItem = $xml->addChild('foreground_patch');
            $patchItem->addAttribute('crcpatch_url', asset('patch-data/crc'));
            $patchItem->addAttribute('crcversion', $currentVersion);
        }
        elseif ($patchMethod == 'TORRENT') {
            $patchItem = $xml->addChild('foreground_patch');
            $patchItem->addAttribute('torrent_url', asset("patch-data/torrent/{$currentVersion}.torrent"));

            if (!empty($torrentConfig['web_seed_enable']) && $torrentConfig['web_seed_enable'] == 1)
                $patchItem->addAttribute('webseed_url', asset("patch-data/torrent/"));
        }

        $xmlData = $xml->asXML();

        return response($xmlData, 200, [
            'Content-Type' => 'application/xml',
            'Content-Length' => strlen($xmlData),
        ]);
    }
}
