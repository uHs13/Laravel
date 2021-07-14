@extends('layouts.index')

@section('title', 'Countries')

@section('content')
    <h2>Countries</h2>
    <div>
        <ul>
            <li>Belgium</li>
            <li>Croatia</li>
            <li>Denmark</li>
            <li>Estonia</li>
            <li>Finland</li>
        </ul>
    </div>

    <x-alert title='Error' class='info'>
        <p>An unexpected error has ocurred trying to process your request</p>
    </x-alert>

    <x-alert title='Error' class='success'>
        <p>An unexpected error has ocurred trying to process your request</p>
    </x-alert>

    <x-alert title='Error' class='error'>
        <p>An unexpected error has ocurred trying to process your request</p>
    </x-alert>

    <x-alert title='Error' class='warning'>
        <p>An unexpected error has ocurred trying to process your request</p>
    </x-alert>

@stop
