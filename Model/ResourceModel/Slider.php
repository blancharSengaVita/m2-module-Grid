<?php
namespace Produweb\Grid\Model\ResourceModel;


class Slider extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('produweb_grid', 'slider_id');
    }

}
