<?php

namespace Masoudi\Sieve\Contracts;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    /**
     * Filter query model
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * 
     * @return \Illuminate\Database\Eloquent\Builder
     */
    function filter(Request $request, Builder $builder);
}
