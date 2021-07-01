<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colors</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button {
            background-color: #fff;
            color: rgb(128, 125, 125);
            border: 1px solid #ccc;
            width: 20%;
            height: 50px;
            font-size: 20px;
            border-radius: 25px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(0, 195, 255);
            color: rgb(54, 53, 53);
            transition: .3s;
        }
    </style>
</head>

<body>
    <main>

        <h2>COLORS</h2>

        <div class='container'>
            <button>Change</button>
        </div>
  
        <div>
            <ul>
                <li>
                    <a href="{{route('naming')}}">Main</a>
                </li>
                <li>
                    <a href="{{route('naming.colors')}}">Colors</a>
                </li>
                <li>
                    <a href="{{route('naming.users')}}">Users</a>
                </li>
                <li>
                    <a href="{{route('products')}}">Products</a>
                </li>
            </ul>
        </div>

    </main>

    <script>

        function randomColor() {

            return [randomNumber(), randomNumber(), randomNumber()];

        }

        function randomNumber() {

            let max = 255;
            let min = 0;

            return Math.floor(Math.random() * (max - min + 1)) + min;

        }

        function changebackgroundColor() {

            let array = randomColor();

            document.querySelector('body').style.backgroundColor = `
                rgb(${array[0]}, ${array[1]}, ${array[2]})
            `;

        }

        window.addEventListener('load', () => {

            changebackgroundColor();

        });

        document.querySelector('button').addEventListener('click', () => {

            changebackgroundColor();

        });

    </script>
</body>

</html>