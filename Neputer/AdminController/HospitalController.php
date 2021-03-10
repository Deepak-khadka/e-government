<?php

namespace Neputer\AdminController;
use Exception;
use Neputer\Entities\Hospital;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Services\HospitalService;

class HospitalController extends BaseController
{

    protected $hospitalService;
    protected $view_path = 'admin.hospital';

    public function __construct( HospitalService $hospitalService)
    {
        $this->hospitalService = $hospitalService;
    }

     /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */

    public function index()
    {
      return view($this->view_path.'.index');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  Hospital  $id
     * @return Application|Factory|View|Response
     */

    public function show(Hospital $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Hospital  $id
     * @return Application|Factory|View|Response
     */

    public function edit(Hospital $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Hospital $id
     * @return Application|Factory|View|Response
     */

    public function update(Request $request, Hospital $id)
    {
        //
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
