<?php

namespace Neputer\AdminController;
use Exception;
use Neputer\Entities\Account;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Services\AccountService;

class AccountController extends BaseController
{

    protected $accountService;
    protected $view_path = 'admin.account';
  
    public function __construct( AccountService $accountService)
    {
        $this->accountService = $accountService;
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
     * @param  Account  $id
     * @return Application|Factory|View|Response
     */

    public function show(Account $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Account  $id
     * @return Application|Factory|View|Response
     */

    public function edit(Account $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Account $id
     * @return Application|Factory|View|Response
     */

    public function update(Request $request, Account $id)
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
