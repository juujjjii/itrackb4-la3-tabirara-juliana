<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
class SubjectsController extends Controller
{
    private function getsubjects()
    {
        return [
            1 => ['id' => 1, 'code' => 'CAP102',   'title' => 'Capstone Project 2', 'units' => 3],
            2 => ['id' => 2, 'code' => 'ITP1333',  'title' => 'Information Assurance and Security 2',  'units' => 2],
            3 => ['id' => 3, 'code' => 'ITP1441',  'title' => 'System Administration and Maintenance', 'units' => 2],
            4 => ['id' => 4, 'code' => 'ITRACKB4', 'title' => 'Web Programming 2', 'units' => 2],
            5 => ['id' => 5, 'code' => 'ITP831',   'title' => 'Networking 2', 'units' => 2],
            6 => ['id' => 6, 'code' => 'ITP123',   'title' => 'Data Analytics', 'units' => 3],
        ];
    }

    public function index()
    {
        $subjects = $this->getsubjects();
        return view('subjects.index', ['subjects' => $subjects]);
    }

    public function show($id)
    {
        $subjects = $this->getsubjects();
        if (!isset($subjects[$id])) {
            abort(404);
        }
        return view('subjects.show', ['subject' => $subjects[$id]]);
    }

    public function featured()
    {
        $subjects = $this->getsubjects();
        return view('subjects.featured', ['featured' => $subjects[4]]);
    }

    public function filter($units = null)
    {
        $all = $this->getsubjects();

        if ($units === null) {
            $subjects = $all;
            $message = "Showing all subjects";
        } else {
            $subjects = [];
            foreach ($all as $s) {
                if ($s['units'] == $units) {
                    $subjects[] = $s;
                }
            }
            $message = "Showing subjects with $units units";
        }

        return view('subjects.filter', [
            'subjects' => $subjects,
            'message' => $message,
            'units' => $units
        ]);
    }
}