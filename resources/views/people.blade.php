<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People</title>
</head>
<body>
    <main>

        <div>
            <div>
                <h2>Person List</h2>
                <a href="{{route('resources.create')}}">Add</a>
            </div>
            <div>
                <ul>

                    @foreach ($people as $person)
                        <li>
                            <div>Id: {{$person['id']}}</div>
                            <div>Name: {{$person['name']}}</div>
                            <div>
                                <a href="{{route('resources.edit', $person['id'])}}">Edit</a>
                                <a href="{{route('resources.show', $person['id'])}}">Details</a>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </main>
</body>
</html>