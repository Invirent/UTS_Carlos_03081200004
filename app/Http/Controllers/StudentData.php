<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentData extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.index');
    }
}
