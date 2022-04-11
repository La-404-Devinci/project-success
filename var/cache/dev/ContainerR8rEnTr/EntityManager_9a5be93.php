<?php

namespace ContainerR8rEnTr;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf5b78 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer45d1f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93f5f = [
        
    ];

    public function getConnection()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getConnection', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getMetadataFactory', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getExpressionBuilder', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'beginTransaction', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getCache', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getCache();
    }

    public function transactional($func)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'transactional', array('func' => $func), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'wrapInTransaction', array('func' => $func), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'commit', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->commit();
    }

    public function rollback()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'rollback', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getClassMetadata', array('className' => $className), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'createQuery', array('dql' => $dql), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'createNamedQuery', array('name' => $name), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'createQueryBuilder', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'flush', array('entity' => $entity), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'clear', array('entityName' => $entityName), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->clear($entityName);
    }

    public function close()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'close', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->close();
    }

    public function persist($entity)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'persist', array('entity' => $entity), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'remove', array('entity' => $entity), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'refresh', array('entity' => $entity), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'detach', array('entity' => $entity), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'merge', array('entity' => $entity), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getRepository', array('entityName' => $entityName), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'contains', array('entity' => $entity), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getEventManager', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getConfiguration', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'isOpen', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getUnitOfWork', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getProxyFactory', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'initializeObject', array('obj' => $obj), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'getFilters', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'isFiltersStateClean', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'hasFilters', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return $this->valueHolderf5b78->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer45d1f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf5b78) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf5b78 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf5b78->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, '__get', ['name' => $name], $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        if (isset(self::$publicProperties93f5f[$name])) {
            return $this->valueHolderf5b78->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5b78;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf5b78;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5b78;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf5b78;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, '__isset', array('name' => $name), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5b78;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf5b78;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, '__unset', array('name' => $name), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5b78;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf5b78;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, '__clone', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        $this->valueHolderf5b78 = clone $this->valueHolderf5b78;
    }

    public function __sleep()
    {
        $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, '__sleep', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;

        return array('valueHolderf5b78');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer45d1f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer45d1f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer45d1f && ($this->initializer45d1f->__invoke($valueHolderf5b78, $this, 'initializeProxy', array(), $this->initializer45d1f) || 1) && $this->valueHolderf5b78 = $valueHolderf5b78;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf5b78;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf5b78;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
