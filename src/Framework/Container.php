<?php

declare(strict_types=1);

namespace Framework;

use ReflectionClass, ReflectionNamedType;
use Framework\Exceptions\ContainerException;


class Container
{
    private array $definitions = [];

    private array $resolved = [];

    public function addDefinitions(array $newDefinitions){
        $this->definitions = [...$this->definitions, ...$newDefinitions];

    }

    public function resolve(string $className){
        $reflectionClass = new ReflectionClass($className);

        if (!$reflectionClass->isInstantiable()) {
            throw new ContainerException("Class $className is not instantiable");
        }

        $constructor = $reflectionClass->getConstructor();
        if (!$constructor) {
            return $reflectionClass->newInstance();
        }

        $constructorParameters = $constructor->getParameters();
        if(count($constructorParameters) === 0){
            return $reflectionClass->newInstance();
        }

        $dependencies = [];
        foreach ($constructorParameters as $parameter) {
            $name = $parameter->getName();
            $type = $parameter->getType();
            if (!$type) {
                throw new ContainerException("Failed to resolve class {$className} because parameter {$name} has no type");
            }
            if(!$type instanceof ReflectionNamedType || $type->isBuiltin()){
                throw new ContainerException("Failed to resolve class {$className} because parameter {$name} is not a class");
            }

            $dependencies[] = $this->get($type->getName());
        }

        return $reflectionClass->newInstanceArgs($dependencies);

    }

    public function get (string $id){
        if(!array_key_exists($id, $this->definitions)){
            throw new ContainerException("Class {$id} does not exist in Container");
        }

        if(array_key_exists($id, $this->resolved)){
            return $this->resolved[$id];
        }
        
        $factory = $this->definitions[$id];
        $dependency = $factory();
        $this->resolved[$id] = $dependency;
        return $dependency;
    }
}