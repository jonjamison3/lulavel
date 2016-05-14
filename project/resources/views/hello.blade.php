@extends('layouts.welcome')
@section('content')

  @if(isset($data['lastName']))
    {{{$data['lastName']}}}
  @else
    No last name set, Dawg
  @endif
  @foreach($data as $item)
    <li>{{{$item}}}</li>
  @endforeach
@stop
