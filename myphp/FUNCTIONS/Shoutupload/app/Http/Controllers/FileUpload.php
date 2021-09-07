<?php

namespace App\Http\Controllers;
header("Access-Control-Allow-Origin: *");
use Illuminate\Http\Request;
use App\Models\Image;

class FileUpload extends Controller
{

    public function createForm(){
        return view('shout-upload');
      }
    
    
      public function fileUpload(Request $req){
        $req->validate([
          'File' => 'required',
          'File.*' => 'mimes:mp3,wav,mp4,wmv,avi,jpeg,jpg,png,gif,csv,txt,pdf|max:4096'
        ]);
    
        if($req->hasfile('File')) {
            foreach($req->file('File') as $file)
            {
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file->move(public_path().'/uploads/', $name);  
                $Data[] = $name;  
            }
    
            $fileModal = new Image();
            $fileModal->name = json_encode($Data);
            $fileModal->image_path = $extension; 
            // json_encode($Data);
            
           
            $fileModal->save();
    
           return back()->with('success', 'Shout has successfully uploaded!');
        }
      }
}
