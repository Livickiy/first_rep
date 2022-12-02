<!DOCTYPE html>
<html>
<head>
<tittle>My view</title>
<link rel="stylesheet" type="text/css" href="/public/style.css">
<link href="https://https://www.youtube.com/" rel="stylesheet">

</head>
<body>
<div class="yb">
<li class="nav-item">
<a class="nav-link" href="{{ $href }}">{{ $text }}</a>
<div class="btn">
<p class ="{{ $vasya['name'] }}">Вася</p>
<p style="{{ $vasya['age'] }}">18</p>
<input value="{{ $vasya['salary'] }}">
<p>{{$location ['country'] ?? "Россия"}}</p>
<p>{{$location ['city'] ?? "Москва"}}</p>
<p>{{date("d.m.Y")}}</p>
<p class>{{count($vasya)}}</p>
<p>{!!$str!!}</p>
@php
$str=6;
@endphp
<p>{!!$str!!}</p>
@if ($week>= 6 and 7)
выходной день
 @else
 рабочий день
 @endif
<br>

@if ($seasons > 12)
	вы на другой планете
@elseif ($seasons == 12 and 1 and 2)
	cейчас зима
@elseif ( $seasons == 3 and 4 and 5)
    сейчас весна
@elseif ( $seasons == 6 and 7 and 8)
    сейчас лето
@elseif ( $seasons == 8 and 9 and 10)
    сейчас осень
@endif
<br>
@if ($age <= 18)
    вы несовершеннолетний
@elseif ( $age >=18 )
    вы совершеннолетний
@endunless
<br>
@if (count($vasya) >= 1)
    $vasya[0]+$vasya[1]+$vasya[2]
@else
	в массиве нет записей
@endif


</div>
</div>
</body>