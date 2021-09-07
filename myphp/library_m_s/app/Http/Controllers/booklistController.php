<?php

namespace App\Http\Controllers;
use App\Models\booklist as Modelsbooklist;

use Illuminate\Http\Request;

class booklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "In booklistController index function";
        $booklist=Modelsbooklist::all();
        //print_r($booklist);
         return view('booklist', ['booklist'=>$booklist, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booklist=Modelsbooklist::all();
        return view('booklist', ['booklist'=>$booklist, 'layout'=>'create']);
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booklist = new Modelsbooklist();
        $booklist -> id =$request -> input('id');
        $booklist -> bookName =$request -> input('bookName');
        $booklist->bookCategory =$request->input('bookCategory');
        $booklist -> author =$request -> input('author');
        $booklist->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $booklist = booklist::find($id);
     $booklists = booklist::all() ;
     return view('booklist',['booklists'=>$booklists,'booklist'=>$booklist,'layout'=>'show']);   
    
     //$student = Student::find($id);$students = Student::all() ;
     //return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booklist = Modelsbooklist::find($id);
       // $booklists = $Modelsbooklist::all() ;
       // return view('$booklist',['$booklists'=>$booklists,'$booklist'=>$booklist,'layout'=>'edit']);
        return view('booklist', ['booklist'=>$booklist, 'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //return "In update";
        $booklist =Modelsbooklist::find($id);
        $booklist->bookName =$request->input('bookName');
        $booklist->bookCategory =$request->input('bookCategory');
        $booklist->author = $request->input('author');
        $booklist->save();
        //print_r($booklist);
       return redirect('/') ;
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         /* destroy */
     
      $booklist = Modelsbooklist::find($id);
      $booklist->delete() ;
      return redirect('/') ;
    }
}
