@extends('layouts.base')

@section('body')
<div class="flex flex-col min-h-screen py-12 justify-items-center bg-gray-50" >
    @yield('content')

    @isset($slot)
    {{ $slot }}
    @endisset
</div>
@endsection