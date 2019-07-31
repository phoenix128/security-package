<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\NotifierTemplate\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface;
use MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface;

/**
 * @SuppressWarnings(PHPMD.CamelCaseMethodName)
 */
class DatabaseTemplate extends AbstractExtensibleModel implements
    DatabaseTemplateInterface
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\DatabaseTemplate::class);
    }

    /**
     * @inheritdoc
     */
    public function getCode(): string
    {
        return $this->getData(self::CODE);
    }

    /**
     * @inheritdoc
     */
    public function setCode(string $value): void
    {
        $this->setData(self::CODE, $value);
    }

    /**
     * @inheritdoc
     */
    public function getAdapterCode(): string
    {
        return $this->getData(self::ADAPTER_CODE);
    }

    /**
     * @inheritdoc
     */
    public function setAdapterCode(string $value): void
    {
        $this->setData(self::ADAPTER_CODE, $value);
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritdoc
     */
    public function setName(string $value): void
    {
        $this->setData(self::NAME, $value);
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return $this->getData(self::TEMPLATE);
    }

    /**
     * @inheritdoc
     */
    public function setTemplate(string $value): void
    {
        $this->setData(self::TEMPLATE, $value);
    }

    /**
     * @inheritdoc
     */
    public function getExtensionAttributes(): ?DatabaseTemplateExtensionInterface
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inheritdoc
     */
    public function setExtensionAttributes(
        DatabaseTemplateExtensionInterface $extensionAttributes
    ): void {
        $this->_setExtensionAttributes($extensionAttributes);
    }
}