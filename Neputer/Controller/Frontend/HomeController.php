<?php


namespace Neputer\Controller\Frontend;
use Illuminate\Http\Request;
use Neputer\Services\PopulationService;

class HomeController
{

    /**
     * @var PopulationService
     */
    protected $populationService;

    public function __construct(PopulationService $populationService)
    {
        $this->populationService = $populationService;
    }

    public function index()
    {
        return view('frontend.home.index');
    }



}
