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
    </main>
</body>
</html>