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

namespace Kowal\Base\Plugin\Magento\Framework\Data\Form\Element;

class Factory
{
	public function beforeCreate($subject, $elementType, array $config = [])
	{
		switch ($elementType) {
			case 'kowal_colorpicker':
				$elementType = 'Kowal\Base\Block\Adminhtml\System\Config\Field\Colorpicker';
				break;
			
			default:
				# code...
				break;
		}
		
		return [$elementType, $config];
	}
}
