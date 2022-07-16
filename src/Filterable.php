<?php

namespace Masoudi\Sieve;

use Illuminate\Database\Eloquent\Builder;
use Masoudi\Sieve\Support\BuilderDecorator;

trait Filterable
{
    /**
     * Begin querying the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Masoudi\Sieve\Support\BuilderDecorator
     */
    public static function query(): Builder|BuilderDecorator
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
        return new BuilderDecorator($query);
    }
}
