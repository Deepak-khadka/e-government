<?php


namespace Neputer\AdminController;


use Neputer\Traits\CrudTrait;
use Neputer\Traits\FileUploadTrait;
use Neputer\Mixins\Responsable;

class BaseController
{
 use FileUploadTrait, CrudTrait, Responsable ;
}
