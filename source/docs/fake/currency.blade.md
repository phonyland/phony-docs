---
title: Currency
description: Currency Fake
extends: _layouts.documentation
section: content
---
@php
$🙃 = (new Phony\Phony('en'));
@endphp

@include('_partials._attribute_name_listing', [
    'language'      => 'en',
    'group'         => 'currency',
    'attributes'    => ['name', 'code', 'symbol'],
])

@include('_partials._attribute_listing', [
    'language'      => 'en',
    'group'         => 'currency',
    'attributes'    => [
        [
            'name'          => 'name',
            'description'   => 'Retrieves a random currency name.',
        ],
        [
            'name'          => 'code',
            'description'   => 'Retrieves a random currency code.',
        ],
        [
            'name'          => 'symbol',
            'description'   => 'Retrieves a random currency symbol.',
        ],
    ],
])

