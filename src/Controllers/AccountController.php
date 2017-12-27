<?php

namespace Shravanjbp\LaravelCtct\Controllers;

use App\Http\Controllers\Controller;
use LaravelCtct;

class AccountController extends Controller
{
    public function index()
    {
    	$account = LaravelCtct::accountService()->getAccountInfo();
        return view('vendor.laravelctct.account.index', compact('account'));
    }
}