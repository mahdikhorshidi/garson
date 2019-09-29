<?php

namespace App\Http\Controllers\Home;

use App\Models\Resturant;
use App\Models\ResturantCategory;
use Illuminate\Http\Request;

class ResturantCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resturant = Resturant::get();
        return view('home.resturant.index',compact('resturant'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ResturantCategory $resturantCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ResturantCategory $resturantCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResturantCategory $resturantCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResturantCategory $resturantCategory)
    {
        //
    }
}
