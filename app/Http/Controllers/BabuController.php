<?php

namespace App\Http\Controllers;

use App\Models\babu;
use Illuminate\Http\Request;

class BabuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index=babu::all();
        return view('oliur.index')->with('info',$index);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oliur.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();

        babu::create($input);
        return redirect('oliur')->with('flash_message','student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\babu  $babu
     * @return \Illuminate\Http\Response
     */

        public function show( $id)
        {
            $input =babu::find($id);
            return view('oliur.show')->with('oliur',$input);
        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\babu  $babu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students=babu::find($id);
        return view('oliur.edit')->with('banna',$students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\babu  $babu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $student =babu::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('oliur')->with('flash_message', 'student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\babu  $babu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        babu::destroy($id);
        return redirect('oliur')->with('flash_message', 'Student deleted!');
    }
}
