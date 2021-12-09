<?php
namespace App\Domains\Indigent\Http\Controllers;

class IndigentController
{
    public function add()
    {
        return view('backend.indigent.add');
    }

    public function list()
    {
        return view('backend.indigent.list');
    }
}
