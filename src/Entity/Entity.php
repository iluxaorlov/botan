<?php

namespace Botan\Entity;

use ReflectionClass;
use ReflectionException;

abstract class Entity
{
    /**
     * @param array $data
     *
     * @throws ReflectionException
     */
    public function __construct(array $data)
    {
        $reflection = new ReflectionClass($this);

        foreach ($data as $field => $value) {
            $field = $this->normalize($field);

            if (!property_exists($this, $field)) {
                continue;
            }

            $property = $reflection->getProperty($field);
            $type = $property->getType()->getName();

            if (class_exists($type)) {
                $this->$field = new $type($value);
            } else {
                $this->$field = $value;
            }
        }
    }

    /**
     * @param string $property
     *
     * @return string
     */
    private function normalize(string $property): string
    {
        $property = preg_replace('/.+_id/', 'id', $property);

        return str_replace('_', '', lcfirst(ucwords($property, '_')));
    }
}