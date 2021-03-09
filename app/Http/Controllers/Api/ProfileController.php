<?php


namespace App\Http\Controllers\Api;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Neputer\AdminController\BaseController;

class ProfileController extends BaseController
{


    public function index()
    {
        $user = User::where('id',1)->first();
        return $this->responseOk(new UserResource($user));
    }
    public function store(Request $request)
    {
      return $request->header();
    }



}
