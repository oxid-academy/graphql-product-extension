<?php

declare(strict_types=1);

namespace OxidAcademy\GraphQL\ProductExtension\Shared\Service;

use OxidEsales\GraphQL\Base\Framework\NamespaceMapperInterface;

final class NamespaceMapper implements NamespaceMapperInterface
{
    public function getControllerNamespaceMapping(): array
    {
        return [];
    }

    public function getTypeNamespaceMapping(): array
    {
        return [
            'OxidAcademy\\GraphQL\\ProductExtension\\Product\\Service' => __DIR__ . '/../../Product/Service/',
        ];
    }
}
