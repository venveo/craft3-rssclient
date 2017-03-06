<?php
/**
 * RSSClient plugin for Craft CMS 3.x
 *
 * Just a simple RSS client
 *
 * @link      https://venveo.com
 * @copyright Copyright (c) 2017 Venveo
 */

namespace venveo\rssclient\variables;

use venveo\rssclient\RSSClient;

use Craft;
use venveo\rssclient\services\RSSFeedService;

/**
 * @author    Venveo
 * @package   RSSClient
 * @since     1.0.0
 */
class RSSClientVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function getFeed($url, $auth = null)
    {
        /** @var RSSFeedService $service */
        $service = RSSClient::getInstance()->rssfeed;
        return $service->fetch($url, $auth);
    }
}
