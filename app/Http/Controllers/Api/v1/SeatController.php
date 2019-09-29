<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class SeatController extends Controller
{
    public function index()
    {
        $seats = Seat::where('resturant_id', Auth::user()->resturant_id)->get();
        return DataTables::of($seats)
            ->editColumn('created_at', function ($seat) {
                return jdate($seat->created_at)->ago();
            })
            ->editColumn('updated_at', function ($seat) {
                return jdate($seat->updated_at)->ago();
            })
            ->addColumn('action', function ($seat) {
                return '<div class="btn-group btn-group-xs pull-right" role="group">
                            <a href="/home/seat/' . $seat->id . '"  class="btn btn-xs btn-info" title="نمایش"><i class="fa fa-eye"></i> </a>
                            <a href="/home/seat/' . $seat->id . '/edit"  class="btn btn-xs btn-primary" title="ویرایش"><i class="fa fa-edit"></i> </a>
                            <a href="/home/seat/' . $seat->id . '/delete" class="btn btn-xs btn-danger" title="حذف"><i class="fa fa-close"></i> </a>
                        </div>';
            })
            ->make(true);
    }
}
