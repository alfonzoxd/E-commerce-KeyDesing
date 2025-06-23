@extends('layouts.app')

@section('title', 'KeyDesign - Inicio')

@section('content')
    @include('sections.video-banner')
    @include('sections.about-us')
    @include('sections.value-proposal')
    @include('sections.segmentation')
    @include('sections.customer-reviews')
    @include('partials.footer')
@endsection


