<?php

namespace Masoudi\Sieve;

use Illuminate\Database\Eloquent\Builder;
use Masoudi\Sieve\Support\EloquentBuilder;

trait Filterable
{
    /**
     * Begin querying the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Masoudi\Sieve\Support\EloquentBuilder
     */
    public static function query(): Builder|EloquentBuilder
    {
        return (new static)->newQuery();
    }

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query)
    {
        return new EloquentBuilder($query);
    }
}
