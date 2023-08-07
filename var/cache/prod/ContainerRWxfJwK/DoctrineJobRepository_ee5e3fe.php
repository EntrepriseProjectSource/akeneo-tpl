<?php

namespace ContainerRWxfJwK;

include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Batch/Job/JobRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchBundle/Job/DoctrineJobRepository.php';
class DoctrineJobRepository_ee5e3fe extends \Akeneo\Tool\Bundle\BatchBundle\Job\DoctrineJobRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8d85c = null;
    private $initializerf6b70 = null;
    private static $publicProperties7b481 = [
        
    ];
    public function getJobManager() : \Doctrine\ORM\EntityManagerInterface
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'getJobManager', array(), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->getJobManager();
    }
    public function createJobExecution(\Akeneo\Tool\Component\Batch\Job\JobInterface $job, \Akeneo\Tool\Component\Batch\Model\JobInstance $jobInstance, \Akeneo\Tool\Component\Batch\Job\JobParameters $jobParameters) : \Akeneo\Tool\Component\Batch\Model\JobExecution
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'createJobExecution', array('job' => $job, 'jobInstance' => $jobInstance, 'jobParameters' => $jobParameters), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->createJobExecution($job, $jobInstance, $jobParameters);
    }
    public function updateJobExecution(\Akeneo\Tool\Component\Batch\Model\JobExecution $jobExecution) : void
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'updateJobExecution', array('jobExecution' => $jobExecution), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $this->valueHolder8d85c->updateJobExecution($jobExecution);
return;
    }
    public function updateStepExecution(\Akeneo\Tool\Component\Batch\Model\StepExecution $stepExecution) : void
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'updateStepExecution', array('stepExecution' => $stepExecution), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $this->valueHolder8d85c->updateStepExecution($stepExecution);
return;
    }
    public function getLastJobExecution(\Akeneo\Tool\Component\Batch\Model\JobInstance $jobInstance, $status) : ?\Akeneo\Tool\Component\Batch\Model\JobExecution
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'getLastJobExecution', array('jobInstance' => $jobInstance, 'status' => $status), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        return $this->valueHolder8d85c->getLastJobExecution($jobInstance, $status);
    }
    public function remove(array $jobsExecutions) : void
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'remove', array('jobsExecutions' => $jobsExecutions), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $this->valueHolder8d85c->remove($jobsExecutions);
return;
    }
    public function addWarning(\Akeneo\Tool\Component\Batch\Model\Warning $warning) : void
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'addWarning', array('warning' => $warning), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $this->valueHolder8d85c->addWarning($warning);
return;
    }
    public function addWarnings(\Akeneo\Tool\Component\Batch\Model\StepExecution $stepExecution, array $warnings) : void
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, 'addWarnings', array('stepExecution' => $stepExecution, 'warnings' => $warnings), $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        $this->valueHolder8d85c->addWarnings($stepExecution, $warnings);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->jobManager, $instance->jobExecutionClass, $instance->batchSize, $instance->jobRegistry);
        $instance->initializerf6b70 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManager $entityManager, string $jobExecutionClass, string $jobInstanceClass, string $jobInstanceRepoClass, \Akeneo\Tool\Component\Batch\Job\JobRegistry $jobRegistry, int $batchSize = 100)
    {
        static $reflection;
        if (! $this->valueHolder8d85c) {
            $reflection = $reflection ?? new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\DoctrineJobRepository');
            $this->valueHolder8d85c = $reflection->newInstanceWithoutConstructor();
        unset($this->jobManager, $this->jobExecutionClass, $this->batchSize, $this->jobRegistry);
        }
        $this->valueHolder8d85c->__construct($entityManager, $jobExecutionClass, $jobInstanceClass, $jobInstanceRepoClass, $jobRegistry, $batchSize);
    }
    public function & __get($name)
    {
        $this->initializerf6b70 && ($this->initializerf6b70->__invoke($valueHolder8d85c, $this, '__get', ['name' => $name], $this->initializerf6b70) || 1) && $this->valueHolder8d85c = $valueHolder8d85c;
        if (isset(self::$publicProperties7b481[$name])) {
            return $this->valueHolder8d85c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\DoctrineJobRepository');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\DoctrineJobRepository');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\DoctrineJobRepository');
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
        $realInstanceReflection = new \ReflectionClass('Akeneo\\Tool\\Bundle\\BatchBundle\\Job\\DoctrineJobRepository');
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
        unset($this->jobManager, $this->jobExecutionClass, $this->batchSize, $this->jobRegistry);
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

if (!\class_exists('DoctrineJobRepository_ee5e3fe', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrineJobRepository_ee5e3fe', 'DoctrineJobRepository_ee5e3fe', false);
}
