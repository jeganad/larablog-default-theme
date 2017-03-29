@extends('larablog::shared.master-layout')

@section('main')
    @include(config('larablog.layouts.header.backend'))

    @yield('content')

    @include(config('larablog.layouts.footer.backend'))
@stop
