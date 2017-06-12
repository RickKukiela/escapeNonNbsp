<?php
namespace Craft;

class EscapeNonNbspPlugin extends BasePlugin {

	function getName()
	{
		return Craft::t('Twig Filter: Escape non-&nbsp; characters');
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'Rick Kukiela';
	}

	function getDeveloperUrl()
	{
		return 'http://www.belniakmedia.com';
	}


	public function addTwigExtension()
	{
		Craft::import('plugins.escapenonnbsp.twigextensions.EscapeNonNbspTwigExtension');
		return new EscapeNonNbspTwigExtension();
	}
}