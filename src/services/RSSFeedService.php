<?php
/**
 * RSSClient plugin for Craft CMS 3.x
 *
 * Just a simple RSS client
 *
 * @link      https://venveo.com
 * @copyright Copyright (c) 2017 Venveo
 */

namespace venveo\rssclient\services;

use venveo\rssclient\RSSClient;

use Craft;
use craft\base\Component;
use GuzzleHttp\Client;

/**
 * @author    Venveo
 * @package   RSSClient
 * @since     1.0.0
 */
class RSSFeedService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * @param $feedUrl string
     * @param null $auth
     *
     * @return bool|\SimpleXMLElement
     */
    public function fetch($feedUrl, $auth = null) {

        $response = $this->dispatchRequest($feedUrl, $auth);

        if ($data = @simplexml_load_string($response, null, LIBXML_NOCDATA))
        {
            return $data;
        }
        else
        {
            return false;
        }
    }

    private function dispatchRequest($host, $auth = null) {
        /** @var Client $client */
        $client = new Client();
        $res = $client->request('GET', $host, [
            'headers' => ['Accept' => ['application/rss+xml', 'application/rdf+xml', 'application/xml', 'text/xml']]
        ]);

        return $res->getBody();
    }
}
