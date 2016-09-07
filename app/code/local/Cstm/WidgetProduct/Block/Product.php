<?php
	class Cstm_WidgetProduct_Block_Product extends Mage_Core_Block_Template
		implements Mage_Widget_Block_Interface
	{
		protected function _toHtml () {
			
			$sku = $this->_getData('query_reviews_by');
			$product = Mage::getModel('catalog/product')
							->loadByAttribute('sku', $sku);
			
			$html = '<div class="product-widget">';
			$html.= '<div class="product-widget-title"><h1>Custom Widjet Product</h1></div>';

				$html .= Mage::helper('catalog')->__('Product Name').' : <b><u>'.$product->getName().'</u></b></br></br>';
				$html .= Mage::helper('catalog')->__('the product url on the current store').' : <b><u>'.$product->getUrlInStore(array("_store" => Mage::app()->getStore()->getCode())).'</u></b>';
			
			$html .= '</div>';
			return $html;
		}
	}
?>