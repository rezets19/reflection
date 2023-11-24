<?php

namespace Reflection;

use ReflectionClass;
use ReflectionException;

class ReflectionHelper
{
    /**
     * @param object $instance
     * @param string $property
     * @param mixed $value
     * @return void
     * @throws ReflectionException
     */
    public function setProperty(object $instance, string $property, mixed $value): void
    {
        $reflectionClass = new ReflectionClass($instance);
        $reflectionProperty = $reflectionClass->getProperty($property);
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($instance, $value);
    }
}