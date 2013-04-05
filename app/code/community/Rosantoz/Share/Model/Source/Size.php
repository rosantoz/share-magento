<?php

/**
 * Source model
 *
 * PHP version 5.3.8
 *
 * @category Pet_Projects
 * @package  Rosantoz_Share
 * @author   Rodrigo dos Santos <falecom@rodrigodossantos.ws>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     https://rodrigodossantos.ws
 */

/**
 * Shows the options available for the button's size
 *
 * @category Pet_Projects
 * @package  Rosantoz_Share
 * @author   Rodrigo dos Santos <falecom@rodrigodossantos.ws>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version  Release: <1.0>
 * @link     https://rodrigodossantos.ws
 */

class Rosantoz_Share_Model_Source_Size
{
    /**
     * Shows the options available for the button's size
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '', 'label' => Mage::helper('adminhtml')->__('Medium')
            ),
            array(
                'value' => 'large', 'label' => Mage::helper('adminhtml')->__('Large')
            ),
        );
    }

}