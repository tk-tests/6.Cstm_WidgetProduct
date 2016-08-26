<?php


class Cstm_WidgetProduct_Block_UrlProduct extends Mage_Core_Block_Html_Link implements Mage_Widget_Block_Interface {

    protected function _toHtml() {

        if ($this->_getData('sku')) {

            if ($this->hasStoreId()) {
                $storeId = $this->getStoreId();
            } else {
                $storeId = Mage::app()->getStore()->getStoreId();
            }

            $product = Mage::getModel('catalog/product')
                    ->setStoreId($storeId)
                    ->loadByAttribute('sku', $this->_getData('sku'));
            if ($product) {
                return 'Name : ' . $product->getData('name') . '<br />'.'URL:' . $product->getProductUrl();
            } else {
                return 'Not Found';
            }
        }
        return 'Enter product sku';
    }

}
