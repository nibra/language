<?php
/**
 * Part of the Joomla Framework Language Package
 *
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Language\Tests\Localise;

use Joomla\Language\Localise\En_GBLocalise;
use PHPUnit\Framework\TestCase;

/**
 * en-GB test class. Allows us to also test AbstractLocalise
 *
 * @since  __DEPLOY_VERSION__
 */
class En_GBLocaliseTest extends TestCase
{
	/**
	 * @testdox  Verify that En_GBLocalise::transliterate() calls defined transliterator
	 *
	 * @covers   Joomla\Language\Localise\En_GBLocalise::transliterate
	 * @uses     Joomla\Language\Localise\AbstractLocalise
	 * @uses     Joomla\Language\Transliterate
	 */
	public function testTransliterateCallsDefinedTransliterator()
	{
		$this->assertSame('asi', (new En_GBLocalise())->transliterate('Así'));
	}

	/**
	 * @testdox  Verify that En_GBLocalise::getPluralSuffixes() calls the defined method
	 *
	 * @covers   Joomla\Language\Localise\En_GBLocalise::getPluralSuffixes
	 * @uses     Joomla\Language\Localise\AbstractLocalise
	 */
	public function testGetPluralSuffixesCallsTheDefinedMethod()
	{
		$this->assertSame(['1'], (new En_GBLocalise())->getPluralSuffixes(1));
	}
}