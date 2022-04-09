<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        return Inertia::render('UserIndex', [
            'canCreate' => Auth::user()->can('create', User::class),
            'users' => \App\Models\User::all()
        ]);
    }

    public function create(): \Inertia\Response
    {
        $this->authorize('create', User::class);
        return Inertia::render('UserCreate');
    }
}
