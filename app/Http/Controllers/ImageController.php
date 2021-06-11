<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function index(){
        return view('image');
    }
    public function store(Request $request){
        $data= Validator::make($request->all(),[
            'image'=>'required|mimes:jpg,png,jpeg',
        ])->validate();
        $image=$request->file('image');
        if ($request->hasFile('image')) {
            foreach($image as $item){
                $filename=$item->extension();
                $item->move(public_path('hachfi'),$filename);
                $files[]=$filename;
            }
            $images=implode(',',$files);

            # code...
        }
        $image=new Image();
        $image->image=$images;
        $image->save();
    }
    public function getImage(){
        $images=Image::OrderBy('id','DESC')->get();
        return view('imageView', ['image' => $images]);
    }
    //
}
