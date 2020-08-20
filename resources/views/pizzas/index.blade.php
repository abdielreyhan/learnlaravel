@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        <!-- @for($i=0; $i<count($type_pizza); $i++)
            <p> {{$type_pizza[$i]['type']}} </P>
        @endfor -->
    <!-- loop can be index(to shoq index of looping) or last(to show last looping type boolean) -->

        @foreach($type_pizza as $pizza)
            <div>
                {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
            </div>
        @endforeach

    </div>
</div>
@endsection