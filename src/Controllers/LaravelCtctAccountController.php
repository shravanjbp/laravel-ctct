<?php

namespace Shravanjbp\LaravelCtct\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelCtct;
use Ctct\Components\Account\AccountInfo;

class LaravelCtctAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = LaravelCtct::accountService()->getAccountInfo();
        return view('vendor.laravelctct.account.index', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $account = LaravelCtct::accountService()->getAccountInfo();
        return view('vendor.laravelctct.account.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $accountInfo = new AccountInfo() ;

        $accountInfo->first_name = $request->get('first_name');
        $accountInfo->last_name = $request->get('last_name');
        $accountInfo->email = $request->get('email');
        $accountInfo->phone = $request->get('phone');
        $accountInfo->organization_name = $request->get('organization_name');
        $accountInfo->company_logo = $request->get('company_logo');
        $accountInfo->country_code = $request->get('country_code');
        $accountInfo->state_code = $request->get('state_code');
        $accountInfo->time_zone = $request->get('time_zone');
        $accountInfo->website = $request->get('website');
        
        $addr = $request->get('organization_addresses');
        $address[] = [ 
            'line1' => $request->get('organization_addresses')['line1'],
            'city'  => $request->get('organization_addresses')['city'],
            'postal_code' => $request->get('organization_addresses')['postal_code'],
            'country_code'  => $request->get('organization_addresses')['country_code'],
            'state_code' => $request->get('organization_addresses')['state_code'],
            'state'  => $request->get('organization_addresses')['state']
        ];
        $accountInfo->organization_addresses = $address;
       
        LaravelCtct::accountService()->updateAccountInfo($accountInfo);
        return redirect()->back();
    }

}
