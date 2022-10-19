<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function payment_handler(Request $request) {
        $json = json_decode($request->getContent());
        return $json;
    }
}
 