@extends('layouts.app')





@section('content')

    {{--<div class="container">--}}

        {{--<div class="content">--}}

            {{--<div class="title">Contact Page Coming Soon...</div>--}}

        {{--</div>--}}

    {{--</div>--}}

    <div class="container">

        @if (count($people))

            <ul class="content">

                @foreach($people as $person)

                    <li class="title">{{$person}}</li>

                @endforeach

            </ul>
        @endif

    </div>

@endsection
