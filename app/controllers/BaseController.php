<?php

class BaseController extends Controller
{

    public function __construct()
    {
        $this->prepareTheme();
    }

    protected function prepareTheme()
    {
        Theme::init(Config::get('app.theme'));
    }

}