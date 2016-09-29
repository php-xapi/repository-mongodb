UPGRADE
=======

Upgrading from 0.2 to 0.3
-------------------------

* The `StatementRepository` class is final.

* The version of the virtual `php-xapi/repository-implementation` package
  provided by this package has been raised to `0.3`.

* The versions of the `php-xapi/repository-api` and `php-xapi/repository-doctrine`
  requirements have been raised to `^0.3`.

Upgrading from 0.1 to 0.2
-------------------------

* The base namespace was changed from `Xabbuh\XApi\Storage\MongoDB` to
  `XApi\Repository\MongoDB`.

* The documents `MappedStatement` and `MappedVerb` are now located in the
  `XApi\Repository\Api\Mapping` namespace.
