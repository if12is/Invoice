<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserStoreRequest $request)
    {
        try {
            $this->userService->storeUser($request->validated());
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserStoreRequest $request, User $user)
    {
        try {
            $user->update($request->validated());
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
