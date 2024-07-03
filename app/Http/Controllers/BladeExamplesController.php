<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'John Doe'],
            ['id' => 2, 'name' => 'Jane Doe'],
            ['id' => 3, 'name' => 'John Smith'],
            ['id' => 4, 'name' => 'Jane Smith'],
            ['id' => 5, 'name' => 'John Wayne'],
            ['id' => 6, 'name' => 'Jane Bruce'],
        ];

        $count = 0;

        return view('index', ['users' => $users, 'count' => $count]);
    }

    public function secondPage()
    {
        return view('second');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|min:3'
        ]);

        return redirect()->back()->with('success', 'Enviado com sucesso!');
    }
}
