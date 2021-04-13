<?php

namespace Neputer\Controller\Admin;
use Exception;
use Illuminate\Http\JsonResponse;
use Neputer\Entities\District;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Services\DistrictService;
use Yajra\DataTables\DataTables;

class DistrictController extends BaseController
{

    protected $districtService;
    protected $view_path = 'admin.district';
    protected $model;
    protected $folder;
    protected $panel = 'District';

    public function __construct( DistrictService $districtService)
    {
        $this->districtService = $districtService;
        if(!file_exists(public_path('assets/admin/images'.DIRECTORY_SEPARATOR.$this->folder))){
                     mkdir(public_path('assets/admin/images'.DIRECTORY_SEPARATOR.$this->folder));
         }
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|Factory|View|Response
     * @throws Exception
     */

    public function index(Request $request)
    {

        $data = $this->districtService->getAllDistrict();
        if($request->ajax())
        {
            return DataTables::of($data)
                ->editColumn('id', function ($district) {
                    return '<input type="checkbox" value=' . $district->id . ' name="chkData[]">';
                })
                ->addColumn('name', function ($district) {
                    return $district->name;
                })
                ->addColumn('province', function ($district) {
                    return $district->province;
                })
                ->addColumn('action', 'admin.district.includes.data-table-action')
                ->rawColumns(['id','name','province','action'])
                ->make(true);
        }
        return view($this->view_path.'.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */

    public function create()
    {
        return view($this->view_path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application
     */

    public function store(Request $request): Application
    {
      $this->districtService->store($request);
      session()->flash('success','District added Successfully');
      return redirect('admin/district');
    }

    /**
     * Display the specified resource.
     *
     * @param  District  $id
     * @return Application|Factory|View
     */

    public function show(District $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return Application|Factory|View
     */

    public function edit($id)
    {
        $data = [];
        $data['district'] = $this->districtService->find($id);
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  $id
     * @return Application
     */

    public function update(Request $request, $id): Application
    {
       $this->districtService->update($request, $id);
       session()->flash('success-message', $this->panel.' Updated Successfully');
       return redirect('admin/district');
    }

      /**
      * Remove the specified resource from storage.
      *
      * @param $model
      * @return RedirectResponse
      * @throws Exception
      */

    public function destroy( $model ): RedirectResponse
    {
        $model->delete();
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function district(Request $request): JsonResponse
    {
        return $this->responseOk($this->districtService->getJsonData($request->get('stateNo')));
    }
}
