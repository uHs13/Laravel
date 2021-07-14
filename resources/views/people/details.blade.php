@extends('layouts.index')

@section('title', 'Show Person')

@section('content')
        <section>
            <div>
                <label for="id">Id</label>
                <input type="text" id='id' value="{{$person['id']}}" readonly>
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" id='name' value="{{$person['name']}}" readonly>
            </div>
            <div>
                <a href="{{route('resources.index')}}">Back</a>
            </div>
        </section>
@stop