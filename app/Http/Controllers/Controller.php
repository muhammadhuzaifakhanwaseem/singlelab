<?php

namespace App\Http\Controllers;

use Laramin\Utility\Onumoti;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public $activeTemplate;

    public function __construct()
    {
        return view('templates.invester.home');
    }
}
