<?php

namespace ContainerRWxfJwK;

include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/EventListener/UserPreferencesListener.php';
class UserPreferencesListener_f335a33 extends \Akeneo\UserManagement\Bundle\EventListener\UserPreferencesListener implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8d85c = null;
    private $initializerf6b70 = null;
    private static $publicProperties7b481 = [
        
    ];
    public function onFlush(\Doctrine\ORM\Event\OnFlushEventArgs $args)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'onFlush', array('args' => $args), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->onFlush($args);
    }
    public function postFlush(\Doctrine\ORM\Event\PostFlushEventArgs $args)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'postFlush', array('args' => $args), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->postFlush($args);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->metadata, $instance->deactivatedLocales);
        \Closure::bind(function (\Akeneo\UserManagement\Bundle\EventListener\UserPreferencesListener $instance) {
            unset($instance->categoryRepository, $instance->channelRepository, $instance->localeRepository, $instance->userRepository);
        }, $instance, 'Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener')->__invoke($instance);
        $instance->initializerf6b70 = $initializer;
        return $instance;
    }
    public function __construct(\Akeneo\Category\Infrastructure\Component\Classification\Repository\CategoryRepositoryInterface $categoryRepository, \Akeneo\Channel\Infrastructure\Component\Repository\ChannelRepositoryInterface $channelRepository, \Akeneo\Channel\Infrastructure\Component\Repository\LocaleRepositoryInterface $localeRepository, \Akeneo\UserManagement\Component\Repository\UserRepositoryInterface $userRepository)
    {
        static $reflection;
        if (! $this->valueHolder8d85c) {
            $reflection = $reflection ?? new \ReflectionClass('Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener');
            $this->valueHolder8d85c = $reflection->newInstanceWithoutConstructor();
        unset($this->metadata, $this->deactivatedLocales);
        \Closure::bind(function (\Akeneo\UserManagement\Bundle\EventListener\UserPreferencesListener $instance) {
            unset($instance->categoryRepository, $instance->channelRepository, $instance->localeRepository, $instance->userRepository);
        }, $this, 'Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener')->__invoke($this);
        }
        $this->valueHolder8d85c->__construct($categoryRepository, $channelRepository, $localeRepository, $userRepository);
    }
    public function & __get($name)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__get', ['name' => $name], $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        if (isset(self::$publicProperties7b481[$name])) {
            return $this->valueHolder8d85c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener');
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
        unset($this->metadata, $this->deactivatedLocales);
        \Closure::bind(function (\Akeneo\UserManagement\Bundle\EventListener\UserPreferencesListener $instance) {
            unset($instance->categoryRepository, $instance->channelRepository, $instance->localeRepository, $instance->userRepository);
        }, $this, 'Akeneo\\UserManagement\\Bundle\\EventListener\\UserPreferencesListener')->__invoke($this);
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

if (!\class_exists('UserPreferencesListener_f335a33', false)) {
    \class_alias(__NAMESPACE__.'\\UserPreferencesListener_f335a33', 'UserPreferencesListener_f335a33', false);
}
