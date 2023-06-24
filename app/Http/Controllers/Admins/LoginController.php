<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admins.login.index');
    }

    /**
     * Login a user
     *
     * @param \App\Http\Requests\User\LoginRequest $request
     * @return View
     */
    public function login(LoginRequest $request)
    {
        $data = $request->safe()->all();

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return view('admins.body.content-page');
        }

        return redirect()->route('admin.login.index')->with('error', 'Đăng nhập không thành công. Vui lòng thử lại!');
    }
}
