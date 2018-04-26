<?php
/**
 * Base 64 Filter plugin for Craft CMS
 *
 * Base 64 Filter Twig Extension
 *
 * @author    Mark Greenwood
 * @copyright Copyright (c) 2018 Mark Greenwood
 * @link      https://twitter.com/greenboyroy
 * @package   Base64Filter
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class Base64FilterTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Base64Filter';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return array(
            'baseSixFour' => new \Twig_Filter_Method($this, 'baseSixFourEncode'),
        );
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
      * @return string
     */
    public function baseSixFourEncode($text = null)
    {
        $result = base64_encode($text);

        return $result;
    }
}