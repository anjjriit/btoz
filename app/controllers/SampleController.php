<?php


class SampleController extends BaseController
{
    public function index()
    {
        return $this->display('sample.index');
    }
}