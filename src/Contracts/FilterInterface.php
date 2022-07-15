<?php

namespace Masoudi\Sieve\Contracts;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;

interface FilterInterface
{
    /**
     * Filter query model
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Database\Query\Builder $builder
     * 
     * @return \Illuminate\Database\Query\Builder
     */
    function filter(Request $request, Builder $builder);
}
