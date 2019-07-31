<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\NotifierTemplate\Test\Integration\Mock;

use Magento\TestFramework\Helper\Bootstrap;
use MSP\NotifierTemplate\Model\TemplateGetter\FilesystemTemplateGetter\GetTemplateFile;

class ConfigureMockFilesystemTemplates
{
    /**
     * Configure object manager to use a fake adapter
     */
    public static function execute(): void
    {
        $objectManager = Bootstrap::getObjectManager();

        $objectManager->configure([
            ltrim(GetTemplateFile::class, '\\') => [
                'arguments' => [
                    'reader' => [
                        'instance' => ModuleDirReaderMock::class
                    ],
                    'filesystemTemplateRepository' => [
                        'instance' => FilesystemTemplateRepositoryMock::class
                    ]
                ]
            ]
        ]);
    }
}