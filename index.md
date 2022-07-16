## Laravel Sieve

Create filters for eloquent models

```php

// Filter class
class IndexUsers extends Filter {
  
  function filter(Request $request, Builder $builder) {
  
    return $builder->where('name', $request->name)->where('role', $request->role);
  }
}

// in controller
User::filter(new IndexUsers)->get();

```

## Install package
```bash
composer require masoudi/laravel-sieve
```

## Generate new filter
```bash
php artisan make:filter IndexUsers
```
filters will be create at app/Http/Filters directory

## Use filterable trait in model
```php
use Masoudi\Sieve\Filterable;

class User extends Model { 
    
    use Filterable;
 }
```
## Add filter to model
```php
User::filter(new IndexUsers)->get();
```
