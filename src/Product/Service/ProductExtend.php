<?php declare(strict_types=1);

namespace OxidAcademy\GraphQL\ProductExtension\Product\Service;

use OxidEsales\GraphQL\Storefront\Product\DataType\Product as ProductDataType;
use TheCodingMachine\GraphQLite\Annotations\ExtendType;
use TheCodingMachine\GraphQLite\Annotations\Field;

/**
 * @ExtendType(class=ProductDataType::class)
 */
final class ProductExtend
{
    /**
     * Wrapper for different wording - if you insist the field needs a better suited name ;)
     *
     * @Field(name="OxAcItemNumber")
     */
    public function itemNumber(ProductDataType $product): string
    {
        return (string) $product->getSku();
    }

    /**
     * Fetch raw data from the shop model and compile your own information from that.
     *
     * @Field(name="OxAcProductIdentifier")
     */
    public function productIdentifier(ProductDataType $product): string
    {
        return (string) $product->getEshopModel()->getRawFieldData('oxartnum') . '--' .
            (string) $product->getEshopModel()->getRawFieldData('oxtitle');
    }
}
