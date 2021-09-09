<?php

namespace Neputer\Controller\Frontend;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Neputer\Controller\Admin\BaseController;
use Neputer\Services\UserServices;

class HomeController extends BaseController
{
    /**
     * @var UserServices
     */
    protected $userService;

    /**
     * @param UserServices $userServices
     */
    public function __construct(UserServices $userServices)
    {
        $this->userService = $userServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = [];
        $data['users'] = $this->userService->getAllUsers();
        $data['employment'][] = count($data['users']->where('state', 1)->where('service_type', '2'));
        $data['employment'][] = count($data['users']->where('state', 2)->where('service_type', '2'));
        $data['employment'][] = count($data['users']->where('state', 3)->where('service_type', '2'));
        $data['employment'][] = count($data['users']->where('state', 4)->where('service_type', '2'));
        $data['employment'][] = count($data['users']->where('state', 5)->where('service_type', '2'));
        $data['employment'][] = count($data['users']->where('state', 6)->where('service_type', '2'));

        $data['unemployment'][] = count($data['users']->where('state', 1)->where('service_type', '3'));
        $data['unemployment'][] = count($data['users']->where('state', 2)->where('service_type', '3'));
        $data['unemployment'][] = count($data['users']->where('state', 3)->where('service_type', '3'));
        $data['unemployment'][] = count($data['users']->where('state', 4)->where('service_type', '3'));
        $data['unemployment'][] = count($data['users']->where('state', 5)->where('service_type', '3'));
        $data['unemployment'][] = count($data['users']->where('state', 6)->where('service_type', '3'));

        $data['education_level'][] = count($data['users']->where('education_level', 'primary'));
        $data['education_level'][] = count($data['users']->where('education_level', 'lower'));
        $data['education_level'][] = count($data['users']->where('education_level', 'secondary'));
        $data['education_level'][] = count($data['users']->where('education_level', 'senior_secondary'));
        $data['education_level'][] = count($data['users']->where('education_level', 'bachelor'));
        $data['education_level'][] = count($data['users']->where('education_level', 'master'));
        $data['education_level'][] = count($data['users']->where('education_level', 'phd'));


        return view('frontend.home.index', compact('data'));
    }

    public function getLoggedInUser()
    {
        dd('here');
       return $this->responseOk(\Auth::user());
    }

}
