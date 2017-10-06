<?php
/**
 * Created by PhpStorm.
 * User: duype
 * Date: 10/6/2017
 * Time: 1:58 PM
 */

namespace App\Repositories\Year;


interface YearRepositoryInterface
{
    public function findByYear($year);
}
