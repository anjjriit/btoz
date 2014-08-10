<?php

class BaseController extends Controller
{

    protected $view;
    protected $redirect;
    protected $request;
    protected $input;

    public function __construct()
    {

        $this->view     = App::make('view');
        $this->redirect = App::make('redirect');
        $this->input    = App::make('request');

        $this->prepareTheme();

    }

    protected function authUser()
    {
        if (Auth::check()) {
            return Auth::user();
        }

        throw new \Exception('user not authenticated');
    }

    protected function prepareTheme()
    {
        $themePath = Config::get('theme.metro') . '/views';
        $this->view->addNamespace('theme', $themePath);
    }

    protected function display($view, $data = array())
    {
        return $this->view->make('theme::' . $view, $data);
    }

    protected function render($view, $data = array())
    {
        return $this->view->make('theme::' . $view, $data)->render();
    }

    protected function json(
        $data = array(),
        $status = 200,
        array $headers = array(),
        $options = 0
    ) {
        return Response::json($data, $status, $headers, $options);
    }

}