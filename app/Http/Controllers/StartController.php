<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    /**
     * Get view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [
            [
                'title' => 'Google',
                'url' => 'google.com'
            ], [
                'title' => 'YouTube',
                'url' => 'youtube.com'
            ]
        ];

        return view('start')->with('data', $data);
    }

    /**
     * Get data.
     *
     * @return array
     */
    public function getJSON()
    {
        return [
            [
                'title' => 'Google',
                'url' => 'google.com'
            ], [
                'title' => 'YouTube',
                'url' => 'youtube.com'
            ]
        ];
    }
}
