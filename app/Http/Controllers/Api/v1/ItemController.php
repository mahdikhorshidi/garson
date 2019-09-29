<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ItemController extends Controller
{
    public function index()
    {
        $resturants = Item::all();
        return DataTables::of($resturants)
            ->editColumn('created_at', function ($resturant) {
                return jdate($resturant->created_at)->ago();
            })
            ->editColumn('updated_at', function ($resturant) {
                return jdate($resturant->updated_at)->ago();
            })
            ->addColumn('action', function ($role) {
                return '<div class="btn-group btn-group-xs pull-right" role="group">
                            <a href="/dashboard/item/' . $role->id . '"  class="btn btn-xs btn-info" title="نمایش"><i class="fa fa-eye"></i> </a>
                            <a href="/dashboard/item/' . $role->id . '/edit"  class="btn btn-xs btn-primary" title="ویرایش"><i class="fa fa-edit"></i> </a>
                            <a href="/dashboard/item/' . $role->id . '/delete" class="btn btn-xs btn-danger" title="حذف"><i class="fa fa-close"></i> </a>
                        </div>';
            })
            ->make(true);
    }
}
