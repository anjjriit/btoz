<?php

namespace Buzz\Core;

use Theme;
use Config;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register()
    {

    }

    public function boot()
    {
        $this->app->validator->resolver( function( $translator, $data, $rules, $messages = array(), $customAttributes = array() ) {
            return new CustomValidator($translator, $data, $rules, $messages, $customAttributes );
        } );

        Theme::init(Config::get('app.theme'));
    }

}   //end of class