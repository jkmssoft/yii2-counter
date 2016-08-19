<?php
$time = time();

return [
    'counter' => [
        'name'          => 'counter',
        'counter'       => 1,
        'visible'       => \tests\codeception\fixtures\CounterFixture::VISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time,
    ],
    'decrease' => [
        'name'          => 'decrease',
        'counter'       => 10,
        'visible'       => \tests\codeception\fixtures\CounterFixture::VISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time,
    ],
    'negative_counter' => [
        'name'          => 'negative_counter',
        'counter'       => -9999,
        'visible'       => \tests\codeception\fixtures\CounterFixture::INVISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time+1,
    ],
    'invisible_counter' => [
        'name'          => 'invisible_counter',
        'counter'       => 2,
        'visible'       => \tests\codeception\fixtures\CounterFixture::INVISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time,
    ],
    'visible_counter' => [
        'name'          => 'visible_counter',
        'counter'       => 9999,
        'visible'       => \tests\codeception\fixtures\CounterFixture::VISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time+1,
    ],
    'todelete' => [
        'name'          => 'todelete',
        'counter'       => 1,
        'visible'       => \tests\codeception\fixtures\CounterFixture::VISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time+1,
    ],
    'exists' => [
        'name'          => 'exists',
        'counter'       => 5,
        'visible'       => \tests\codeception\fixtures\CounterFixture::VISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time+1,
    ],
    'invisible_to_visible_counter' => [
        'name'          => 'invisible_to_visible_counter',
        'counter'       => 5,
        'visible'       => \tests\codeception\fixtures\CounterFixture::INVISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time+1,
    ],
    'visible_to_invisible_counter' => [
        'name'          => 'visible_to_invisible_counter',
        'counter'       => 5,
        'visible'       => \tests\codeception\fixtures\CounterFixture::VISIBLE,
        'created_at'    => $time,
        'updated_at'    => $time+1,
    ],
];
