<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function status() {
        return response(['status' => 'OK'], 200);
    }
}
