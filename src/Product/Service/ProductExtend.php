<?php

declare(strict_types=1);

namespace OxidAcademy\GraphQL\ProductExtension\Product\Service;

use OxidEsales\GraphQL\Storefront\Product\DataType\Product as ProductDataType;
use TheCodingMachine\GraphQLite\Annotations\ExtendType;
use TheCodingMachine\GraphQLite\Annotations\Field;

use function sprintf;
use function strrev;

/**
 * @ExtendType(class=ProductDataType::class)
 */
final class ProductExtend
{
    /**
     * Wrapper for different wording
     *
     * @Field()
     */
    public function itemNumber(ProductDataType $product): string
    {
        return (string) $product->getEshopModel()->getFieldData('oxartnum');
    }

    /**
     * Mocks a custom field by using and changing a native field.
     *
     * @Field()
     */
    public function subtitle(ProductDataType $product): string
    {
        $title = $product->getEshopModel()->getFieldData('oxtitle');
        $shuffledTitle = strrev($title);
        return sprintf('%s <-> %s', $title, $shuffledTitle);
    }
}
