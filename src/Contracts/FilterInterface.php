<?php

namespace Masoudi\Sieve\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface FilterInterface
{
    /**
     * Filter query model
     * 
     * @param Illuminate\Http\Request $request
     * @param Illuminate\Database\Eloquent\Model $model
     */
    function filter(Request $request, Model $model);
}
