<?php

namespace ContainerEZXDwrs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16520 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer27510 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3abc2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getConnection', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getMetadataFactory', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getExpressionBuilder', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'beginTransaction', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getCache', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getCache();
    }

    public function transactional($func)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'transactional', array('func' => $func), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'wrapInTransaction', array('func' => $func), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'commit', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->commit();
    }

    public function rollback()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'rollback', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getClassMetadata', array('className' => $className), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'createQuery', array('dql' => $dql), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'createNamedQuery', array('name' => $name), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'createQueryBuilder', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'flush', array('entity' => $entity), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'clear', array('entityName' => $entityName), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->clear($entityName);
    }

    public function close()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'close', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->close();
    }

    public function persist($entity)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'persist', array('entity' => $entity), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'remove', array('entity' => $entity), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'refresh', array('entity' => $entity), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'detach', array('entity' => $entity), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'merge', array('entity' => $entity), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getRepository', array('entityName' => $entityName), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'contains', array('entity' => $entity), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getEventManager', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getConfiguration', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'isOpen', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getUnitOfWork', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getProxyFactory', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'initializeObject', array('obj' => $obj), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'getFilters', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'isFiltersStateClean', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'hasFilters', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return $this->valueHolder16520->hasFilters();
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

        $instance->initializer27510 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16520) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16520 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16520->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, '__get', ['name' => $name], $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        if (isset(self::$publicProperties3abc2[$name])) {
            return $this->valueHolder16520->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16520;

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

        $targetObject = $this->valueHolder16520;
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
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16520;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16520;
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
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, '__isset', array('name' => $name), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16520;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16520;
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
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, '__unset', array('name' => $name), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16520;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16520;
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
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, '__clone', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        $this->valueHolder16520 = clone $this->valueHolder16520;
    }

    public function __sleep()
    {
        $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, '__sleep', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;

        return array('valueHolder16520');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer27510 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer27510;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer27510 && ($this->initializer27510->__invoke($valueHolder16520, $this, 'initializeProxy', array(), $this->initializer27510) || 1) && $this->valueHolder16520 = $valueHolder16520;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16520;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16520;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
