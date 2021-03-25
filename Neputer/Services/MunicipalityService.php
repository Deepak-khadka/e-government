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

     public function getAllMunicipality(Request $request)
     {
       return  $this->model->where(function ($query) use ($request){

                  if($request->has('filter_name') && $request->get('filter_name')){
                      $query->where('Municipality.name','like','%'.$request->get('filter_name').'%');
                  }

                  if($request->has('filter_email') && $request->get('filter_email')){
                      $query->where('Municipality.email', 'like', '%'. $request->get('filter_email'). '%');
                  }

                  if($request->has('filter_message') && $request->get('filter_message')){
                      $query->where('Municipality.message', 'like', '%'.$request->get('filter_message').'%');
                  }

                  if($request->has('filter_created_at') && $request->get('filter_created_at')){
                      $query->where('Municipality.created_at', 'like', '%'.$request->get('filter_created_at').'%');
                  }

                  if ($request->has('filter_status') && $request->get('filter_status') && $request->get('filter_status') !== 'all') {
                      $query->where('Municipality.status', $request->get('filter_status') == 'seen' ? 1 : 0);
                  }

              })->latest()
                  ->paginate(10);
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
