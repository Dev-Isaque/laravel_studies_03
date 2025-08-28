<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        // as linguas que cada pessoa fala
        $data = [
            "João" => [
                'Portugues',
                'Inglês'
            ],
            "Maria" => [
                'Portugues',
                'Esapanhol'
            ],
            "Ana" => [
                'Portugues',
                'Inglês',
                'Francês'
            ],
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
