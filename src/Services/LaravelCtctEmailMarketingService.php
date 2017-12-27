<?php
namespace ShravanJbp\LaravelCtct\Services;

use Ctct\Service\EmailMarketingService;
use Ctct\Components\ResultSet;
use Ctct\Components\EmailMarketing\Campaign;

class LaravelCtctEmailMarketingService {

	private $client;
	private $token;

	public function __construct($client, $token) {

        $this->client =  $client;
        $this->token = $token;
    }

    /**
     * Create a new campaign
     * @param string $accessToken - Constant Contact OAuth2 access token
     * @param Campaign $campaign - Campaign to be created
     * @return Campaign
     * @throws CtctException
     */
    public function addCampaign(Campaign $campaign): Campaign
    {
    	return $this->client->emailMarketingService->addCampaign($this->token, $campaign);
    }

	/**
	* Get a set of campaigns
	* @param array $params - associative array of query parameters and values to append to the request.
	*      Allowed parameters include:
	*      limit - Specifies the number of results displayed per page of output, from 1 - 500, default = 50.
	*      modified_since - ISO-8601 formatted timestamp.
	*      next - the next link returned from a previous paginated call. May only be used by itself.
	* @return ResultSet
	* @throws CtctException
	*/ 
    public function getCampaigns($params = []): ResultSet
    {
    	return $this->client->emailMarketingService->getCampaigns($this->token, $params);
    }

    /**
     * Get a preview of an email campaign
     * @param int $campaignId - Valid campaign id
     * @return CampaignPreview
     * @throws CtctException
     */
    public function getPreview($campaignId) 
    {
        return $this->client->emailMarketingService->getPreview($this->token, $campaignId);
    }
}