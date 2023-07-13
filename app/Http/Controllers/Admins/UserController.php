<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\User\StoreRequest;
use App\Http\Requests\Admins\User\UpdateRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        
        $users = User::orderBy($sortBy, 'asc')->paginate($limit)->withQueryString();

    return view('admins.body.extras-user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admins.body.user.create-user');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest  $request
     * @return View
     */
    public function store(StoreRequest $request): View
    {
        $data = $request->safe()->all();

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        return view('admins.body.user.update-user',['user' => $user]);
    }

    /**
     * Display the specified resource.
     * @param User $user
     * @return View
     */
    public function show(User $user)
    {
        return view('admins.body.user.update-user', ['user' => $user]);
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
     * @param UpdateRequest $request
     * @param User $plan
     * @return View
     */
    public function update(UpdateRequest $request, User $user): View
    {
        $data = $request->safe()->all();
        $user->update($data);
        return view('admins.body.user.update-user', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}