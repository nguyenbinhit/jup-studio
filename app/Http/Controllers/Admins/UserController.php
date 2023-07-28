<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\User\StoreRequest;
use App\Http\Requests\Admins\User\UpdateRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
     * Search user
     *
     * @param Request $request
     * @return void
     */

    public function search(Request $request)
    {
        $sort = $request->input('sort', $this->sort);
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');

        $users = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orderBy($sortBy, $sort)
            ->paginate($limit)
            ->withQueryString();

        return response()->json($users);
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
     * @return void
     */
    public function store(StoreRequest $request)
    {
        $data = $request->safe()->all();

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        return redirect()->route('admin.users.show', ['user' => $user])->with('success', 'Tạo thành công tài khoản (' . $user->name . ')');
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
     * @return void
     */
    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->safe()->all();

        if (auth()->user()->email !== 'administrator@gmail.com' && $user->email !== auth()->user()->email) {
            return redirect()->route('admin.users.show', ['user' => $user])->with('error', 'Cập nhật tài khoản ' . $user->name . ' thất bại. Bạn không có quyền cập nhật tài khoản này!');
        }

        if ($data['email'] === $user->email && isset($data['email'])) {
            unset($data['email']);
        }

        if (isset($data['password']) && $data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('admin.users.show', ['user' => $user])->with('success', 'Cập nhật thành công tài khoản (' . $user->name . ')');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login.index');
    }
}
