<?php


namespace Neputer\AdminController;


use Neputer\Traits\CrudTrait;
use Neputer\Traits\FileUploadTrait;

class BaseController
{
 use FileUploadTrait, CrudTrait;
}
