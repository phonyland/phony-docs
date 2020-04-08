@foreach($attributes as $attribute)
@include('_partials._attribute_doc', [
    'language'      => $language,
    'group'         => $group, 
    'attribute'     => $attribute['name'],
    'description'   => $attribute['description'],
])
@endforeach