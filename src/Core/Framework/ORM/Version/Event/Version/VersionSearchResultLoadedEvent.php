<?php declare(strict_types=1);

namespace Shopware\Framework\ORM\Version\Event\Version;

use Shopware\Framework\Context;
use Shopware\Framework\Event\NestedEvent;
use Shopware\Framework\ORM\Version\Struct\VersionSearchResult;

class VersionSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'version.search.result.loaded';

    /**
     * @var VersionSearchResult
     */
    protected $result;

    public function __construct(VersionSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): Context
    {
        return $this->result->getContext();
    }
}
