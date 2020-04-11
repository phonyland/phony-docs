@php
    $🙃 = (new Phony\Phony('en'));
@endphp

```php
use Phony\Phony;

$🙃 = new Phony('en');

$🙃->address->city;              // "{{ $🙃->address->city }}"

$🙃->📫->city;                   // "{{ $🙃->address->city }}"

$🙃->person->name;               // "{{ $🙃->person->name }}"

$🙃->alphabet->uppercase_letter; // "{{ $🙃->alphabet->uppercase_letter }}"

$🙃->🔤->lowercase_letter;       // "{{ $🙃->alphabet->lowercase_letter }}"
```