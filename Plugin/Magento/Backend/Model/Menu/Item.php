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

namespace Kowal\Base\Plugin\Magento\Backend\Model\Menu;

class Item
{
    public function afterGetUrl($subject, $result)
    {
        $menuId = $subject->getId();

        if ($menuId == 'Kowal_Base::kowal_support') {
            $result = 'https://kowal.store/wsparcie-magento';
        } elseif ($menuId == 'Kowal_Base::kowal_visitus') {
            $result = 'https://kowal.store';
        }

        return $result;
    }
}
