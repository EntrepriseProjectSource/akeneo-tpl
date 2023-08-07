<?php

namespace ContainerRWxfJwK;

include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Repository/RemovableObjectRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchBundle/Job/JobInstanceRepository.php';
class JobInstanceRepository_39eaafb extends \Akeneo\Tool\Bundle\BatchBundle\Job\JobInstanceRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8d85c = null;
    private $initializerf6b70 = null;
    private static $publicProperties7b481 = [
        
    ];
    public function findOneByIdentifier($code)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'findOneByIdentifier', array('code' => $code), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->findOneByIdentifier($code);
    }
    public function getIdentifierProperties()
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'getIdentifierProperties', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->getIdentifierProperties();
    }
    public function remove(string $identifier) : void
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'remove', array('identifier' => $identifier), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $this->valueHolder8d85c->remove($identifier);
return;
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'clear', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'findAll', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'count', array('criteria' => $criteria), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'getClassName', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'matching', array('criteria' => $criteria), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializerf6b70 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;
        if (! $this->valueHolder8d85c) {
            $reflection = $reflection ?? new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\JobInstanceRepository');
            $this->valueHolder8d85c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolder8d85c->__construct($em, $class);
    }
    public function & __get($name)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__get', ['name' => $name], $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        if (isset(self::$publicProperties7b481[$name])) {
            return $this->valueHolder8d85c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\JobInstanceRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d85c;
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
        $targetObject = $this->valueHolder8d85c;
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
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\JobInstanceRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d85c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8d85c;
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
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__isset', array('name' => $name), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\JobInstanceRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d85c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8d85c;
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
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__unset', array('name' => $name), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\JobInstanceRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d85c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8d85c;
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
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__clone', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $this->valueHolder8d85c = clone $this->valueHolder8d85c;
    }
    public function __sleep()
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__sleep', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return array('valueHolder8d85c');
    }
    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf6b70 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf6b70;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'initializeProxy', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8d85c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8d85c;
    }
}

if (!\class_exists('JobInstanceRepository_39eaafb', false)) {
    \class_alias(__NAMESPACE__.'\\JobInstanceRepository_39eaafb', 'JobInstanceRepository_39eaafb', false);
}
