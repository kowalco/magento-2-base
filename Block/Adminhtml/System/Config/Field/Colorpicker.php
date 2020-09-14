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
 
namespace Kowal\Base\Block\Adminhtml\System\Config\Field;

use Magento\Framework\Data\Form\Element\AbstractElement;

class Colorpicker extends \Magento\Framework\Data\Form\Element\Text
{
    public function getHtml()
    {
        $html = parent::getHtml();
        $value = $this->getValue();
 
        $html .= '<script type="text/javascript">
            require(["jquery","jquery/colorpicker/js/colorpicker"], function ($) {
                $(document).ready(function () {
                    var $el = $("#' . $this->getHtmlId() . '");
                    $el.css("backgroundColor", "'. $value .'");
 
                    // Attach the color picker
                    $el.ColorPicker({
                        color: "'. $value .'",
                        onChange: function (hsb, hex, rgb) {
                            $el.css("backgroundColor", "#" + hex).val("#" + hex);
                        }
                    });
                });
            });
            </script>';

        return $html;
    }
}
