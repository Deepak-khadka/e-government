<?php

namespace Neputer\Controller\Admin;
use Exception;
use Neputer\Entities\Demo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Services\DemoService;

class DemoController extends BaseController
{

    protected $demoService;
    protected $view_path = 'admin.demo';
    protected $model;
    protected $image_name = null;
    protected $folder;
    protected $folder_path;
    protected $image_dimensions;
    protected $panel = 'Demo';

    public function __construct( DemoService $demoService)
    {
        $this->demoService = $demoService;
        if(!file_exists(public_path('assets/admin/images'.DIRECTORY_SEPARATOR.$this->folder))){
                     mkdir(public_path('assets/admin/images'.DIRECTORY_SEPARATOR.$this->folder));
         }
    }

     /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|Factory|View|Response
     */

    public function index(Request $request)
    {
       $data = [];
       $data['demo'] = $this->demoService->getAlldemo($request);
      return view($this->view_path.'.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */

    public function create()
    {
        return view($this->view_path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|View|Response
     */

    public function store(Request $request)
    {
      $this->demoService->store($request);
      session()->flash('success', $this->panel.' added Successfully');
      return redirect('admin/demo');
    }

    /**
     * Display the specified resource.
     *
     * @param  Demo  $demo
     * @return Application|Factory|View|Response
     */

    public function show(Demo $demo)
    {
        $data = [];
        $data['demo'] = $demo;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Demo  $demo
     * @return Application|Factory|View|Response
     */

    public function edit(Demo $demo)
    {
        $data = [];
        $data['demo'] = $demo;
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Demo $demo
     * @return Application|Factory|View|Response
     */

    public function update(Request $request, Demo $demo)
    {
       $this->demoService->update($request, $demo);
       session()->flash('success-message', $this->panel.' Updated Successfully');
       return redirect('admin/demo');
    }

      /**
      * Remove the specified resource from storage.
      *
      * @param $model
      * @return RedirectResponse
      * @throws Exception
      */

    public function destroy( $model )
    {
        $model->delete();
        return redirect()->back();
    }
}
