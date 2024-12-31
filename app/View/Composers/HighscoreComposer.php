<?php

namespace App\View\Composers;

use App\Models\Game\Highscore\GuildHighscoreCache;
use App\Models\Game\Highscore\HighscoreCache;
use Illuminate\View\View;

class HighscoreComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        // Fetch the top highscore
        $topHighscore = HighscoreCache::orderBy('id')->take(10)->get();
        $view->with('topHighscore', $topHighscore);

        // Fetch the top guild highscore
        $topGuildHighscore = GuildHighscoreCache::orderBy('id')->take(10)->get();
        $view->with('topGuildHighscore', $topGuildHighscore);
    }
}
