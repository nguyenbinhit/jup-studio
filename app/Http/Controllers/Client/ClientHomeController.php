<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Models\Employee;
use App\Models\Page;
use App\Models\Plan;
use App\Models\Review;

class ClientHomeController extends BaseController
{
    public function index()
    {
        return view('welcome', [
            'employees' => Employee::all(),
            'pages' => Page::with('image')->get(),
            'plans' => Plan::all(),
            'reviews' => Review::with('image')->get(),
        ]);
    }
}
