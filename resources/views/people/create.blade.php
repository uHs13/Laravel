@extends('layouts.index')

@section('title', 'New Person')

@section('content')
        <section>
            <form method='POST' action="{{route('resources.store')}}">
                @csrf
                <div>
                    <h3>New Person</h3>
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name='name' autofocus>
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