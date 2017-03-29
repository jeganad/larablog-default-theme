@extends('larablog::shared.master-layout')

@section('main')
    @include(config('larablog.layouts.header.frontend'))

    @yield('content')

    @include(config('larablog.layouts.footer.frontend'))
@stop