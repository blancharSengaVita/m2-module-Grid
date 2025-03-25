<?php
namespace Produweb\Grid\Model;
class Slider extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'produweb_grid';

    protected $_cacheTag = 'produweb_grid';

    protected $_eventPrefix = 'produweb_grid';

    protected function _construct()
    {
        $this->_init('Produweb\Grid\Model\ResourceModel\Slider');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
