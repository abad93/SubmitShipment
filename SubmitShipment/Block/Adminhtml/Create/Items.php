<?php
namespace Kloner\SubmitShipment\Block\Adminhtml\Create;

class Items extends \Magento\Shipping\Block\Adminhtml\Create\Items{

    protected function _beforeToHtml()
    {
        $this->addChild(
            'submit_button',
            \Magento\Backend\Block\Widget\Button::class,
            [
                'label' => __('Submit Shipment'),
                'class' => 'save submit-button primary',
                'onclick' => 'submitShipment(this); this.onclick=null;'
            ]
        );

    }

}

?>