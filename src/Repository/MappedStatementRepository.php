<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Repository\MongoDB\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;
use XApi\Repository\Api\Mapping\MappedStatement;
use XApi\Repository\Doctrine\Repository\MappedStatementRepository as MappedStatementRepositoryInteface;

/**
 * A MongoDB backed statement repository.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class MappedStatementRepository extends DocumentRepository implements MappedStatementRepositoryInteface
{
    /**
     * {@inheritdoc}
     */
    public function findMappedStatement(array $criteria)
    {
        return parent::findOneBy($criteria);
    }

    /**
     * {@inheritdoc}
     */
    public function findMappedStatements(array $criteria)
    {
        return parent::findBy($criteria);
    }

    /**
     * {@inheritdoc}
     */
    public function storeMappedStatement(MappedStatement $mappedStatement, $flush = true)
    {
        $this->getDocumentManager()->persist($mappedStatement);

        if ($flush) {
            $this->getDocumentManager()->flush();
        }
    }
}
