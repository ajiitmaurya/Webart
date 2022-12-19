<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request as ImgUpload;
use App\Models\child as NewChild;

class ChildController extends Controller
{
    public function newChildrenRegistration(){
        return view('child-registration');
    }

    public function newChildren(imgUpload $request){
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
           $path = $request->file('image')->store('images');
           return $this->newReg($path);
    }

    public function newReg($img_name){
        $inputs=Request::all();
        unset($inputs['image']);
        $inputs['img']=$img_name;
        $child_data=NewChild::create($inputs);
        if(!empty($child_data)){ 
            $child=$child_data->toArray();
          return view('viewdata', compact('child'));
        }else{
            return ['Error'=>'SomeThing Went Wrong'];
        }
    }
}
