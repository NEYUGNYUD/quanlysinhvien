<?php

namespace App\Repositories\Year;

use App\Year;
use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\Year\YearRepositoryInterface;

class YearRepository extends BaseRepositoryAbstract implements YearRepositoryInterface {
	public function getModelName() {
		return Year::class;
	}

	public function findByYear($year) {
		$year = $this->model->where('year', "=" , $year)->get();
		return $year;
	}
}
