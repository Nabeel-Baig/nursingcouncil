<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Fund;
use App\Models\Order;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\User;
use App\Models\UserEducationalDocument;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function root()
    {

        return redirect()->route('admin.page-listing-for-intro');
            // return view('admin.dashboard.index');

    }
    // public function userDashboard()
    // {
    //     // return 'ok';
    //     $educationalDocument = UserEducationalDocument::where('user_id',auth()->user()->id)->count();
    //     $generalDocument = UserEducationalDocument::where('user_id',auth()->user()->id)->count();
    //     // return redirect()->route('admin.page-listing-for-intro',compact('generalDocument','educationalDocument'));
    //         return view('user.dashboard',compact('generalDocument','educationalDocument'));

    // }
}
