<?php

namespace Neputer\AdminController;
use Exception;
use Neputer\Entities\Account;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccountController extends BaseController
{

    protected $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Account();

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
     * @param  Account  $id
     * @return Response
     */
    public function show(Account $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Account  $id
     * @return Response
     */
    public function edit(Account $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Account $id
     * @return Response
     */
    public function update(Request $request, Account $id)
    {
        //
    }

  /**
      /**
          * Remove the specified resource from storage.
          *
          * @param Account $id
          * @return RedirectResponse
          * @throws Exception
          */
    public function destroy(Account $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
