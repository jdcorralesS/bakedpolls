<?php

Blade::extend(function($value){
    return preg_replace('/(\s*)@assign\((\s*.*), (\s*.*)\)/', '$1<?php $2= $3; ?>$4', $value);
});

Blade::extend(function($value){
    return preg_replace('/(\s*)@print\((\s*.*)\)/', '$1<?php print_r($2)$3; ?>$4', $value);
});

Blade::extend(function($value){
    return preg_replace('/(\s*)@php\((\s*.*)(\s*)\)/', '$1<?php $2; $3?>', $value);
});