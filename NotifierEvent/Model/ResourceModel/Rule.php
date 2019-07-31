<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\NotifierEvent\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use MSP\NotifierEventApi\Api\Data\RuleInterface;

/**
 * @SuppressWarnings(PHPMD.CamelCaseMethodName)
 */
class Rule extends AbstractDb
{
    /**
     * Event notifier table name
     */
    private const TABLE_NAME = 'msp_notifier_event_rule';

    protected function _construct()
    {
        $this->_init(
            self::TABLE_NAME,
            RuleInterface::ID
        );
    }
}