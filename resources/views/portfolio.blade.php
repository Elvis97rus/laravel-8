<!--
   For loop
   Foreach loop
   For else loop
   While loop


@forelse ($names as $name)
    <h2>Name is  {{ $name }}</h2>
@empty
    <h2>There are no names</h2>
@endforelse

@foreach ($names as $name)
    <p>{{ $name }}</p>
@endforeach

@for ($i = 0; $i < 10; $i++)
    <h2>Num is {{ $i }}</h2>
@endfor
{{$i=1}}
@while ($i < 5)
    <h2>{{$i++}}</h2>
@endwhile
    -->

<!--
    Comparing multiple possible conditions
    Multiple values that may require the same code

@switch($name)
    @case('Alice')
        <h2>Name is Alice</h2>
        @break
    @case('John')
        <h2>Name is John</h2>
        @break
    @case('Michael')
        <h2>Name is Michael</h2>
        @break
    @default
        <h2>No match found</h2>

@endswitch
-->

2:49:23
Compiling assets
