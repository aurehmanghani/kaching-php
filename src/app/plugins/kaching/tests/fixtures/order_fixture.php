<?php
/**
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright KACHINGPHP.ORG 2010
 * @link          http://www.kachingphp.org Kaching Project
 * @package       kaching
 * @subpackage    kaching.tests.fixtures
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

App::import('Model', 'Kaching.Order');

/**
 * Order Fixture
 * 
 * @author Mike Friesen
 *
 */
class OrderFixture extends CakeTestFixture {

	var $name = 'Order';
	var $import = array('model' => 'Order', 'records' => false); 
	var $records = array();
}
?>
