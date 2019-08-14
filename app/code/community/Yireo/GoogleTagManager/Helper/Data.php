<?php
/**
 * GoogleTagManager plugin for Magento 
 *
 * @package     Yireo_GoogleTagManager
 * @author      Yireo
 * @copyright   Copyright (c) 2012 Yireo (http://www.yireo.com/)
 * @license     Open Software License
 */

class Yireo_GoogleTagManager_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getConfigValue($key = null, $default_value = null)
    {
        $value = Mage::getStoreConfig('googletagmanager/settings/'.$key);
        if(empty($value)) $value = $default_value;
        return $value;
    }

    /*
     * Usage: 
     *   echo Mage::helper('googletagmanager')->getHtml($arguments);
     *   $arguments is an associative array (size, count, url)
    
     */
    public function getHeaderScript()
    {
        if (!($layout = Mage::app()->getFrontController()->getAction()->getLayout())) {
            return '';
        }

        if (!($block = $layout->getBlock('googletagmanager'))) {
            return '';
        }

        return $block->toHtml();
    }
}
