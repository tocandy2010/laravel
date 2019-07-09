@extends('layout.master')
    @section('head')
        <style>
            .fail {
                color: red;
            }
            .blue {
                color: blue;
            }
        </style>
    @endsection
    @section('content')
        <h1>Home Index</h1>
        <p>Hello! @{{ $userName }}</p>
        <h1></h1>
            <ul>
                    @foreach($scoreList as $k=>$v)
                        {{-- @if($v<=50)
                            <li style='color:red'>{{$v}}</li>
                        @else
                            <li>{{$v}}</li>
                        @endif --}}
                        {{-- <li style={{$v<=59?'color:red':''}}>{{$v}}</li> --}}
                        <li class="{{$v<=100?'fail':''}} {{$v<=90?'blue':''}}">{{$v}}</li>
                    @endforeach
            </ul>

            <select name="city" id="city">
                <option value="2" {{$cityId==2?'selected':''}}>台北</option>
                <option value="4" {{$cityId==4?'selected':''}}>台中</option>
                <option value="6"{{$cityId==6?'selected':''}}>台南</option>
            </select>   
        @endsection('content')
