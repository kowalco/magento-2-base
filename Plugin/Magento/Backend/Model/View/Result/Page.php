<?php
/**
 * Kowal
 * Copyright (C) 2019 Kowal <kontakt@kowal.co>
 *
 * @category Kowal
 * @package Kowal_Base
 * @copyright Copyright (c) 2019 Mage Delight (https://kowal.store/)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author Kowal <kontakt@kowal.co>
 */

namespace Kowal\Base\Plugin\Magento\Backend\Model\View\Result;

class Page
{
    public function beforeSetActiveMenu($subject, $menu)
    {
        if (strpos($menu, 'Kowal_') !== false) {
            $menu = 'Kowal_Base::kowal_base_root';
        }

        return [$menu];
    }
}
