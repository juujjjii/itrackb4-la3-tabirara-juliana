<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index()
{
    $subjects = [
        ['code' => 'CAP102', 'title' => 'Capstone Project2',     'units' => 3],
        ['code' => 'ITP1333', 'title' => 'Information Assurance and Security2','units' => 2],
        ['code' => 'ITP1441', 'title' => 'System Administration and Maintenance', 'units' => 2],
        ['code' => 'ITRACKB4', 'title' => 'Web Programming2', 'units' => 2],
        ['code' => 'ITP831', 'title' => 'Networking2', 'units' => 2],
    ];
 
    return view('subjects.index', ['subjects' => $subjects]);
}
}
