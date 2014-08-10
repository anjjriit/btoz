<?php


class SampleController extends BaseController
{
    public function index()
    {
        return View::make('sample.index');
    }
}