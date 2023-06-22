<?php

namespace FastofiCorp\FilamentDiagrams\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FastofiCorp\FilamentDiagrams\FilamentDiagrams
 */
class FilamentDiagrams extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \FastofiCorp\FilamentDiagrams\FilamentDiagrams::class;
    }
}
