<?php
namespace Masoudi\Sieve\Support;

use Illuminate\Database\Eloquent\Builder;
use Masoudi\Sieve\Traits\FilterableBuilder;

class EloquentBuilder extends Builder {
    use FilterableBuilder;
}