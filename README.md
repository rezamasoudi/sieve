# Laravel Sieve

The Sieve is a Laravel framework package to create query filters much more easy and clean.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/masoudi/laravel-sieve.svg?style=flat-square)](https://packagist.org/packages/masoudi/laravel-sieve)
[![Total Downloads](https://img.shields.io/packagist/dt/masoudi/laravel-sieve.svg?style=flat-square)](https://packagist.org/packages/masoudi/laravel-sieve)

### How to use

- [Install package](#install)
- [Create a filter](#create-a-filter)
- [Add Filterable trait to model](#add-filterable-trait-to-model)
- [Add filters to model](#add-filters-to-model)

## Install

install package with [Composer](https://getcomposer.org/)

```shell
composer require masoudi/laravel-sieve
```

## Create A filter

Create a new filter by running the following artisan command

```shell
php artisan make:filter IndexPostsFilter
```

Filter will be create at <font color="#EC407A">app/Http/Filters</font> path.

```php
use Masoudi\Sieve\Filter;

class IndexPostsFilter extends Filter
{
    /**
     * Apply conditions on model
     *
     * @param Illuminate\Http\Request $request;
     * @param Illuminate\Database\Eloquent\Model $model;
     */
    public function filter(Request $request, Model $model)
    {
       return $model->where("is_active", true)
                    ->where('published', true)
                    ->whereHas('comments', function($query){
                        $query->where('slug', '=', $request->slug);
                    });
    }
}
```

## Add Filterable trait to model

Use `Filterable` trait at model;

```php
use Masoudi\Sieve\Filterable;

class Post extends Model { 
    
    use Filterable;
 }
```

## Add filters to model

```php
Post::filter(new IndexPostsFilter)->get();
```
