<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FrontControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;//for delete image

class FrontcontrolController extends Controller
{
    public function admin_front_control()
    {
        $front = FrontControl::First();
        return view('admin.FrontControl',compact('front'));
    }

    public function front_control_store(Request $request)
    {
        $front = FrontControl::first();
        if($front==NULL)
        {
            $front=new FrontControl;
        }else{
            $front = FrontControl::first();
        }
      
      /*=======================Home====================*/
        $front->home_bg_txt1 = $request->home_bg_txt1;
        $front->home_bg_txt2 = $request->home_bg_txt2;
        $front->home_bg_txt3 = $request->home_bg_txt3;
        if($request->hasFile('home_bg_img'))
        {
            $path ='img_DB/front/home/'.$front->home_bg_img;
            if(File::exists($path))//avobe import class
            {
                File::delete($path);
            }
            $file= $request->file('home_bg_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img_DB/front/home/',$filename);
            $front->home_bg_img = $filename;
        }


        $front->save();
        return Redirect()->back()->with('status', "Frontend Design Updated Successfully");
    }
}
