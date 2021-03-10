<?php


namespace Neputer\AdminController;


use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;
use Neputer\Traits\CrudTrait;
use Neputer\Traits\FileUploadTrait;
use Neputer\Mixins\Responsable;

class BaseController
{

 use FileUploadTrait, CrudTrait, Responsable ;

    /**
     * @var Repository|Application|mixed
     */
    protected $view_path_titles;

    public function __construct()
    {
      $this->view_path_titles = config('neputer.config.view_path.backend');
      dd($this->view_path_titles);
    }

}
