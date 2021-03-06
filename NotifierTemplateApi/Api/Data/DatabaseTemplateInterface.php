<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\NotifierTemplateApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface DatabaseTemplateInterface extends ExtensibleDataInterface
{
    /**
     * Get value for rule_id
     * @return int
     */
    public function getId();

    /**
     * Set value for rule_id
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * Get value for code
     * @return string
     */
    public function getCode(): string;

    /**
     * Set value for code
     * @param string $value
     * @return void
     */
    public function setCode(string $value): void;

    /**
     * Get value for adapter_code
     * @return string
     */
    public function getAdapterCode(): string;

    /**
     * Set value for adapter_code
     * @param string $value
     * @return void
     */
    public function setAdapterCode(string $value): void;

    /**
     * Get value for name
     * @return string
     */
    public function getName(): string;

    /**
     * Set value for name
     * @param string $value
     * @return void
     */
    public function setName(string $value): void;

    /**
     * Get value for template
     * @return string
     */
    public function getTemplate(): string;

    /**
     * Set value for template
     * @param string $value
     * @return void
     */
    public function setTemplate(string $value): void;

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \Magento\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface|null
     */
    public function getExtensionAttributes(): ?\Magento\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface;

    /**
     * Set an extension attributes object
     * @param \Magento\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface $extensionAttributes
    ): void;
}
