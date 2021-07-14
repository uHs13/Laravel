@extends('layouts.index')

@section('title', 'Person List')

@section('content')
<div>
    <div>
        <h2>Person List</h2>
        <a href="{{ route('resources.create') }}">Add</a>
    </div>
    @if (count($people) > 0)
        <div>
            <ul>
                @foreach ($people as $person)
                    <li>
                        <div>Id: {{ $person['id'] }}</div>
                        <div>Name: {{ $person['name'] }}</div>
                        <div>
                            <a href="{{ route('resources.edit', $person['id']) }}">Edit</a>
                            <a href="{{ route('resources.show', $person['id']) }}">Details</a>
                            <form method="POST" action="{{ route('resources.destroy', $person['id']) }}">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    @else

        <div>
            <p style="color: rgb(146, 143, 143)">Add a person</p>
        </div>

    @endif
</div>

@stop