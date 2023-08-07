<?php

namespace Proxies\__CG__\Akeneo\Pim\Enrichment\Component\Product\Model;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductModel extends \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModel implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
  'rawQuantifiedAssociations' => NULL,
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
  'rawQuantifiedAssociations' => NULL,
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        unset($this->rawQuantifiedAssociations);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);

    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'code', 'rawValues', 'values', 'created', 'updated', 'categories', 'products', 'parent', 'productModels', 'familyVariant', 'associations', 'quantifiedAssociationCollection', 'dirty', 'rawQuantifiedAssociations'];
        }

        return ['__isInitialized__', 'id', 'code', 'rawValues', 'values', 'created', 'updated', 'categories', 'products', 'parent', 'productModels', 'familyVariant', 'associations', 'quantifiedAssociationCollection', 'dirty'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductModel $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->rawQuantifiedAssociations);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(string $code): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getRawValues(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRawValues', []);

        return parent::getRawValues();
    }

    /**
     * {@inheritDoc}
     */
    public function setRawValues(array $rawValues): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRawValues', [$rawValues]);

        return parent::setRawValues($rawValues);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues(): \Akeneo\Pim\Enrichment\Component\Product\Model\WriteValueCollection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValues', []);

        return parent::getValues();
    }

    /**
     * {@inheritDoc}
     */
    public function getValuesForVariation(): \Akeneo\Pim\Enrichment\Component\Product\Model\WriteValueCollection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValuesForVariation', []);

        return parent::getValuesForVariation();
    }

    /**
     * {@inheritDoc}
     */
    public function setValues(\Akeneo\Pim\Enrichment\Component\Product\Model\WriteValueCollection $values)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValues', [$values]);

        return parent::setValues($values);
    }

    /**
     * {@inheritDoc}
     */
    public function getValue($attributeCode, $localeCode = NULL, $scopeCode = NULL): ?\Akeneo\Pim\Enrichment\Component\Product\Model\ValueInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', [$attributeCode, $localeCode, $scopeCode]);

        return parent::getValue($attributeCode, $localeCode, $scopeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function addValue(\Akeneo\Pim\Enrichment\Component\Product\Model\ValueInterface $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addValue', [$value]);

        return parent::addValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeValue(\Akeneo\Pim\Enrichment\Component\Product\Model\ValueInterface $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeValue', [$value]);

        return parent::removeValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAttribute(string $attributeCode): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAttribute', [$attributeCode]);

        return parent::hasAttribute($attributeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsedAttributeCodes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsedAttributeCodes', []);

        return parent::getUsedAttributeCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\Akeneo\Category\Infrastructure\Component\Classification\Model\CategoryInterface $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\Akeneo\Category\Infrastructure\Component\Classification\Model\CategoryInterface $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories(\Doctrine\Common\Collections\Collection $categories): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryCodes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryCodes', []);

        return parent::getCategoryCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', []);

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduct(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface $product): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduct', [$product]);

        return parent::addProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduct(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface $product): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduct', [$product]);

        return parent::removeProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function isRoot(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRoot', []);

        return parent::isRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $parent = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductModel(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $child): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductModel', [$child]);

        return parent::addProductModel($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductModel(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $children): \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductModel', [$children]);

        return parent::removeProductModel($children);
    }

    /**
     * {@inheritDoc}
     */
    public function hasProductModels(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasProductModels', []);

        return parent::hasProductModels();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductModels(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductModels', []);

        return parent::getProductModels();
    }

    /**
     * {@inheritDoc}
     */
    public function getFamilyVariant(): ?\Akeneo\Pim\Structure\Component\Model\FamilyVariantInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFamilyVariant', []);

        return parent::getFamilyVariant();
    }

    /**
     * {@inheritDoc}
     */
    public function setFamilyVariant(\Akeneo\Pim\Structure\Component\Model\FamilyVariantInterface $familyVariant): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFamilyVariant', [$familyVariant]);

        parent::setFamilyVariant($familyVariant);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationLevel(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationLevel', []);

        return parent::getVariationLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function isRootProductModel(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRootProductModel', []);

        return parent::isRootProductModel();
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel(string $localeCode = NULL, string $scopeCode = NULL): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', [$localeCode, $scopeCode]);

        return parent::getLabel($localeCode, $scopeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?\Akeneo\Pim\Enrichment\Component\Product\Model\ValueInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getFamily(): ?\Akeneo\Pim\Structure\Component\Model\FamilyInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFamily', []);

        return parent::getFamily();
    }

    /**
     * {@inheritDoc}
     */
    public function addAssociation(\Akeneo\Pim\Enrichment\Component\Product\Model\AssociationInterface $newAssociation): \Akeneo\Pim\Enrichment\Component\Product\Model\EntityWithAssociationsInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssociation', [$newAssociation]);

        return parent::addAssociation($newAssociation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAssociation(\Akeneo\Pim\Enrichment\Component\Product\Model\AssociationInterface $association): \Akeneo\Pim\Enrichment\Component\Product\Model\EntityWithAssociationsInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAssociation', [$association]);

        return parent::removeAssociation($association);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociations', []);

        return parent::getAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantifiedAssociations(): \Akeneo\Pim\Enrichment\Component\Product\Model\QuantifiedAssociation\QuantifiedAssociationCollection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantifiedAssociations', []);

        return parent::getQuantifiedAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function filterQuantifiedAssociations(array $productIdentifiersToKeep, array $productUuidsToKeep, array $productModelCodesToKeep): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'filterQuantifiedAssociations', [$productIdentifiersToKeep, $productUuidsToKeep, $productModelCodesToKeep]);

        parent::filterQuantifiedAssociations($productIdentifiersToKeep, $productUuidsToKeep, $productModelCodesToKeep);
    }

    /**
     * {@inheritDoc}
     */
    public function mergeQuantifiedAssociations(\Akeneo\Pim\Enrichment\Component\Product\Model\QuantifiedAssociation\QuantifiedAssociationCollection $quantifiedAssociations): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'mergeQuantifiedAssociations', [$quantifiedAssociations]);

        parent::mergeQuantifiedAssociations($quantifiedAssociations);
    }

    /**
     * {@inheritDoc}
     */
    public function patchQuantifiedAssociations(array $submittedQuantifiedAssociations): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'patchQuantifiedAssociations', [$submittedQuantifiedAssociations]);

        parent::patchQuantifiedAssociations($submittedQuantifiedAssociations);
    }

    /**
     * {@inheritDoc}
     */
    public function clearQuantifiedAssociations(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearQuantifiedAssociations', []);

        parent::clearQuantifiedAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllAssociations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllAssociations', []);

        return parent::getAllAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function isDirty(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDirty', []);

        return parent::isDirty();
    }

    /**
     * {@inheritDoc}
     */
    public function cleanup(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cleanup', []);

        parent::cleanup();
    }

    /**
     * {@inheritDoc}
     */
    public function hasAssociationForTypeCode(string $associationTypeCode): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAssociationForTypeCode', [$associationTypeCode]);

        return parent::hasAssociationForTypeCode($associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function addAssociatedProduct(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface $product, string $associationTypeCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssociatedProduct', [$product, $associationTypeCode]);

        parent::addAssociatedProduct($product, $associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAssociatedProduct(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface $product, string $associationTypeCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAssociatedProduct', [$product, $associationTypeCode]);

        parent::removeAssociatedProduct($product, $associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociatedProducts(string $associationTypeCode): ?\Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociatedProducts', [$associationTypeCode]);

        return parent::getAssociatedProducts($associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function addAssociatedProductModel(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $productModel, string $associationTypeCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssociatedProductModel', [$productModel, $associationTypeCode]);

        parent::addAssociatedProductModel($productModel, $associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAssociatedProductModel(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $productModel, string $associationTypeCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAssociatedProductModel', [$productModel, $associationTypeCode]);

        parent::removeAssociatedProductModel($productModel, $associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociatedProductModels(string $associationTypeCode): ?\Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociatedProductModels', [$associationTypeCode]);

        return parent::getAssociatedProductModels($associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function addAssociatedGroup(\Akeneo\Pim\Enrichment\Component\Product\Model\GroupInterface $group, string $associationTypeCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssociatedGroup', [$group, $associationTypeCode]);

        parent::addAssociatedGroup($group, $associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAssociatedGroup(\Akeneo\Pim\Enrichment\Component\Product\Model\GroupInterface $group, string $associationTypeCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAssociatedGroup', [$group, $associationTypeCode]);

        parent::removeAssociatedGroup($group, $associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociatedGroups(string $associationTypeCode): ?\Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociatedGroups', [$associationTypeCode]);

        return parent::getAssociatedGroups($associationTypeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoriesForCurrentLevel(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoriesForCurrentLevel', []);

        return parent::getCategoriesForCurrentLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantifiedAssociationsProductIds(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantifiedAssociationsProductIds', []);

        return parent::getQuantifiedAssociationsProductIds();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantifiedAssociationsProductModelIds(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantifiedAssociationsProductModelIds', []);

        return parent::getQuantifiedAssociationsProductModelIds();
    }

    /**
     * {@inheritDoc}
     */
    public function hydrateQuantifiedAssociations(\Akeneo\Pim\Enrichment\Component\Product\Model\QuantifiedAssociation\UuidMapping $mappedProductIds, \Akeneo\Pim\Enrichment\Component\Product\Model\QuantifiedAssociation\IdMapping $mappedProductModelIds, array $associationTypeCodes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hydrateQuantifiedAssociations', [$mappedProductIds, $mappedProductModelIds, $associationTypeCodes]);

        parent::hydrateQuantifiedAssociations($mappedProductIds, $mappedProductModelIds, $associationTypeCodes);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantifiedAssociationsProductIdentifiers(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantifiedAssociationsProductIdentifiers', []);

        return parent::getQuantifiedAssociationsProductIdentifiers();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantifiedAssociationsProductUuids(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantifiedAssociationsProductUuids', []);

        return parent::getQuantifiedAssociationsProductUuids();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantifiedAssociationsProductModelCodes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantifiedAssociationsProductModelCodes', []);

        return parent::getQuantifiedAssociationsProductModelCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function updateRawQuantifiedAssociations(\Akeneo\Pim\Enrichment\Component\Product\Model\QuantifiedAssociation\UuidMapping $uuidMappedProductIdentifiers, \Akeneo\Pim\Enrichment\Component\Product\Model\QuantifiedAssociation\IdMapping $mappedProductModelIdentifiers): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateRawQuantifiedAssociations', [$uuidMappedProductIdentifiers, $mappedProductModelIdentifiers]);

        parent::updateRawQuantifiedAssociations($uuidMappedProductIdentifiers, $mappedProductModelIdentifiers);
    }

    /**
     * {@inheritDoc}
     */
    public function normalizeQuantifiedAssociations(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'normalizeQuantifiedAssociations', []);

        return parent::normalizeQuantifiedAssociations();
    }

}
