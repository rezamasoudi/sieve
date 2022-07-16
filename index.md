## Laravel Sieve

Create filters for your models
```php

class IndexUsers extends Filter {
  
  function filter(Request $request, Builder $builder) {
    return $builder->where('name', $request->name)->where('role', $request->role);
  }
}

// in controller
User::filter(new IndexUsers)->get();

```
