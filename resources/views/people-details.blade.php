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
    </main>
</body>
</html>