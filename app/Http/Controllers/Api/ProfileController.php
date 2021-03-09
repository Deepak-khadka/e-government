<?php


namespace App\Http\Controllers\Api;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Neputer\AdminController\BaseController;
use Neputer\Mixins\Responsable;

class ProfileController extends BaseController
{
    use Responsable;

    public function index()
    {
        $user = User::where('id',2)->first();
        return $this->responseOk($user);
    }
    public function store(Request $request)
    {
      return $request->header();
    }



}
