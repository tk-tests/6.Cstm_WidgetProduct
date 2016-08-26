<?php

class Cstm_WidgetProduct_Block_Sku  extends Cstm_WidgetProduct_Block_UrlProduct{

    protected function _construct()
    {
        parent::_construct();
        $this->_entityResource = Mage::getResourceSingleton('catalog/product');
    }
}
