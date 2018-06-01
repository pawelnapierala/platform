<?php declare(strict_types=1);

namespace Shopware\Framework\ORM\Dbal\FieldAccessorBuilder;

use Shopware\Framework\Context;
use Shopware\Framework\ORM\Field\Field;
use Shopware\Framework\ORM\Field\PriceField;

class PriceFieldAccessorBuilder implements FieldAccessorBuilderInterface
{
    public function buildAccessor(string $root, Field $field, Context $context, string $accessor): ?string
    {
        if (!$field instanceof PriceField) {
            return null;
        }

        return sprintf('(CAST(JSON_UNQUOTE(JSON_EXTRACT(`%s`.`%s`, "$.gross")) AS DECIMAL))', $root, $field->getStorageName());
    }
}
