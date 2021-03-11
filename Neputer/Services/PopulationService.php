<?php

namespace Neputer\Services;

use App\Models\User;
use Illuminate\Http\Client\Request;


/**
 * Class PopulationService
 * @package Neputer\Services
 */
class PopulationService
{

    /**
     * The Population instance
     *
     * @var $model
     */
    protected $model;

    /**
     * PopulationService constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getUsers(\Illuminate\Http\Request $request)
    {
        return  $this->model->where(function ($query) use ($request){

            if($request->has('filter_name') && $request->get('filter_name')){
                $query->where('population.name','like','%'.$request->get('filter_name').'%');
            }

            if($request->has('filter_email') && $request->get('filter_email')){
                $query->where('population.email', 'like', '%'. $request->get('filter_email'). '%');
            }

            if($request->has('filter_message') && $request->get('filter_message')){
                $query->where('population.message', 'like', '%'.$request->get('filter_message').'%');
            }

            if($request->has('filter_created_at') && $request->get('filter_created_at')){
                $query->where('population.created_at', 'like', '%'.$request->get('filter_created_at').'%');
            }

            if ($request->has('filter_status') && $request->get('filter_status') && $request->get('filter_status') !== 'all') {
                $query->where('population.status', $request->get('filter_status') == 'seen' ? 1 : 0);
            }

        })->latest()
            ->paginate(10);
    }

    public function create(array $all)
    {
        dd($all);
         $this->model->create($all);
    }


}
