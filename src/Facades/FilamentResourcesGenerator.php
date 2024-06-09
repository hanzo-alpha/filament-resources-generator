<?php

namespace HanzoAlpha\FilamentResourcesGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HanzoAlpha\FilamentResourcesGenerator\FilamentResourcesGenerator
 */
class FilamentResourcesGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HanzoAlpha\FilamentResourcesGenerator\FilamentResourcesGenerator::class;
    }
}
