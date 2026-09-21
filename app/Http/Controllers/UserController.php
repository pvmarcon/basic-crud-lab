<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    public function index(): Factory|View
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return redirect('/users')->with('success', 'User created!');
    }

    public function findUserById($id): JsonResponse
    {
        try {
            $user = User::find($id);
            if (!$user) {
                throw new Exception("User not found.");
            }

            return response()->json(['User' => $user]);

        } catch (Exception $e) {
            return response()->json(['Error' => $e->getMessage()], 404);
        }
    }
}
