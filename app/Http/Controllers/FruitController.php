<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // localhost/fruit
    public function index()
    {
        //
        $fruits = Fruit::all();
        return view('fruit.index', 
           [
               "fruits"=> $fruits,
            ]);
    }

    // localhost/fruit/create
    public function create()
    {
        //
        return view('fruit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fruit = new Fruit($request->all());
        $fruit->save();

        return redirect(url('/fruit'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */

     // localhost/fruit/{id}
     // localhost/fruit/1
    public function show(Fruit $fruit)
    {
        //
        return view('fruit.details',
        [
            "fruit"=> $fruit,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
        //
	return view('fruit.update',["fruit"=>$fruit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruit $fruit)
    {
        //
        $fruit->update($request->all());
        return redirect(url('/fruit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruit $fruit)
    {
        //
    }

    public function delete(Fruit $fruit){
        $fruit->delete();
        return redirect(url('/fruit'));
    }
}
