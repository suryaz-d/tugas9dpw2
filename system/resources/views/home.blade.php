@extends('template.induk')

@section('slider')
    @include('template.minics.slider')
@endsection('slider')

@section('content')
    @include('template.minics.product')
    @include('template.minics.about')
    @include('template.minics.whyus')
    @include('template.minics.testimonial')
@endsection('content')
