<?php

namespace App\Http\Controllers\Backend\Log;

use App\Http\Controllers\Controller;

/**
 * Class LogController.
 */
class LogController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.log.index');
    }
}
