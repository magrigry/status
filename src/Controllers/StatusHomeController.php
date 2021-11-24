<?php

namespace Azuriom\Plugin\Status\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\Server;

class StatusHomeController extends Controller
{
    /**
     * Show the home plugin page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('status::index',  ['servers' => Server::with('stat')->get()]);
    }
}
