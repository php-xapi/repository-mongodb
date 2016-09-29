CHANGELOG
=========

0.3.0
-----

* The `StatementRepository` class is final.

* The version of the virtual `php-xapi/repository-implementation` package
  provided by this package has been raised to `0.3`.

* The versions of the `php-xapi/repository-api` and `php-xapi/repository-doctrine`
  requirements have been raised to `^0.3`.

0.2.0
-----

* The base namespace was changed from `Xabbuh\XApi\Storage\MongoDB` to
  `XApi\Repository\MongoDB`.

* The documents `MappedStatement` and `MappedVerb` are now located in the
  `XApi\Repository\Api\Mapping` namespace.

* made the implementation compatible with version 0.2 of the repository API

0.1.1
-----

* fix the repository implementation version provided by this package

0.1.0
-----

First release of a MongoDB repository backend for xAPI learning record stores.
