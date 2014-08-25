<?php


namespace Buzz\Skrd;

use Buzz\Exception\ValidationException;

class Repository
{

    /**
     * @var Skrd
     */
    private $model;

    public function __construct(Skrd $model)
    {
        $this->model = $model;
    }

    public function paginate()
    {
        return $this->model->paginate();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store($input)
    {
        $v = UserValidator::make($input);

        if ($v->passes()) {
            return $this->model->create($input);
        }

        throw new ValidationException($v->errors());

    }
}