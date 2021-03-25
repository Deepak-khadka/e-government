<?php

namespace Neputer\Services;

use Illuminate\Http\Request;
use Neputer\Entities\District;
use Yajra\DataTables\DataTables;

/**
 * Class DistrictService
 * @package Neputer\Services
 */
class DistrictService
{

    /**
     * The District instance
     *
     * @var $model
     */
    protected $model;

    /**
     * DistrictService constructor.
     * @param District $district
     */
    public function __construct(District $district)
    {
        $this->model = $district;
    }

     public function getAllDistrict()
     {
       return $this->model->latest();

     }

    public function store(Request $request)
    {
        $this->model->create($request->all());
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update(Request $request, $id)
    {
        $this->model->where('id',$id)->update($request->except('_method','_token'));
    }

    /**
     * @param $get
     * @return bool
     */
    public function getJsonData($get)
    {
       return $this->model->select('id','name')->where('province',$get)->get();
    }

}
