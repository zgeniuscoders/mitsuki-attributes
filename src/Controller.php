<?php

namespace Mitsuki\Attributes;

/**
 * Attribute used to define a base URI prefix for all routes within a controller class.
 * * @author Zgenius Matondo <zgeniuscoders@gmail.com>
 * @package Mitsuki\Attributes
 */
#[\Attribute] class Controller
{
    public function __construct(
        private string $baseUri
    )
    {
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function setBaseUri(string $baseUri): void
    {
        $this->baseUri = $baseUri;
    }
}