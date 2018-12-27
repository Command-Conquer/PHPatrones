<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 27/12/2018
 * Time: 14:17
 */

include_once('AbstractBookFactory.php');

include_once('AnayaPHPBook.php');
include_once('AnayaMySQLBook.php');

class AnayaBookFactory extends AbstractBookFactory
{
	// crea el contexto en el que ambas clases trabajarán
	private $context = "Anaya";

	function makePHPBook()
	{
		return new AnayaPHPBook;
	}

	function makeMySQLBook()
	{
		return new AnayaMySQLBook;
	}

}