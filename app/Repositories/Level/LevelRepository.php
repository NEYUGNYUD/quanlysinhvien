<?php
namespace App\Repositories\Level;
/**
 * Created by PhpStorm.
 * User: duype
 * Date: 9/29/2017
 * Time: 1:38 PM
 */

use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\Level\LevelRepositoryInterface;
use App\Level;

class LevelRepository extends BaseRepositoryAbstract implements LevelRepositoryInterface{

    public function getModelName()
    {
        return Level::class;
    }

    public function getAllActive()
    {
        // TODO: Implement getAllActive() method.
    }

}