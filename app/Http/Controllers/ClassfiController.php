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

    //編輯文章類別
    public function classedit($id)
    {
        $classfis = Classfi::Find($id);
        return view('admin.classedit', ['classfis'=>$classfis]);
    }

    //儲存編輯過後的類別
    public function classupdate(ClassfiRequest $request,$id)
    {
        $classfis = Classfi::find($id);
        $classfis->update($request->all());
        return redirect()->route('classfi.index');  
    }


    //確認刪除類別
    public function delcheck($id)
    {
        $classfis =Classfi::Find($id);
        return view('admin.classdelet',['classfis'=>$classfis]);
    }
    //刪除類別
    public function destroy($id)
    {
        Classfi::destroy($id);
        return redirect()->route('classfi.index');
    }
}
