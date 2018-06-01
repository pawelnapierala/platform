<?php declare(strict_types=1);

namespace Shopware\Storefront\Api\Seo\Event\SeoUrl;

use Shopware\Framework\Context;
use Shopware\Framework\Event\NestedEvent;
use Shopware\Framework\ORM\Search\IdSearchResult;

class SeoUrlIdSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'seo_url.id.search.result.loaded';

    /**
     * @var IdSearchResult
     */
    protected $result;

    public function __construct(IdSearchResult $result)
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

    public function getResult(): IdSearchResult
    {
        return $this->result;
    }
}
