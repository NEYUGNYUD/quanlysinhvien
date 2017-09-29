<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: duype
 * Date: 9/28/2017
 * Time: 4:40 PM
 */

interface BaseRepositoryInterface {

    public function all();
    public function create(array $data);
    public function update($model, $data);
    public function destroy($id);
}