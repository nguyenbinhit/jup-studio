<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
        return view('admins.body.content-page', [
            'contacts' => Contact::count(),
            'employees' => Employee::count(),
            'accounts' => User::count(),
        ]);
    }
}
