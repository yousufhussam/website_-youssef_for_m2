<?php

namespace App\Http\Controllers\Highscore;

use App\Http\Controllers\Controller;
use App\Models\Enums\CharacterClassEnum;
use App\Models\Enums\EmpireEnum;
use App\Models\Game\Highscore\HighscoreCache;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HighscoreController extends Controller
{
    private const RESULTS_PER_PAGE = 10;

    public function show(Request $request, ?int $empireChoice = null, ?int $classChoice = null, ?int $page = null): View
    {
        $where = [];

        // If "empireChoice" is a valid empire, add it to the query; otherwise set empireChoice to -1
        if (in_array($empireChoice, array_column(EmpireEnum::cases(), 'value'), true))
            $where[] = ['empire', $empireChoice];
        else
            $empireChoice = -1;

        // If "classChoice" is a valid empire, add it to the query; otherwise set empireChoice to -1
        if (in_array($classChoice, array_column(CharacterClassEnum::cases(), 'value'), true))
            $where[] = ['job', $classChoice];
        else
            $classChoice = -1;

        // Check whether "characterChoice" was requested
        $validated = $request->validate(['character-choice' => 'nullable']);
        $characterChoice = $validated['character-choice'] ?? null;

        // If "character-choice" was specified, find the character with that name
        if (!empty($characterChoice))
            $where[] = ['name', $characterChoice];

        $highscore = HighscoreCache::where($where)->paginate(self::RESULTS_PER_PAGE, page: $page);

        return view('main/highscore', [
            'highscore' => $highscore,
            'empireChoice' => $empireChoice,
            'classChoice' => $classChoice,
            'characterChoice' => $characterChoice,
        ]);
    }

    public function search(Request $request): View
    {
        $where = [];

        $validated = $request->validate([
            'empire-choice' => 'required|int',
            'class-choice' => 'required|int',
            'character-choice' => 'nullable',
        ]);

        $empireChoice = (int) $validated['empire-choice'];
        $classChoice = (int) $validated['class-choice'];
        $characterChoice = $validated['character-choice'];

        // If "empire-choice" is a valid empire, add it to the query
        if (in_array($empireChoice, array_column(EmpireEnum::cases(), 'value'), true))
            $where[] = ['empire', $empireChoice];

        // If "class-choice" is a valid character class, add it to the query
        if (in_array($classChoice, array_column(CharacterClassEnum::cases(), 'value'), true))
            $where[] = ['job', $classChoice];

        // If "character-choice" was specified, find the character with that name
        if (!empty($characterChoice))
            $where[] = ['name', $characterChoice];

        $highscore = HighscoreCache::where($where)->paginate(self::RESULTS_PER_PAGE);

        return view('main/highscore', [
            'highscore' => $highscore,
            'empireChoice' => $empireChoice,
            'classChoice' => $classChoice,
            'characterChoice' => $characterChoice,
        ]);
    }
}
