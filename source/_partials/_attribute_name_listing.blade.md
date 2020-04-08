# {{ ucwords($group) }}

```php

@foreach($attributes as $attribute)
$🙃->{{ $group }}->{{ $attribute }}; // @php echo $🙃->$group->$attribute;  @endphp    

@endforeach
```