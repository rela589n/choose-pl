<?php

namespace App\Http\Controllers;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('docs.index');
    }

    public function passTest()
    {
        return view('docs.pass-test');
    }

    public function editTest()
    {
        return view('docs.edit-test');
    }
}
