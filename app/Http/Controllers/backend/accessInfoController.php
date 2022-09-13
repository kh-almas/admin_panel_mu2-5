<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AccessInfo;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class accessInfoController extends Controller
{
    public function access_info()
    {
        $this->authorize('view_access_information');
        $infos = AccessInfo::paginate(25);
        return view('backend.page.accessinfo.index',compact('infos'));
    }

    public function delete_access_info(AccessInfo $info)
    {
        $this->authorize('delete_access_information');
        $info->delete();
        return redirect()->back();
    }


}
