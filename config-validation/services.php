<?php

use AshAllenDesign\ConfigValidator\Services\Rule;

return [
    Rule::make('twitter.consumer_key')->rules(['string']),
    Rule::make('twitter.consumer_secret')->rules(['string']),
    Rule::make('twitter.access_token')->rules(['string']),
    Rule::make('twitter.access_token_secret')->rules(['string']),
];
