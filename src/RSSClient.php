<?php
/**
 * RSSClient plugin for Craft CMS 3.x
 *
 * Just a simple RSS client
 *
 * @link      https://venveo.com
 * @copyright Copyright (c) 2017 Venveo
 */

namespace venveo\rssclient;

use venveo\rssclient\variables\RSSClientVariable;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

/**
 * @author    Venveo
 * @package   RSSClient
 * @since     1.0.0
 */
class RSSClient extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var static
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::className(),
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                    // We were just installed
                }
            }
        );

        Craft::info('RSSClient ' . Craft::t('rSSClient', 'plugin loaded'), __METHOD__);
    }

    /**
     * @inheritdoc
     */
    public function defineTemplateComponent()
    {
        return RSSClientVariable::class;
    }

    // Protected Methods
    // =========================================================================

}
