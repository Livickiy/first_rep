<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Page extends Controller 
{ 
public function showOne3()
{ 
$mass=[0,1,2];
$summ=0;
echo array_sum($mass);
return view('test.show', [
    'vasya'=>['name' => 'btn', 'age' => '18', 'salary' => '300'], 
    'text' => 'youtube', 
    'href' => 'https://omacademiya.ru',
    'location'=>['country' => 'Poland', 'city' => 'Wroclaw' ],
    'str'=>' <b> pop</b>',
    'week'=> '6',
    'seasons'=>'13',
    "age"=>'27',
    
]
); 
} }
