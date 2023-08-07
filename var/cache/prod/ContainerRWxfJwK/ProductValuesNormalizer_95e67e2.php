<?php

namespace ContainerRWxfJwK;

include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/Storage/Product/ProductValuesNormalizer.php';
class ProductValuesNormalizer_95e67e2 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8d85c = null;
    private $initializerf6b70 = null;
    private static $publicProperties7b481 = [
        
    ];
    public function normalize($values, $format = null, array $context = [])
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'normalize', array('values' => $values, 'format' => $format, 'context' => $context), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->normalize($values, $format, $context);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->supportsNormalization($data, $format);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'hasCacheableSupportsMethod', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->hasCacheableSupportsMethod();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($instance);
        $instance->initializerf6b70 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\Serializer\Normalizer\NormalizerInterface $valueNormalizer)
    {
        static $reflection;
        if (! $this->valueHolder8d85c) {
            $reflection = $reflection ?? new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
            $this->valueHolder8d85c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);
        }
        $this->valueHolder8d85c->__construct($valueNormalizer);
    }
    public function & __get($name)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__get', ['name' => $name], $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        if (isset(self::$publicProperties7b481[$name])) {
            return $this->valueHolder8d85c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
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
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);
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

if (!\class_exists('ProductValuesNormalizer_95e67e2', false)) {
    \class_alias(__NAMESPACE__.'\\ProductValuesNormalizer_95e67e2', 'ProductValuesNormalizer_95e67e2', false);
}
