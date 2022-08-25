<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AccessInfo;
use Illuminate\Http\Request;

class accessInfoController extends Controller
{
    public function access_info()
    {
        $infos = AccessInfo::paginate(25);
        return view('backend.page.accessinfo.index',compact('infos'));
    }

    public function delete_access_info(AccessInfo $info)
    {
        $info->delete();
        return redirect()->back();
    }


}
