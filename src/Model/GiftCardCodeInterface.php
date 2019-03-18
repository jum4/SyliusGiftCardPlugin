<?php

declare(strict_types=1);

namespace Setono\SyliusGiftCardPlugin\Model;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Channel\Model\ChannelAwareInterface;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\OrderItemInterface;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface GiftCardCodeInterface extends ResourceInterface, CodeAwareInterface, ChannelAwareInterface
{
    /**
     * @return OrderItemInterface|null
     */
    public function getOrderItem(): ?OrderItemInterface;

    /**
     * @param OrderItemInterface|null $orderItem
     */
    public function setOrderItem(?OrderItemInterface $orderItem): void;

    /**
     * @return GiftCardInterface|null
     */
    public function getGiftCard(): ?GiftCardInterface;

    /**
     * @param GiftCardInterface|null $giftCard
     */
    public function setGiftCard(?GiftCardInterface $giftCard): void;

    /**
     * @return int
     */
    public function getAmount(): int;

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void;

    /**
     * @return bool
     */
    public function isActive(): bool;

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void;

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string;

    /**
     * @param string|null $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void;

    /**
     * @return Collection
     */
    public function getUsedInOrders(): Collection;

    /**
     * @param OrderInterface $order
     */
    public function addUsedInOrder(OrderInterface $order): void;

    /**
     * @param OrderInterface $order
     */
    public function removeUsedInOrder(OrderInterface $order): void;

    /**
     * @param OrderInterface $order
     *
     * @return bool
     */
    public function hasUsedInOrder(OrderInterface $order): bool;

    /**
     * @return OrderInterface|null
     */
    public function getCurrentOrder(): ?OrderInterface;

    /**
     * @param OrderInterface|null $currentOrder
     */
    public function setCurrentOrder(?OrderInterface $currentOrder): void;
}
