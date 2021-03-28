<?php


namespace Neputer\Controller\Admin;
use Illuminate\Http\Request;
use Neputer\Traits\CrudTrait;
use Neputer\Traits\FileUploadTrait;
use Neputer\Mixins\Responsable;

class BaseController
{

 use FileUploadTrait, CrudTrait, Responsable ;

    protected function redirect(Request $request)
    {
        if ($request->has('submit_continue')) {
            return back();
        }

        return redirect()->route( pathinfo($request->route()->getName(), PATHINFO_FILENAME).'.index');
    }

}
