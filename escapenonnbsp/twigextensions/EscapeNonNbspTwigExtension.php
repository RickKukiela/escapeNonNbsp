<?php

namespace Craft;


class EscapeNonNbspTwigExtension extends \Twig_Extension
{

	public function getName()
	{
		return 'escapeNonNbsp Twig Filter';
	}

	public function getFilters()
	{
		return ['escapeNonNbsp' => new \Twig_Filter_Method($this, 'escapeNonNbsp', ['pre_escape' => 'html', 'is_safe' => array('html')])];
	}

	public function escapeNonNbsp($content)
	{
		// perform filter operations
		return str_ireplace('&amp;nbsp;', '&nbsp;', $content);
	}

}