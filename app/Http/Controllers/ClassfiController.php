<?php

namespace App\Http\Controllers;

use App\Classfi;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests\ClassfiRequest;
class ClassfiController extends Controller
{
    //顯示所有文章類別
    public function index()
    {   
        
        $classfis = DB::table('classfis')->get();
        $data=['classfis'=>$classfis];
        return view('admin.classfi',$data);
    }

    //新增類別
    public function classadd()
    {
        
        return view('admin.classadd');
    }
    
    //儲存類別
    public function classstore(ClassfiRequest $request) 
    {     
        Classfi::create($request->all());
        return redirect()->route('classfi.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Classfi  $classfi
     * @return \Illuminate\Http\Response
     */
    public function show(Classfi $classfi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classfi  $classfi
     * @return \Illuminate\Http\Response
     */
    public function edit(Classfi $classfi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classfi  $classfi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classfi $classfi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classfi  $classfi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classfi $classfi)
    {
        //
    }
}
