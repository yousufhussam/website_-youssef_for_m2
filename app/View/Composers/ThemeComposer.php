<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ThemeComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('theme', 'classic');
        $view->with('subTheme', 'normal');
    }
}
