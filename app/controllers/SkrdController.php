<?php

use Buzz\Skrd\Repository;
use Buzz\Exception\ValidationException;

class SkrdController extends \BaseController {

    /**
     * @var Repository
     */
    private $repository;

    public function __construct(Repository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {
        $data = $this->repository->paginate();
        return View::make('skrd.index', compact('data'));
    }

    public function show($id)
    {
        $item = $this->repository->find($id);
        return View::make('skrd.show', compact('item'));
    }

    public function create()
    {
        return View::make('skrd.create');
    }

    public function store()
    {
        try
        {
            $this->repository->store(Input::all());
            return Redirect::route('skrd.index')->withInfo('SKRD Berhasil Dibuat');
        }
        catch (ValidationException $e)
        {
            return Redirect::back()->withErrors($e->getErrors());
        }
    }

    public function getPdf($id)
    {
        $item = $this->repository->find($id);

        $pdf = PDF::loadView('skrd.pdf', compact('item'));
        $pdf->setPaper('a4');
        return $pdf->stream();

//        return View::make('skrd.pdf', compact('skrd'));
    }

}
