<?php

declare(strict_types=1);

namespace JeroenG\Explorer\Domain\IndexManagement;

interface IndexConfigurationInterface
{
    public function getName(): string;

    public function getProperties(): array;

    public function getSettings(): array;

    public function toArray(): array;
}
