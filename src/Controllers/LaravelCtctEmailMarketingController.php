<?php

namespace Shravanjbp\LaravelCtct\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ctct\Components\EmailMarketing\Campaign;
use LaravelCtct;

class LaravelCtctEmailMarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = LaravelCtct::emailMarketingService()->getCampaigns();
        return view('vendor.laravelctct.campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$lists = LaravelCtct::listService()->getLists();
        //return view('vendor.laravelctct.campaigns.new', compact('lists'));
        return view('vendor.laravelctct.campaigns.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'from_name' => 'required',
            'from_email' => 'required|email',
            'text_content' => 'required',
            'email_content' => 'required'
        ]);

        $campaign = new Campaign();
        $campaign->name = $request->get('name');
        $campaign->subject = $request->get('subject');
        $campaign->from_name = $request->get('from_name');
        $campaign->from_email = $request->get('from_email');
        $campaign->greeting_string = $request->get('greeting_string');
        $campaign->reply_to_email = $request->get('reply_to_addr');
        $campaign->text_content = $request->get('text_content');
        $campaign->email_content = $request->get('email_content');
        $campaign->email_content_format = $request->get('format');

        LaravelCtct::emailMarketingService()->addCampaign($campaign);

        return redirect()->back()->with('success', 'Campaign has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function preview($id)
    {
       dd(LaravelCtct::emailMarketingService()->getPreview($id));
    }
}
