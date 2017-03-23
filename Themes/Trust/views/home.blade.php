@extends('layouts.master')

@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop
@section('styles')
    <style>
        .background-splash{background-image:url('../assets/media/background-home.jpg');}
        .background-vertical-3{background-image:url('../assets/media/background-vertical-1.jpg');}
    </style>
@stop
@section('content')
    {!! Block::get('home') !!}
    {!! Block::get('services') !!}
    {!! Block::get('intro') !!}
    {!! Block::get('events') !!}
    {!! Block::get('contact') !!}




@stop
