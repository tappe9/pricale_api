<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainCalendarController extends Controller
{
    public function apiHello()
    {
        return $this->jsonResponse(
            [
                'Good morning' => 'おはよう',
                'Hello' => 'こんにちは',
            ]
        );
    }
}
