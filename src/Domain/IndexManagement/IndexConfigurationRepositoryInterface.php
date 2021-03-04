<?php

declare(strict_types=1);

namespace JeroenG\Explorer\Domain\IndexManagement;

interface IndexConfigurationRepositoryInterface
{
    /**
     * @return iterable<IndexConfigurationInterface>
     */
    public function getConfigurations(): iterable;
}
