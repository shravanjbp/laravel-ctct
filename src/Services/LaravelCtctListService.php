<?php

namespace ShravanJbp\LaravelCtct\Services;

use Ctct\Service\AccountService;
use Ctct\Components\Contacts\ContactList;

class LaravelCtctListService {

	private $client;
	private $token;

	public function __construct($client, $token) {

        $this->client =  $client;
        $this->token = $token;
    }

    /**
     * Get lists within an account
     * @param array $params - associative array of query parameters and values to append to the request.
     *      Allowed parameters include:
     *      modified_since - ISO-8601 formatted timestamp.
     * @return Array - ContactLists
     * @throws CtctException
     */
    public function getLists( $params = [] ): array
    {
    	return $this->client->listService->getLists( $this->token, $params );
    }

    /**
     * Create a new Contact List
     * @param ContactList $list
     * @return ContactList
     * @throws CtctException
     */
    public function addList(ContactList $list)
    {
        
    }
}