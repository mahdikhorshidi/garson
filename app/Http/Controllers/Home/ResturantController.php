<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.resturant.index');
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

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required'
        ]);

        $resturant = new Resturant([
            'name' => $request->name,
            'detail' => $request->detail,
            'tell' => $request->tell,
            'location' => $request->location,
            'adrs' => $request->adrs
        ]);
        $user = User::where('id', $request->user_id)->first();
        $user->resturants()->save($resturant);
        $user->resturant_id = $resturant->id;
        $user->save();

        return redirect()->route('home.resturant.index')
            ->with('success','Resturant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function show(Resturant $resturant)
    {
        return view('home.resturant.show',compact('resturant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function edit(Resturant $resturant)
    {
        $resturant->user_id = $resturant->user()->first()->id; //TODO Select Resturant Main Permission
        return view('home.resturant.edit',compact('resturant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resturant $resturant)
    {
        request()->validate([
            'name' => 'required'
        ]);

        $resturant->update([
            'name' => $request->name,
            'detail' => $request->detail,
            'tell' => $request->tell,
            'location' => $request->location,
            'adrs' => $request->adrs
        ]);
        $user = User::where('id', $request->user_id)->first();
        $user->resturants()->save($resturant);
        $user->resturant_id = $resturant->id;
        $user->save();
        return view('home.resturant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resturant $resturant)
    {
        //
    }
}
