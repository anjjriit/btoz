<?php

if ( ! function_exists('asset_hashed'))
{
    /**
     * Append hash modifier so url always change if file changed.
     *
     * @param  string  $asset
     * @return string
     */
    function asset_hashed($asset)
    {
        $modifier = null;
        $file = public_path($asset);
        if(is_file($file))
        {
            $hash = md5(filemtime($file));
            $modifier = "?v=$hash";
        }

        return asset($asset . $modifier);
    }
}

if ( ! function_exists('theme_asset'))
{
    /**
     * Shortcut to include theme asset
     *
     * @param  string  $asset
     * @return string
     */
    function theme_asset($asset)
    {
        $theme    = Config::get('app.theme');
        return asset('themes/' . $theme . '/assets/' . $asset);
    }
}

if ( ! function_exists('theme_asset_hashed'))
{
    /**
     * Append hash modifier so url always change if file changed.
     *
     * @param  string  $asset
     * @return string
     */
    function theme_asset_hashed($asset)
    {
        $modifier = null;
        $theme    = Config::get('app.theme');
        $file     = public_path('themes/' . $theme . '/assets/' . $asset);
        if(is_file($file))
        {
            $hash = md5(filemtime($file));
            $modifier = "?v=$hash";
        }

        return theme_asset($asset . $modifier);
    }
}

if ( ! function_exists('d'))
{
    /**
     * dump variable with formatted style
     *
     * @param  string  $var
     * @return string
     */
    function d($var)
    {
        echo '<pre>';
        dd($var);
        echo '</pre>';
    }
}