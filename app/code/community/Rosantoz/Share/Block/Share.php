<?php

/**
 * Module's block
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
 * Shows the facebook button on the page
 *
 * @category Pet_Projects
 * @package  Rosantoz_Share
 * @author   Rodrigo dos Santos <falecom@rodrigodossantos.ws>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version  Release: <1.0>
 * @link     https://rodrigodossantos.ws
 */
class Rosantoz_Share_Block_Share extends Mage_Core_Block_Template
{
    /**
     * Render the facebook button
     *
     * @return bool|string
     */
    protected function _toHtml()
    {
        $model = Mage::getModel('rosantoz_share/share');
        $active = $model->getData('active');

        if ($active == 0) {
            return false;
        }

        $productId = $this->getRequest()->getParam('id');

        $product = Mage::getModel('catalog/product')->load($productId);
        $request = $this->getRequest();

        $this->setTemplate('rosantoz_share/button.phtml');
        $this->setData('appId', $model->getData('application_id'));
        $this->setData('buttonText', $model->getData('button_text'));
        $this->setData('buttonSize', $model->getData('button_size'));
        $this->setData('image', $product->getImageUrl());
        $this->setData('product', urlencode($product->getName()));
        $this->setData('description', urlencode($product->getShortDescription()));
        $this->setData('caption', urlencode(Mage::app()->getStore()->getFrontendName()));
        $this->setData('redirectUri', $this->getUrl() . ltrim($request->getOriginalPathInfo(), '/'));

        $html = $this->renderView();

        return $html;
    }

}