<?php


namespace Neputer\Controller\Frontend;
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
