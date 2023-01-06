<?php declare(strict_types=1);

namespace OxidAcademy\GraphQL\ProductExtension\Shared\Service;

use OxidEsales\EshopCommunity\Core\Registry;
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
            'OxidAcademy\\GraphQL\\ProductExtension\\Product\\Service' => dirname( __DIR__, 2) . '/Product/Service/',
        ];
    }
}
