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
            <form method='POST' action="{{route('resources.store')}}">
                @csrf
                <div>
                    <h3>New Person</h3>
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name='name'>
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