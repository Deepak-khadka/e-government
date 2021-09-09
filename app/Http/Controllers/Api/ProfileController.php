<?php


namespace App\Http\Controllers\Api;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Neputer\Controller\Admin\BaseController;
use Neputer\Services\UserServices;

class ProfileController extends BaseController
{

    /**
     * @var UserServices
     */
    protected $userServices;

    public function __construct(UserServices $userServices)
    {
        $this->userServices = $userServices;
    }


    /**
     * @return JsonResponse
     */
    public function index()
    {
        dd('here');
        return $this->responseOk(new UserResource($this->userServices->getActiveUser()));
    }

    /**
     * @param Request $data
     * @param $id
     * @return mixed|void
     */
    public function update(Request $data, $id)
    {
       $user = User::where('id',$id )->update([
           $data->all()
       ]);
       return $this->responseOk(UserResource(new $user));
    }



}
