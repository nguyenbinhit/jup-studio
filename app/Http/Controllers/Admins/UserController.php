<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends BaseController
{
     /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $sort = $request->input('sort', $this->sort);
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');

        $users = User::select('name', 'email', 'created_at')
        ->orderBy($sortBy, $sort)
        ->paginate($limit)
        ->withQueryString();

    return view('admins.body.extras-user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('admins.body.user.create-user');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest $request
     * @return View
     */
    public function store(StoreRequest $request): View
    {
        logger($request);
        $data = $request->safe()->all();
        $data['password'] = bcrypt($request->input('password'));
        $user = User::create($data);
        return view('admins.body.extras-user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
