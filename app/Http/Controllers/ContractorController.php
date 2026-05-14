<?php

namespace App\Http\Controllers;

class ContractorController extends Controller
{
    public function index()
    {
        return view('contractors.index');
    }

    public function show(string $id)
    {
        return view('contractors.show', ['id' => $id]);
    }
}
