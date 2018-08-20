<?php

namespace App\Http\Controllers;

use App\Motor;
use Illuminate\Http\Request;

class RegisterMotor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexUser()
    {
        //
        $motors = Motor::all();
        return view('index',compact('motors'));
    }

    public function index(){
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('path')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $input['path'] = $name;
        }
            Motor::create($input);
            return redirect('/admin');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //



    }

    public function showSorted($id)
    {
        //

        if ($id == 'price'){
            $motors = Motor::all()->sortBy($id);
            return view('index',compact('motors'));
        }
        if ($id == 'created_at'){
            $motors = Motor::all()->sortBy($id);
            return view('index',compact('motors'));
        }

        else {
            $motors = Motor::all()->where('color',$id);
            return view('index',compact('motors'));
        }

    }

    public function showDetail($id)
    {
        //
        $motor = Motor::findOrFail($id)->first();
       // return $motor;
       return view('detail',compact('motor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
