<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace itsmj\routersmodule\Controller\Myroutes;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Home extends \Magento\Framework\App\Action\Action 
{
    
    public function execute()
    {
        echo "Welcome to HomePage!";
    }
}
