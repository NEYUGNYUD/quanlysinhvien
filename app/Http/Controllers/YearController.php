<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Year\YearRepositoryInterface;
use App\Http\Requests\YearRequest;
use App\Year;

class YearController extends Controller
{
	protected $yearRepository;

    public function __construct(YearRepositoryInterface $yearRepository) {
		$this->yearRepository = $yearRepository;
	}

    public function index() {
	   	$yearsList = $this->yearRepository->all();
	   	return view('admin.pages.year.list', ['yearsList' => $yearsList]);
    }

	public function create() {
		return view('admin.pages.year.insert');
	}

	public function store(YearRequest $request) {
		$data = array();
		$data['year'] = $request['year'];
		$this->yearRepository->create($data);
		return redirect()->route('years.index')->with('notification', 'Thêm thành công');
	}

	public function edit(Year $year) {
		return view('admin.pages.year.edit', ['year' => $year]);
	}

	public function update(Year $year, YearRequest $request) {
		echo 'd'; die();
	}
}
