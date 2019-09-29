<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return Datatables::of($roles)
            ->editColumn('created_at', function ($role) {
                return jdate($role->created_at)->ago();
            })
            ->editColumn('updated_at', function ($role) {
                return jdate($role->updated_at)->ago();
            })
            ->addColumn('action', function ($role) {
                return '<div class="btn-group btn-group-xs pull-right" role="group">
                            <a href="/dashboard/role/' . $role->id . '"  class="btn btn-xs btn-info" title="نمایش"><i class="fa fa-eye"></i> </a>
                            <a href="/dashboard/role/' . $role->id . '/edit"  class="btn btn-xs btn-primary" title="ویرایش"><i class="fa fa-edit"></i> </a>
                            <a href="/dashboard/role/' . $role->id . '/accept" class="btn btn-xs btn-danger" title="حذف"><i class="fa fa-close"></i> </a>
                        </div>';
            })
            ->make(true);
    }
}
