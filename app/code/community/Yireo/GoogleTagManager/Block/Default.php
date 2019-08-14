<?php
/**
 * GoogleTagManager plugin for Magento 
 *
 * @package     Yireo_GoogleTagManager
 * @author      Yireo (http://www.yireo.com/)
 * @copyright   Copyright (C) 2014 Yireo (http://www.yireo.com/)
 * @license     Open Source License
 */

class Yireo_GoogleTagManager_Block_Default extends Mage_Core_Block_Template
{
    public function isEnabled()
    {
        return (bool)$this->getConfig('active');
    }

    public function getId()
    {
        return $this->getConfig('id');
    }

    public function getConfig($key = null, $default_value = null)
    {
        return Mage::helper('googletagmanager')->getConfigValue($key, $default_value);
    }
}
