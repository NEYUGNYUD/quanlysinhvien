<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: duype
 * Date: 9/28/2017
 * Time: 4:50 PM
 */

use App\Repositories\BaseRepositoryInterface;

abstract class BaseRepositoryAbstract implements BaseRepositoryInterface {

    /**
     * BaseRepositoryAbstract constructor.
     *
     * @param $model
     */
    protected $model;

    public function __construct()
    {
        $this->makeModel();
    }

    abstract function getModelName();

    public function makeModel()
    {
        $this->model = app()->make($this->getModelName());
    }


    public function all()
    {
        $data = $this->model->all();
        return $data;
    }

    public function create(array $data)
    {
        $this->model->create($data);
    }

    public function update($model, $data)
    {
    }

    public function destroy($id)
    {
    }

}