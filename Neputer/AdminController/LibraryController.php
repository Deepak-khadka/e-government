<?php

namespace Neputer\AdminController;
use Exception;
use Neputer\Entities\Library;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LibraryController extends BaseController
{

    protected $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Library();

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
     * @param  Library  $id
     * @return Response
     */
    public function show(Library $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Library  $id
     * @return Response
     */
    public function edit(Library $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Library $id
     * @return Response
     */
    public function update(Request $request, Library $id)
    {
        //
    }

  /**
      /**
          * Remove the specified resource from storage.
          *
          * @param Library $id
          * @return RedirectResponse
          * @throws Exception
          */
    public function destroy(Library $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
