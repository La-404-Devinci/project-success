<?php

namespace Container8Tx283Z;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0c72a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer09756 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d86c = [
        
    ];

    public function getConnection()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getConnection', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getMetadataFactory', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getExpressionBuilder', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'beginTransaction', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getCache', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'transactional', array('func' => $func), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'commit', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->commit();
    }

    public function rollback()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'rollback', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getClassMetadata', array('className' => $className), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'createQuery', array('dql' => $dql), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'createNamedQuery', array('name' => $name), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'createQueryBuilder', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'flush', array('entity' => $entity), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'clear', array('entityName' => $entityName), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->clear($entityName);
    }

    public function close()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'close', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->close();
    }

    public function persist($entity)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'persist', array('entity' => $entity), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'remove', array('entity' => $entity), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'refresh', array('entity' => $entity), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'detach', array('entity' => $entity), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'merge', array('entity' => $entity), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'contains', array('entity' => $entity), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getEventManager', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getConfiguration', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'isOpen', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getUnitOfWork', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getProxyFactory', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'initializeObject', array('obj' => $obj), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'getFilters', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'isFiltersStateClean', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'hasFilters', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return $this->valueHolder0c72a->hasFilters();
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

        $instance->initializer09756 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0c72a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0c72a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0c72a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, '__get', ['name' => $name], $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        if (isset(self::$publicProperties1d86c[$name])) {
            return $this->valueHolder0c72a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c72a;

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

        $targetObject = $this->valueHolder0c72a;
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
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c72a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0c72a;
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
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, '__isset', array('name' => $name), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c72a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0c72a;
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
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, '__unset', array('name' => $name), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c72a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0c72a;
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
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, '__clone', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        $this->valueHolder0c72a = clone $this->valueHolder0c72a;
    }

    public function __sleep()
    {
        $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, '__sleep', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;

        return array('valueHolder0c72a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer09756 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09756;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer09756 && ($this->initializer09756->__invoke($valueHolder0c72a, $this, 'initializeProxy', array(), $this->initializer09756) || 1) && $this->valueHolder0c72a = $valueHolder0c72a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0c72a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0c72a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
