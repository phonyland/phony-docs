@php
    $🙃 = (new Phonyland\Phony('en'));
@endphp

```php
use Phonyland\Phony;

$🙃 = new Phony('en');

$🙃->address->city;
// "{{ $🙃->address->city }}"

$🙃->📫->city;
// "{{ $🙃->address->city }}"

$🙃->person->name;
// "{{ $🙃->person->name }}"

$🙃->🔤->lowercase_letter;
// "{{ $🙃->alphabet->lowercase_letter }}"
```