<?php

namespace Mitsuki\Attributes;

use Attribute;

/**
 * Attribute used to define a specific route for a controller action.
 * * This attribute allows you to map a URL path and HTTP methods to a method
 * within your controller classes.
 * * @author Zgenius Matondo <zgeniuscoders@gmail.com>
 * @package Mitsuki\Attributes
 */
#[Attribute(Attribute::TARGET_METHOD)]
class Route
{
    /**
     * @param string $name The unique identifier for this route (e.g., "blog_show").
     * @param string $path The URL pattern (e.g., "/post/{id}").
     * @param array|string $methods The allowed HTTP method(s) (e.g., "GET" or ["GET", "POST"]).
     */
    public function __construct(
        private string       $name,
        private string       $path,
        private array|string $methods,
    )
    {
    }

    /**
     * Gets the unique name of the route.
     * * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Gets the URL path pattern.
     * * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Sets a new URL path pattern.
     * * @param string $path
     * @return void
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * Sets a new unique name for the route.
     * * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Gets the allowed HTTP methods for this route.
     * * @return array|string
     */
    public function getMethods(): array|string
    {
        return $this->methods;
    }

    /**
     * Sets the allowed HTTP methods (e.g., "GET", ["POST", "PUT"]).
     * * @param array|string $methods
     * @return void
     */
    public function setMethods(array|string $methods): void
    {
        $this->methods = $methods;
    }
}