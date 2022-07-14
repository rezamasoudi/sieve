<?php

namespace Masoudi\Sieve\Traits;

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
        return $filter->filter($request, $this->model);
    }
}
