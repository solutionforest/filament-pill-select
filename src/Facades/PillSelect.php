<?php

namespace SolutionForest\PillSelect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SolutionForest\PillSelect\PillSelect
 */
class PillSelect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SolutionForest\PillSelect\PillSelect::class;
    }
}
