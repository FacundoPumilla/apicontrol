<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;

class ControlController extends BaseController
{
    public function register(Request $request)
    {
        $input = $request->all();
        $success = bcrypt($input['mac']);
        $message = json_encode($request->all());
        return $this->sendResponse($success, $message);
    }
}
