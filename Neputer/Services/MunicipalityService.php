<?php

namespace Neputer\Services;

use Neputer\Entities\Municipality;
use Illuminate\Http\Request;
/**
 * Class MunicipalityService
 * @package Neputer\Services
 */
class MunicipalityService
{

    /**
     * The Municipality instance
     *
     * @var $model
     */
    protected $model;

    /**
     * MunicipalityService constructor.
     * @param Municipality $Municipality
     */
    public function __construct(Municipality $Municipality)
    {
        $this->model = $Municipality;
    }

     public function getAllMunicipality()
     {
       return  $this->model->select('municipalities.id','district.name as district','municipalities.municipality as municipality')->join('district','district.id','=','municipalities.district_id')->get();
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
}
