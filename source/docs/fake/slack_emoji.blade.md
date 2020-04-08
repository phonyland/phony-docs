---
title: Slack Emoji
description: Slack Emoji Fake
extends: _layouts.documentation
section: content
---
@php
$🙃 = (new Phony\Phony('en'));
@endphp

@include('_partials._attribute_name_listing', [
    'language'      => 'en',
    'group'         => 'slack_emoji',
    'attributes'    => [
        'people',
        'nature',
        'food_and_drink',
        'celebration',
        'activity',
        'travel_and_place',
        'object_and_symbol',
        'custom',
        'emoji',
    ],
])

@include('_partials._attribute_listing', [
    'language'      => 'en',
    'group'         => 'slack_emoji',
    'attributes'    => [
        [
            'name'          => 'people',
            'description'   => 'Retrieves a random Slack emoji from people category.',
        ],
        [
            'name'          => 'nature',
            'description'   => 'Retrieves a random Slack emoji from nature category.',
        ],
        [
            'name'          => 'food_and_drink',
            'description'   => 'Retrieves a random Slack emoji from food and drink category.',
        ],
        [
            'name'          => 'celebration',
            'description'   => 'Retrieves a random Slack emoji from celebration category.',
        ],
        [
            'name'          => 'activity',
            'description'   => 'Retrieves a random Slack emoji from activity category.',
        ],
        [
            'name'          => 'travel_and_place',
            'description'   => 'Retrieves a random Slack emoji from travel and place category.',
        ],
        [
            'name'          => 'object_and_symbol',
            'description'   => 'Retrieves a random Slack emoji from object and symbol category.',
        ],
        [
            'name'          => 'custom',
            'description'   => 'Retrieves a random Slack emoji from custom category.',
        ],
        [
            'name'          => 'emoji',
            'description'   => 'Retrieves a random Slack emoji from emoji category.',
        ],
    ],
])
