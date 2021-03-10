<?php

namespace Neputer\AdminController;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Neputer\Entities\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\Types\Parent_;

class CategoryController extends BaseController
{

    protected $model;
    public $base_route = 'admin.category';
    public $panel = 'Category';

    public function __construct()
    {
        parent::__construct();
        $this->model = new Category();

    }

    /**
     * Display a listing of the resource.
     *
     * @param null $type
     * @return Application|Factory|View
     */
    public function index($type = null)
    {

        return view('admin.category.index',compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
       $panel =  $this->panel;
       $title = 'check';
        return view($this->base_route.'.create',compact('panel','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Request
     */
    public function store(Request $request): Request
    {
      return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return Response
     */
    public function show($id): ?Response
    {
       return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   $id
     * @return Response
     */
    public function edit($id): Response
    {
       return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  $id
     * @return Response
     */

//    public function update(Request $request, $id)
//    {
//        //
//    }

  /**
      /**
          * Remove the specified resource from storage.
          *
          * @param Category $id
          * @return RedirectResponse
          * @throws Exception
          */
//    public function destroy(Category $id)
//    {
//        $id->delete();
//        return redirect()->back();
//    }
}
