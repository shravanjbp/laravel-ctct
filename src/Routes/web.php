<?php


Route::group( [ 'middleware'=>'web', 'prefix'=>'ctct', 'namespace' => 'ShravanJbp\LaravelCtct\Controllers' ],function() 
{
	
	Route::get('/account', ['as' => 'account', 'uses' => 'LaravelCtctAccountController@index']);
	Route::get('/account/edit', ['as' => 'account.edit', 'uses' => 'LaravelCtctAccountController@edit']);
	Route::put('/account/edit', ['as' => 'account.update', 'uses' => 'LaravelCtctAccountController@update']);

	Route::resource('campaigns', 'LaravelCtctEmailMarketingController');
	Route::get('campaign/{id}/preview', ['as' => 'campaign.preview', 'uses' => 'LaravelCtctEmailMarketingController@preview'] );
});