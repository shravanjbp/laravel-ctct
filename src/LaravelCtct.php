<?php
namespace ShravanJbp\LaravelCtct;

use Ctct\ConstantContact;
use ShravanJbp\LaravelCtct\Services\LaravelCtctAccountService;
use ShravanJbp\LaravelCtct\Services\LaravelCtctEmailMarketingService;
use ShravanJbp\LaravelCtct\Services\LaravelCtctListService;

class LaravelCtct {

    private $client;
    private $token;

    public function __construct($apiKey, $token) {

        $this->client =  new ConstantContact($apiKey);
        $this->token = $token;
    }

    public function accountService() {

    	return new LaravelCtctAccountService( $this->client, $this->token );
    }

    public function emailMarketingService() {

    	return new LaravelCtctEmailMarketingService( $this->client, $this->token );
    }

    public function listService() {

        return new LaravelCtctListService( $this->client, $this->token );
    }

}