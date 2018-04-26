<?php
/**
 * Base 64 Filter plugin for Craft CMS
 *
 * A Twig extension to base64 encode a given string.
 *
 * @author    Mark Greenwood
 * @copyright Copyright (c) 2018 Mark Greenwood
 * @link      https://twitter.com/greenboyroy
 * @package   Base64Filter
 * @since     1.0.0
 */

namespace Craft;

class Base64FilterPlugin extends BasePlugin
{
    /**
     * Returns the user-facing name.
     *
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Base 64 Filter');
    }

    /**
     * Plugins can have descriptions of themselves displayed on the Plugins page by adding a getDescription() method
     * on the primary plugin class:
     *
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('A Twig extension to base64 encode a given string.');
    }

    /**
     * Returns the version number.
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * As of Craft 2.5, Craft no longer takes the whole site down every time a plugin’s version number changes, in
     * case there are any new migrations that need to be run. Instead plugins must explicitly tell Craft that they
     * have new migrations by returning a new (higher) schema version number with a getSchemaVersion() method on
     * their primary plugin class:
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * Returns the developer’s name.
     *
     * @return string
     */
    public function getDeveloper()
    {
        return 'Mark Greenwood';
    }

    /**
     * Returns the developer’s website URL.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://twitter.com/greenboyroy';
    }

    /**
     * Returns whether the plugin should get its own tab in the CP header.
     *
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * Add any Twig extensions.
     *
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.base64filter.twigextensions.Base64FilterTwigExtension');

        return new Base64FilterTwigExtension();
    }
}