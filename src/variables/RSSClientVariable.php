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
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
