@extends('layouts.index')

@section('title', 'Edit Person')

@section('content')
        <section>
            <form action="{{route('resources.update', $person['id'])}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <h3>Edit Person</h3>
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name='name' value="{{$person['name']}}">
                </div>
                <div>
                    <button>Save</button>
                </div>
                <div>
                    <a href="{{route('resources.index')}}">Back</a>
                </div>
            </form>
        </section>
@stop