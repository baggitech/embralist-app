<?php

namespace App\Http\Controllers;

class AddContractorController extends Controller
{
    public function location()
    {
        return view('contractors.add.location');
    }

    public function services()
    {
        return view('contractors.add.services');
    }

    public function profile()
    {
        return view('contractors.add.profile');
    }

    public function price()
    {
        return view('contractors.add.price');
    }

    public function project()
    {
        return view('contractors.add.project');
    }
}
