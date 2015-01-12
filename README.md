# MobWeb_SwitchDefaultCountryByURL extension for Magento

A simple Magento extension that allows to switch the default country for the addresses by passing a GET parameter in the URL, for example: `http://my-shop.com/product-xy?default-country=US`.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## How it works

The `controller_action_layout_load_before` event, which is fired on every page load, is observed. The observer checks if a `default-country` parameter has been passed with the current URL. If it is, it saves that country code as a cookie. The `Mage_Checkout_Block_Onepage_Abstract::getCountryHtmlSelect` method is modified to check for that cookie before loading the default country from the config. If the cookie is available, the country from the cookie is used as the default country in the address form.

Note: The file for the `Mage_Checkout_Block_Onepage_Abstract` class has been copied to the `local` codepool. Unfortunately there does not seem to be a cleaner way to modify this class since it has been defined as abstract. :( 

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).