@extends('layouts.index')

@section('title', 'Options')

@section('content')
    <h2>Options</h2>
    <div class='options'>
        <ul>
            <li><a class="warning {{$option == 1 ? 'selected' : ''}}" href="{{ route('options', 1) }}">Warning</a></li>
            <li><a class="info {{$option == 2 ? 'selected' : ''}}" href="{{ route('options', 2) }}">Info</a></li>
            <li><a class="success {{$option == 3 ? 'selected' : ''}}" href="{{ route('options', 3) }}">Success</a></li>
            <li><a class="error {{$option == 4 ? 'selected' : ''}}" href="{{ route('options', 4) }}">Error</a></li>
        </ul>
    </div>

    @if ($option)

        @switch($option)
            @case(1)

                <x-alert title='Error' class='warning'>
                    <p>An unexpected error has ocurred trying to process your request</p>
                </x-alert>

            @break

            @case(2)

                <x-alert title='Error' class='info'>
                    <p>An unexpected error has ocurred trying to process your request</p>
                </x-alert>

            @break

            @case(3)

                <x-alert title='Error' class='success'>
                    <p>An unexpected error has ocurred trying to process your request</p>
                </x-alert>

            @break

            @case(4)

                <x-alert title='Error' class='error'>
                    <p>An unexpected error has ocurred trying to process your request</p>
                </x-alert>

            @break

        @endswitch

    @endif

@stop
