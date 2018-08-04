<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        /*Role::create([
            'name' => 'manager',
            'label' => 'مدیر اصلی سایت'
        ]);*/

        /*auth()->loginUsingId(1);*/

        /*return auth()->user()->roles()->sync(1);*/
        /*return auth()->user()->roles()->get();*/

        /*Permission::create([
            'name' => 'edit-article',
            'label' => 'ویرایش مقالات'
        ]);
        Permission::create([
            'name' => 'show-comment',
            'label' => 'مشاهده بخشهای نظرات'
        ]);*/

        //return Role::whereName('manager')->first()->permissions()->sync([1,2]);


        //dd(auth()->user()->hasRole(Permission::whereName('show-comment')->first()->roles));

        return view('Admin.panel');
    }

    public function uploadImageSubject()
    {
        $this->validate(request() , [
            'upload' => 'required|mimes:jpeg,png,bmp',
        ]);

        $year = Carbon::now()->year;
        $imagePath = "/upload/images/{$year}/";

        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();

        if(file_exists(public_path($imagePath) . $filename)) {
            $filename = Carbon::now()->timestamp . $filename;
        }

        $file->move(public_path($imagePath) , $filename);
        $url = $imagePath . $filename;

        return "<script>window.parent.CKEDITOR.tools.callFunction(1 , '{$url}' , '')</script>";
    }
}
