# Base 64 Filter plugin for Craft CMS

A Twig extension to base64 encode a given string.

## Installation

To install Base 64 Filter, follow these steps:

1. Download & unzip the file and place the `base64filter` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/greenboyroy/base64filter.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require greenboyroy/base64filter`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `base64filter` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Base 64 Filter works on Craft 2.4.x and Craft 2.5.x.


## Using Base 64 Filter

Use this filter just like any other twig filter:

`<p>{{ product.secretCode || baseSixFour }}</p>`


Brought to you by [Mark Greenwood](https://twitter.com/greenboyroy)
