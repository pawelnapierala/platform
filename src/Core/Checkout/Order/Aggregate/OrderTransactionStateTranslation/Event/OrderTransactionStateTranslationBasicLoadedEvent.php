<?php declare(strict_types=1);

namespace Shopware\Checkout\Order\Aggregate\OrderTransactionStateTranslation\Event;

use Shopware\Framework\Context;
use Shopware\Checkout\Order\Aggregate\OrderTransactionStateTranslation\Collection\OrderTransactionStateTranslationBasicCollection;
use Shopware\Framework\Event\NestedEvent;

class OrderTransactionStateTranslationBasicLoadedEvent extends NestedEvent
{
    public const NAME = 'order_transaction_state_translation.basic.loaded';

    /**
     * @var Context
     */
    protected $context;

    /**
     * @var \Shopware\Checkout\Order\Aggregate\OrderTransactionStateTranslation\Collection\OrderTransactionStateTranslationBasicCollection
     */
    protected $orderTransactionStateTranslations;

    public function __construct(OrderTransactionStateTranslationBasicCollection $orderTransactionStateTranslations, Context $context)
    {
        $this->context = $context;
        $this->orderTransactionStateTranslations = $orderTransactionStateTranslations;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function getOrderTransactionStateTranslations(): OrderTransactionStateTranslationBasicCollection
    {
        return $this->orderTransactionStateTranslations;
    }
}
