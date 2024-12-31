<?php

namespace App\Http\Controllers\Highscore;

use App\Http\Controllers\Controller;
use App\Models\Enums\EmpireEnum;
use App\Models\Game\Highscore\GuildHighscoreCache;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GuildHighscoreController extends Controller
{
    private const RESULTS_PER_PAGE = 10;

    public function show(Request $request, ?int $empireChoice = null, ?int $page = null): View
    {
        $where = [];

        // If "empireChoice" is a valid empire, add it to the query; otherwise set empireChoice to -1
        if (in_array($empireChoice, array_column(EmpireEnum::cases(), 'value'), true))
            $where[] = ['empire', $empireChoice];
        else
            $empireChoice = -1;

        // Check whether "guildChoice" or "guildLeaderChoice" were requested
        $validated = $request->validate([
            'guild-choice' => 'nullable',
            'guild-leader-choice' => 'nullable',
        ]);
        $guildChoice = $validated['guild-choice'] ?? null;
        $guildLeaderChoice = $validated['guild-leader-choice'] ?? null;

        // If "guild-choice" was specified, find the guild with that name
        if (!empty($guildChoice))
            $where[] = ['name', $guildChoice];

        // If "guild-leader-choice" was specified, find the guild master with that name
        if (!empty($guildLeaderChoice))
            $where[] = ['master', $guildLeaderChoice];

        $highscore = GuildHighscoreCache::where($where)->paginate(self::RESULTS_PER_PAGE, page: $page);

        return view('main/guildhighscore', [
            'highscore' => $highscore,
            'empireChoice' => $empireChoice,
            'guildChoice' => $guildChoice,
            'guildLeaderChoice' => $guildLeaderChoice,
        ]);
    }

    public function search(Request $request): View
    {
        $where = [];

        $validated = $request->validate([
            'empire-choice' => 'required|int',
            'guild-choice' => 'nullable',
            'guild-leader-choice' => 'nullable',
        ]);

        $empireChoice = (int) $validated['empire-choice'];
        $guildChoice = $validated['guild-choice'];
        $guildLeaderChoice = $validated['guild-leader-choice'];

        // If "empire-choice" is a valid empire, add it to the query
        if (in_array($empireChoice, array_column(EmpireEnum::cases(), 'value'), true))
            $where[] = ['empire', $empireChoice];

        // If "guild-choice" was specified, find the guild with that name
        if (!empty($guildChoice))
            $where[] = ['name', $guildChoice];

        // If "guild-leader-choice" was specified, find the guild master with that name
        if (!empty($guildLeaderChoice))
            $where[] = ['master', $guildLeaderChoice];

        $highscore = GuildHighscoreCache::where($where)->paginate(self::RESULTS_PER_PAGE);

        return view('main/guildhighscore', [
            'highscore' => $highscore,
            'empireChoice' => $empireChoice,
            'guildChoice' => $guildChoice,
            'guildLeaderChoice' => $guildLeaderChoice,
        ]);
    }
}
