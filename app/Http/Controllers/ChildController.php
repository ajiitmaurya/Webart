<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request as ImgUpload;
use App\Models\child as NewChild;

class ChildController extends Controller
{
    public function newChildrenRegistration(){
        $msg='';
        return view('child-registration',compact('msg'));
    }

    public function newChildren(imgUpload $request){
        $inputs=Request::all();
        $path='';
        if(!empty($inputs['name']) && !empty($inputs['dob']) && !empty($inputs['class']) && !empty($inputs['Add']) && !empty($inputs['city']) && !empty($inputs['state']) && !empty($inputs['country']) && !empty($inputs['pincode'])){
        if(!empty($inputs['image'])){
            $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
           $path = $request->file('image')->store('images');
        }
           return $this->newReg($path);
        }else{
            $msg='Name,Date Of Birth, Class,Address,City,State,Country,Pincode Required';
            return view('child-registration',compact('msg'));
        }
    }

    public function newReg($img_name){
        $inputs=Request::all();
        if(!empty($inputs['image'])){
        unset($inputs['image']);
        }
        $inputs['img']=$img_name;
            $child=$inputs;
          return view('viewdata', compact('child'));
    }
}
