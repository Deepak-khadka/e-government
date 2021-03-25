<?php

namespace Neputer\Services;

use Neputer\Entities\Demo;
use Illuminate\Http\Request;
/**
 * Class DemoService
 * @package Neputer\Services
 */
class DemoService
{

    /**
     * The Demo instance
     *
     * @var $model
     */
    protected $model;

    /**
     * DemoService constructor.
     * @param Demo $Demo
     */
    public function __construct(Demo $Demo)
    {
        $this->model = $Demo;
    }

     public function getAllDemo(Request $request)
     {
       return  $this->model->where(function ($query) use ($request){

                  if($request->has('filter_name') && $request->get('filter_name')){
                      $query->where('Demo.name','like','%'.$request->get('filter_name').'%');
                  }

                  if($request->has('filter_email') && $request->get('filter_email')){
                      $query->where('Demo.email', 'like', '%'. $request->get('filter_email'). '%');
                  }

                  if($request->has('filter_message') && $request->get('filter_message')){
                      $query->where('Demo.message', 'like', '%'.$request->get('filter_message').'%');
                  }

                  if($request->has('filter_created_at') && $request->get('filter_created_at')){
                      $query->where('Demo.created_at', 'like', '%'.$request->get('filter_created_at').'%');
                  }

                  if ($request->has('filter_status') && $request->get('filter_status') && $request->get('filter_status') !== 'all') {
                      $query->where('Demo.status', $request->get('filter_status') == 'seen' ? 1 : 0);
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
