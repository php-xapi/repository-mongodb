<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Repository\MongoDB\Tests\Unit\Repository;

use XApi\Repository\Doctrine\Test\Unit\Repository\Mapping\StatementRepositoryTest as BaseStatementRepositoryTest;
use XApi\Repository\MongoDB\Repository\StatementRepository;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementRepositoryTest extends BaseStatementRepositoryTest
{
    protected function getObjectManagerClass()
    {
        return 'Doctrine\ODM\MongoDB\DocumentManager';
    }

    protected function getUnitOfWorkClass()
    {
        return 'Doctrine\ODM\MongoDB\UnitOfWork';
    }

    protected function getClassMetadataClass()
    {
        return 'Doctrine\ODM\MongoDB\Mapping\ClassMetadata';
    }

    protected function createMappedStatementRepository($objectManager, $unitOfWork, $classMetadata)
    {
        return new StatementRepository($objectManager, $unitOfWork, $classMetadata);
    }
}
