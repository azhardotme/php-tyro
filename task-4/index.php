<?php

$students = [
    [
        'name' => 'Masud Rana',
        'age' => 20,
        'email' => 'masud.rana@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Dhaka'
        ]
    ],
    [
        'name' => 'Faisal Ahmed',
        'age' => 18,
        'email' => 'faisal.ahmed@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Cumilla'
        ]
    ],
    [
        'name' => 'Sakibul Alom',
        'age' => 20,
        'email' => 'sakibul.alom@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Mymensingh'
        ]
    ],
    [
        'name' => 'Mirza Rafi',
        'age' => 21,
        'email' => 'mirza.rafi@gmail.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Dhaka'
        ]
    ]
];

foreach($students as $student)
{
    foreach($student as $key => $val)
    {
        if(is_array($val) && $key == 'address')
        {
            foreach($val as $key => $val1 )
            {
                if($key == 'district' && $val1 == 'Dhaka')
                {
                    echo $student["name"] . "<br>";
                }
            }
        }
    }
}