<?php

namespace Neputer\Controller\Admin;
use Exception;
use Illuminate\Http\JsonResponse;
use Neputer\Entities\Municipality;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Services\MunicipalityService;
use Yajra\DataTables\DataTables;

class MunicipalityController extends BaseController
{

    protected $municipalityService;
    protected $view_path = 'admin.municipality';
    protected $model;
    protected $image_name = null;
    protected $folder;
    protected $folder_path;
    protected $image_dimensions;
    protected $panel = 'Municipality';

    public function __construct( MunicipalityService $municipalityService)
    {
        $this->municipalityService = $municipalityService;
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
        $data = $this->municipalityService->getAllmunicipality();
        if($request->ajax())
        {
            return DataTables::of($data)
                ->editColumn('municipalities.id', function ($municipality) {
                    return '<input type="checkbox" value=' . $municipality . ' name="chkData[]">';
                })
                ->addColumn('district', function ($municipality) {
                    return $municipality->district;
                })
                ->addColumn('municipality', function ($municipality) {
                    return $municipality->municipality;
                })
                ->addColumn('action', function ($data) {
                    $model = 'municipality';
                    return view('admin.district.includes.data-table-action', compact('data', 'model'))->render();
                })

                ->rawColumns(['id','name','district','action'])
                ->make(true);
        }
        return view($this->view_path . '.index', compact('data'));
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
     * @return RedirectResponse
     */

    public function store(Request $request)
    {
      $this->municipalityService->store($request);
      session()->flash('success', $this->panel.' added Successfully');
      return $this->redirect($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  Municipality  $municipality
     * @return Application|Factory|View|Response
     */

    public function show(Municipality $municipality)
    {
        $data = [];
        $data['municipality'] = $municipality;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Municipality  $municipality
     * @return Application|Factory|View|Response
     */

    public function edit(Municipality $municipality)
    {
        $data = [];
        $data['municipality'] = $municipality;
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Municipality $municipality
     * @return Application|Factory|View|Response
     */

    public function update(Request $request, Municipality $municipality)
    {
       $this->municipalityService->update($request, $municipality);
       session()->flash('success-message', $this->panel.' Updated Successfully');
       return redirect('admin/municipality');
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

    public function getMunicipality(Request $request): JsonResponse
    {
        return $this->responseOk($this->municipalityService->getJsonData($request->get('districtNo')));
    }
}
