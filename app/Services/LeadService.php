<?php

namespace App\Services;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class LeadService {


        public function getAssignedleads(){
                $users = User::whereNotNull('lead_assigned_id')->when((request()->from_date != null && request()->to_date != null), function ($q) {
                $q->whereBetween('created_at', [request()->from_date, request()->to_date]);
                })
                ->when((request()->brand != null), function ($q) {
                    $q->where('brand_id', request()->brand);
                })
                ->when((request()->resource != null), function ($q) {
                    $q->where('lead_assigned_id', request()->resource);
                })
                ->whereHas('roles', function ($q) {
                    // role 4 =  lead role
                    $q->where('role_id', '4');
                })->withCount(['leads', 'projects'])->when((request()->pay_status != null), function ($q) {
                    $q->where('lead_status', request()->pay_status);
                })->get();
                return $users;
        }
}
