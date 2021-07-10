<?php
namespace Dallmeier\Vinh\Model\ResourceModel\Subscriptions;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
	protected $_eventPrefix = 'dallmeier_vinh_subscriptions_collection';
	protected $_eventObject = 'subscriptions_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dallmeier\Vinh\Model\Subscriptions', 'Dallmeier\Vinh\Model\ResourceModel\Subscriptions');
    }
}
