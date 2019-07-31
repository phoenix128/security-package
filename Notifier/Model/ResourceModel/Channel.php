<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\Notifier\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use MSP\NotifierApi\Api\Data\ChannelInterface;

/**
 * @SuppressWarnings(PHPMD.CamelCaseMethodName)
 */
class Channel extends AbstractDb
{
    /**
     * Notifier channels table name
     */
    private const TABLE_NAME = 'msp_notifier_channel';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(
            self::TABLE_NAME,
            ChannelInterface::ID
        );
    }
}