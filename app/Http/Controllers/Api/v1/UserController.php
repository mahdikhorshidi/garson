<?php

namespace App\Http\Controllers\Api\v1;

use App\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataTables::of(User::get())
            ->editColumn('created_at', function ($user) {
                return jdate($user->created_at)->ago();
            })
            ->editColumn('updated_at', function ($user) {
                return jdate($user->updated_at)->ago();
            })
            ->addColumn('action', function ($user) {
                return '<div class="btn-group btn-group-xs pull-right" role="group">
                            <a href="/dashboard/user/' . $user->id . '"  class="btn btn-xs btn-info" title="نمایش"><i class="fa fa-eye"></i> </a>
                            <a href="/dashboard/user/' . $user->id . '/edit"  class="btn btn-xs btn-primary" title="ویرایش"><i class="fa fa-edit"></i> </a>
                            <a href="/dashboard/user/' . $user->id . '/accept" class="btn btn-xs btn-danger" title="حذف"><i class="fa fa-close"></i> </a>
                        </div>';
            })
            ->make(true);
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
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
