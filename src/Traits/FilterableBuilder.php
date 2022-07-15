<?php

namespace Masoudi\Sieve\Traits;

use Carbon\Exceptions\InvalidTypeException;
use Illuminate\Database\Eloquent\Builder;
use Masoudi\Sieve\Filter;

trait FilterableBuilder
{
    /**
     * Add filter to model
     * 
     * @param Masoudi\Sieve\Filter $filter
     */
    public function filter(Filter $filter)
    {
        $request = request();
        $query = $filter->filter($request, $this->model);

        if (!$query instanceof Builder) {
            throw new InvalidTypeException("The filters class should return builder");
        }

        return $query;
    }
}
