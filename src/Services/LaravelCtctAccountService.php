<?php

namespace ShravanJbp\LaravelCtct\Services;

use Ctct\Service\AccountService;
use Ctct\Components\Account\AccountInfo;

class LaravelCtctAccountService {

	private $client;
	private $token;

	public function __construct($client, $token) {

        $this->client =  $client;
        $this->token = $token;
    }

    /**
     * Get all verified email addresses associated with an account
     * @param array $params - associative array of query parameters and values to append to the request.
     *      Allowed parameters include:
     *      status - Status to filter results by. Must be one of ALL, CONFIRMED, or UNCONFIRMED.
     * @return array of VerifiedEmailAddress
     * @throws CtctException
     */
    public function getVerifiedEmailAddresses( $params = [] ):  array
    {
    	return $this->client->accountService->getVerifiedEmailAddresses($this->token, $params);
    }

    /**
     * Create a new verified email address. This will also prompt the account to send
     * a verification email to the address.
     * @param string $emailAddress - email address to create
     * @return array - array of VerifiedEmailAddress created
     * @throws CtctException
     */
    public function createVerifiedEmailAddress($emailAddress): array
    {
    	return $this->client->accountService->createVerifiedEmailAddress($this->token, $emailAddress);
    }

	/**
     * Get account info associated with an access token
     * @return AccountInfo
     * @throws CtctException
     */

	public function getAccountInfo(): AccountInfo
	{
		return $this->client->accountService->getAccountInfo($this->token);
	}

	/**
     * Update information of the account.
     * @param AccountInfo $accountInfo - Updated AccountInfo
     * @return AccountInfo
     * @throws CtctException
     */
    public function updateAccountInfo( AccountInfo $accountInfo): AccountInfo
    {
    	return $this->client->accountService->updateAccountInfo( $this->token, $accountInfo );
    }

}