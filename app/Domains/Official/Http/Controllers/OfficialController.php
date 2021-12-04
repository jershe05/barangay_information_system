<?php
namespace App\Domains\Official\Http\Controllers;

class OfficialController
{
    public function index()
    {
        return view('backend.official.index');
    }

    public function add()
    {
        return view('backend.official.add');
    }
}
