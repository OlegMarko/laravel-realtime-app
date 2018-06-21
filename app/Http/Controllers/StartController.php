<?php

namespace App\Http\Controllers;

use App\Events\NewEvent;
use App\Events\NewMessage;
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

    /**
     * Get chart data.
     *
     * @return array
     */
    public function dataChart()
    {
        return [
            'labels' => ['Mart', 'April', 'May', 'Jul', 'Jun'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'backgroundColor' => '#f26202',
                    'data' => [
                        500, 1250, 750, 3500, 4500
                    ]
                ]
            ]
        ];
    }

    /**
     * Get random chart data.
     *
     * @return array
     */
    public function randomChart()
    {
        return [
            'labels' => ['Mart', 'April', 'May', 'Jul', 'Jun'],
            'datasets' => [
                [
                    'label' => 'v1',
                    'backgroundColor' => '#16ab39',
                    'data' => [
                        mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100)
                    ]
                ], [
                    'label' => 'v2',
                    'backgroundColor' => '#b5cc18',
                    'data' => [
                        mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100)
                    ]
                ]
            ]
        ];
    }

    /**
     * Update Chart
     *
     * @param Request $request
     *
     * @return array
     */
    public function newEvent(Request $request)
    {
        $data = [
            'labels' => ['Mart', 'April', 'May', 'Jul', 'Jun'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'backgroundColor' => '#f26202',
                    'data' => [
                        500, 1250, 750, 3500, 4500
                    ]
                ]
            ]
        ];

        if ($label = $request->get('label', false)) {
            $data['labels'][] = $label;
            $data['datasets'][0]['data'][] = $request->get('point');

            if (filter_var($request->get('realtime'), FILTER_VALIDATE_BOOLEAN)) {
                event(new NewEvent($data));
            }
        }

        return $data;
    }

    /**
     * New Message Event.
     *
     * @param Request $request
     */
    public function sendMessage(Request $request)
    {
        if ($message = $request->get('message')) {

            event(new NewMessage($message));
        }
    }
}
