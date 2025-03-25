<?php
namespace Produweb\Grid\Model\ResourceModel\Slider;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'slider_id';
    protected $_eventPrefix = 'produweb_grid_slider_collection';
    protected $_eventObject = 'slider_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Produweb\Grid\Model\Slider', 'Produweb\Grid\Model\ResourceModel\Slider');
    }

}
