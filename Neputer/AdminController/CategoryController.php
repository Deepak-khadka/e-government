<?php

namespace Neputer\Category\Controller;
use Exception;
use Neputer\Category\Model\Category;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends BaseController
{

    protected $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Category();

    }
     /**
        * Display a listing of the resource.
        *
        * @return Application|View
        */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Category  $id
     * @return Response
     */
    public function show(Category $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category  $id
     * @return Response
     */
    public function edit(Category $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Category $id
     * @return Response
     */
    public function update(Request $request, Category $id)
    {
        //
    }

  /**
      /**
          * Remove the specified resource from storage.
          *
          * @param Admin $id
          * @return RedirectResponse
          * @throws Exception
          */
    public function destroy(Category $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
