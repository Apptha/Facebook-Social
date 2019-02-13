<?php
/**
 * @name         :  Facebook Social
 * @version      :  1.0
 * @since        :  Magento 1.4
 * @author       :  Apptha - http://www.apptha.com
 * @copyright    :  Copyright (C) 2011 Powered by Apptha
 * @license      :  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @Creation Date:  October 22 2011
 * 
 * */
class Apptha_Fsocial_Model_Mysql4_Fsocial_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('fsocial/fsocial');
    }
}