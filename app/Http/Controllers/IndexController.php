<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Index/Index', [
            'message' => 'Heyy there!'
        ]);
    }

    public function show()
    {
        return Inertia::render('Index/Show');
    }
}
