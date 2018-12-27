<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 27/12/2018
 * Time: 14:20
 */

include_once('AbstractBookFactory.php');

include_once('ZetaPHPBook.php');
include_once('ZetaMySQLBook.php');

class ZetaBookFactory extends AbstractBookFactory
{

	private $context = "Zeta";

	function makePHPBook()
	{
		return new ZetaPHPBook;
	}

	function makeMySQLBook()
	{
		return new ZetaMySQLBook;
	}

}