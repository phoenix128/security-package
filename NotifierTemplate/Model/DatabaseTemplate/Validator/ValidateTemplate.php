<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\NotifierTemplate\Model\DatabaseTemplate\Validator;

use Magento\Framework\Exception\ValidatorException;
use MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface;
use MSP\NotifierTemplateApi\Model\DatabaseTemplate\Validator\ValidateDatabaseTemplateInterface;

class ValidateTemplate implements ValidateDatabaseTemplateInterface
{
    /**
     * @inheritDoc
     */
    public function execute(DatabaseTemplateInterface $template): bool
    {
        if (!trim($template->getTemplate())) {
            throw new ValidatorException(__('Template is empty'));
        }

        return true;
    }
}