<?php

namespace Neputer\Controller\Admin;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Foundation\Request\Population\PopulationFormValidation;
use Neputer\Services\PopulationService;


class PopulationController extends BaseController
{

    protected $populationService;
    protected $view_path = 'admin.population';
    protected $panel = 'Population';
    protected $image_name = null;
    protected $folder;
    protected $folder_path;
    protected $image_dimensions;

    public function __construct( PopulationService $populationService)
    {
        $this->populationService = $populationService;
        $this->folder = config('neputer.assets.panel_image_folders.population');
        if(!file_exists(public_path('assets/admin/images'.DIRECTORY_SEPARATOR.$this->folder))){
             mkdir(public_path('assets/admin/images'.DIRECTORY_SEPARATOR.$this->folder));
        }
        $this->folder_path = public_path('assets/admin/images' . DIRECTORY_SEPARATOR . $this->folder);
        $this->image_dimensions = config('neputer.image-dimensions.population');
    }

     /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|Factory|View|Response
     */

    public function index(Request $request)
    {
        $data = [];
        $data['rows'] = $this->populationService->getUsers($request);
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
     * @param PopulationFormValidation $request
     * @return Application|Factory|View|Response
     */

    public function store(PopulationFormValidation $request)
    {
       $this->_uploadImage($request->file);

        $request->merge([
            'name'=>$request->get('first_name').' '.$request->get('middle_name').' '.$request->get('last_name'),
            'password'=>bcrypt($request->get('first_name').'@123'),
            'email'=>$request->get('first_name').$request->get('last_name').'@gmail.com',
            'image'=>$this->image_name,
            'role'=>'users'
        ]);
        $this->populationService->create($request->all());
        $request->session()->flash('success',$this->panel.'Created Successfully');
        return redirect($this->view_path.'.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  User $id
     * @return Application|Factory|View|Response
     */

    public function show(User$id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $id
     * @return Application|Factory|View|Response
     */

    public function edit(User$id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User$id
     * @return Application|Factory|View|Response
     */

    public function update(Request $request, User$id)
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
