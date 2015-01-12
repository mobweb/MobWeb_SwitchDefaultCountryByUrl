<?php

class MobWeb_SwitchDefaultCountryByURL_Model_Observer
{
	public function controllerActionLayoutLoadBefore(Varien_Event_Observer $observer)
	{

		// Check if a country code parameter is available
		if (($countryCode = (string) Mage::app()->getRequest()->getParam('default-country'))) {

			// Save the country code in a cookie
			Mage::getSingleton('core/cookie')->set('default-country', strtoupper($countryCode), time()+86400, '/');
		}
	}
}