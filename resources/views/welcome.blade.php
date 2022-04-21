@extends('master')

@section('content')
{{--    {{ HTML::image('images/banner.png') }}--}}

    <img src="{{  URL::asset('images/banner.png') }}" width="100%">
@endsection
