<?php
namespace App\Libraries;

use Google\Client;
use Google\Service\Oauth2;
require_once __DIR__ . '/vendor/autoload.php';

class GoogleApi
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'http' => [
                'verify' => false, // Disable SSL certificate validation
            ],
        ]);
        $this->client = new Client();
        $this->client->setClientId('391088448459-u34qrqbljki9gq5l3cf8fe98ah4agpq3.apps.googleusercontent.com');
        $this->client->setClientSecret('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');
        
        // Detect environment and set redirect URI accordingly
        $redirectUri = ($_SERVER['HTTP_HOST'] === 'localhost') ? getenv('google.redirect_uri_local') : getenv('google.redirect_uri_production');
        $this->client->setRedirectUri($redirectUri);
        
        $this->client->addScope('email');
        $this->client->addScope('profile');
        $this->client->setHttpClient(new \GuzzleHttp\Client([
            'verify' => false, // Disable SSL verification//remove this on production
        ]));
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getLoginUrl()
    {
        return $this->client->createAuthUrl();
    }

    public function authenticate($code)
    {
        $this->client->fetchAccessTokenWithAuthCode($code);
        return $this->client->getAccessToken();
    }

    public function getUserInfo()
    {
        $oauth2 = new Oauth2($this->client);
        return $oauth2->userinfo->get();
    }
}