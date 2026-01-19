<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Profile</title>
    <style>

        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0rem 2.5rem;
            width: 100%;
            box-shadow: 5px 5px 15px #a7a7a7;
        }

        ul {
            display: flex;
            gap: 2rem;
        }

        li {
            list-style-type: none
        }



        h1 {
            margin: 5rem;
            margin-bottom: 2rem;
            text-align : center;
            font-size: 3.5rem
        }

        #btn-list {
            background-color: #123456;
            padding: .35rem 1rem;
            border-radius: 100px;
            color : white;
            text-decoration: none;
            margin: 2rem;
            font-size: 1.15rem
        }

        .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: .2rem .5rem;
            border-bottom: 1px solid black;
        }

        .info p {
            font-size: 1.25rem;
        }


        .container {
            margin: 2rem 2rem;
            width: 45%;
        }
    </style>
</head>

<body>

    <x-navbar></x-navbar>
    <x-title>Student Profile</x-title>

    {{-- Static Way Before --}}
    {{-- <div class="container">
        <div class="info info-1">
            <h3>Name :</h3>
            <p>{{ $student['name'] }}</p>
        </div>

        <div class="info">
            <h3>Email :</h3>
            <p>{{ $student['email'] }}</p>
        </div>

        <div class="info">
            <h3>Course :</h3>
            <p>{{ $student['course'] }}</p>
        </div>

        <div class="info">
            <h3>Year-Level :</h3>
            <p>{{ $student['year'] }}</p>
        </div>
    </div> --}}

    {{-- Component Way Now --}}
    <x-view :student="$student" />

    <a href="/index" id="btn-list">
        Student List
    </a>

</body>

</html>
