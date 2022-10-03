@extends('layout')

@section('title', 'Main page')



@section('content')
    <h1>{{ $header }}</h1>
@endsection


@section('breadcrumbs')
    @include('particials.breadcrumbs', [
        'links'=> [
            [
                'link' => '/',
                'name' => 'Home'
            ], [
                'link' => '/categories',
                'name' => 'Category List'
            ], [
                'link' => '/tags',
                'name' => 'Tag List'
            ]
        ]
    ])
@endsection
