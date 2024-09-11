<?php

namespace Narsil\TipTap;

#region USE

use Illuminate\Support\ServiceProvider;

#endregion

/**
 * @version 1.0.0
 *
 * @author Jonathan Rigaux
 */
final class NarsilTipTapServiceProvider extends ServiceProvider
{
    #region PUBLIC METHODS

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->bootTranslations();
    }

    #endregion

    #region PRIVATE METHODS

    /**
     * @return void
     */
    private function bootTranslations(): void
    {
        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang', 'tiptap');
    }

    #endregion
}
