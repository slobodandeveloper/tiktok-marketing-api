<?php

declare(strict_types=1);

namespace TikTokBusinessApi;

interface ServiceFactoryInterface
{
    /**
     * @param string $serviceName
     *
     * @return ServiceInterface
     */
    public function createService(string $serviceName): ServiceInterface;
}
