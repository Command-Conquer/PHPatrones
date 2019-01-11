<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 28/12/2018
 * Time: 15:00
 */

include_once('AbstractMySQLBook.php');

class AnayaMySQLBook extends AbstractMySQLBook
{

	private $author;
	private $title;

	function __construct()
	{

		$this->author = 'George Reese, Randy Jay Yarger, and Tim King';
		$this->title = 'Managing and Using MySQL';

	}

	function getAuthor()
	{
		return $this->author;
	}

	function getTitle()
	{
		return $this->title;
	}

}