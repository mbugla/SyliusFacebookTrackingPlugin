<?php

declare(strict_types=1);

namespace Setono\SyliusFacebookTrackingPlugin\Repository;

use Setono\SyliusFacebookTrackingPlugin\Model\FacebookConfigInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface FacebookConfigRepositoryInterface extends RepositoryInterface
{
    public function findConfig(): ?FacebookConfigInterface;
}
