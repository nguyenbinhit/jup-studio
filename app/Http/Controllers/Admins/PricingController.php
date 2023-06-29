<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PricingController extends BaseController
{
    public function index() {
        return view('admins.body.extras-pricing',
        ['price'=> Plan::all()]);
    }
}
