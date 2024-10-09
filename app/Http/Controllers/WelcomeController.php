<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * Método para chamar um objeto como função.
     *
     * @return void
     */
    public function __invoke()
    {
        return view('welcome');
    }
}
