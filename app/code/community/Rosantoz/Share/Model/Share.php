<?php

/**
 * Module's Model
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
 * Module's Model
 *
 * @category Pet_Projects
 * @package  Rosantoz_Share
 * @author   Rodrigo dos Santos <falecom@rodrigodossantos.ws>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version  Release: <1.0>
 * @link     https://rodrigodossantos.ws
 */

class Rosantoz_Share_Model_Share
{

    protected $model;

    /**
     * Loads the configuration
     */
    public function __construct()
    {
        $this->model = Mage::getStoreConfig('catalog/rosantoz_share');
    }

    /**
     * Returns a specific data
     *
     * @param string $data data wanted
     *
     * @return string
     */
    public function getData($data)
    {
        return $this->model[$data];
    }
}