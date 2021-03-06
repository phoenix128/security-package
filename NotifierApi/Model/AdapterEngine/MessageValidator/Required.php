<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\NotifierApi\Model\AdapterEngine\MessageValidator;

use Magento\Framework\Exception\ValidatorException;
use Magento\NotifierApi\Model\AdapterEngine\MessageValidatorInterface;

/**
 * Sugar class to provide a simple check on required message string
 *
 * @api
 */
class Required implements MessageValidatorInterface
{
    /**
     * @inheritdoc
     */
    public function execute(string $message): bool
    {
        if (trim($message) === '') {
            throw new ValidatorException(__('Message cannot be empty'));
        }

        return true;
    }
}
