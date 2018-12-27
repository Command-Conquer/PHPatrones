<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 27/12/2018
 * Time: 14:16
 *
 * Lo más abstracto
 */

abstract class AbstractBookFactory
{

	abstract function makePHPBook();

	abstract function makeMySQLBook();

}