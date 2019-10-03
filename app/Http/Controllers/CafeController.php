<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cafe;

class CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cafes = Cafe::all();
        return view('cafe.index', ['cafes' => $cafes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = 'yurie';
      return view('cafe.create')->with('user',$user);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        // if($request->get(Cafe::RESTDAY) == 'on') {
        //     $restday = 1;
        // }
        // else {
        //     $restday = 0;
        // }

        if($request->get(Cafe::CREDIT) == 'on') {
            $credit = 1;
        }
        else {
            $credit = 0;
        }
        
        $restday =array_sum($request->get(Cafe::RESTDAY));

        $cafe = new Cafe();
        $cafe->fill($request->all())
             ->fill([
                Cafe::RESTDAY => $restday,
                Cafe::CREDIT  => $credit,
            ])
            // dd($cafe);
            ->save();

        return redirect()->route('cafe.index');

        return redirect()->route('cafe.create');

        // dd($request->all());
      // dump and die ここで止まる
        
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
