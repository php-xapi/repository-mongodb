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
use XApi\Repository\Doctrine\Mapping\Statement;
use XApi\Repository\Doctrine\Repository\Mapping\StatementRepository as StatementRepositoryInterface;

/**
 * A MongoDB backed statement repository.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
final class StatementRepository extends DocumentRepository implements StatementRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function findStatement(array $criteria)
    {
        return $this->findOneBy($criteria);
    }

    /**
     * {@inheritdoc}
     */
    public function findStatements(array $criteria)
    {
        return $this->findBy($criteria);
    }

    /**
     * {@inheritdoc}
     */
    public function storeStatement(Statement $mappedStatement, $flush = true)
    {
        $this->getDocumentManager()->persist($mappedStatement);

        if ($flush) {
            $this->getDocumentManager()->flush();
        }
    }
}
