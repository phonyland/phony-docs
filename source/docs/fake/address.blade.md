---
title: Address
description: Address Fak.e,
extends: _layouts.documentation
section: content
---
@php
$🙃 = (new Phony\Phony('en'));
@endphp

@include('_partials._attribute_name_listing', [
    'language'      => 'en',
    'group'         => 'address',
    'attributes'    => [
        'city',
        'city_with_state',
        'street_name',
        'secondary_address',
        'street_address',
        'street_address_with_secondary_address',
        'building_number',
        'community',
        'mail_box',
        'zip_code',
        'zip',
        'postcode',
        'time_zone',
        'street_suffix',
        'city_suffix',
        'city_prefix',
        'state_abbreviation',
        'state',
        'country',
        'country_code',
        'country_code_long',
        'full_address',
        'default_country',
    ],
])

@include('_partials._attribute_listing', [
    'language'      => 'en',
    'group'         => 'address',
    'attributes'    => [
        [
            'name'          => 'city',
            'description'   => 'Retrieves a random city.',
        ],
        [
            'name'          => 'city_with_state',
            'description'   => 'Retrieves a random city with state.',
        ],
        [
            'name'          => 'street_name',
            'description'   => 'Retrieves a random street name.',
        ],
        [
            'name'          => 'secondary_address',
            'description'   => 'Retrieves a random secondary_address.',
        ],
        [
            'name'          => 'street_address',
            'description'   => 'Retrieves a random street address.',
        ],
        [
            'name'          => 'street_address_with_secondary_address',
            'description'   => 'Retrieves a random street address with secondary address.',
        ],
        [
            'name'          => 'building_number',
            'description'   => 'Retrieves a random building number.',
        ],
        [
            'name'          => 'community',
            'description'   => 'Retrieves a random community.',
        ],
        [
            'name'          => 'mail_box',
            'description'   => 'Retrieves a random mail box.',
        ],
        [
            'name'          => 'zip_code',
            'description'   => 'Retrieves a random zip code.',
        ],
        [
            'name'          => 'zip',
            'description'   => 'Retrieves a random zip.',
        ],
        [
            'name'          => 'postcode',
            'description'   => 'Retrieves a random postcode.',
        ],
        [
            'name'          => 'time_zone',
            'description'   => 'Retrieves a random time zone.',
        ],
        [
            'name'          => 'street_suffix',
            'description'   => 'Retrieves a random street suffix.',
        ],
        [
            'name'          => 'city_suffix',
            'description'   => 'Retrieves a random city suffix.',
        ],
        [
            'name'          => 'city_prefix',
            'description'   => 'Retrieves a random city prefix.',
        ],
        [
            'name'          => 'state_abbreviation',
            'description'   => 'Retrieves a random state abbreviation.',
        ],
        [
            'name'          => 'state',
            'description'   => 'Retrieves a random state.',
        ],
        [
            'name'          => 'country',
            'description'   => 'Retrieves a random country.',
        ],
        [
            'name'          => 'country_code',
            'description'   => 'Retrieves a random country code.',
        ],
        [
            'name'          => 'country_code_long',
            'description'   => 'Retrieves a random long country code.',
        ],
    ],
])