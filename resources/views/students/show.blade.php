<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Profile</title>
    <style>

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        h1 {
            margin: 5rem;
            margin-bottom: 2rem;
            text-align : center;
            font-size: 3.5rem
        }

        a {
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

    <h1>Student Profile</h1>

    <div class="container">
        <div class="info info-1"><h3>Name : </h3> <p>Alice</p></div>
        <div class="info"><h3>Email : </h3> <p>alice@gmail.com</p></div>
        <div class="info"><h3>Course : </h3> <p>BSCS</p></div>
        <div class="info"><h3>Year-Level : </h3> <p>2</p></div>
    </div>
    <a href="/index">
        Student List
    </a>

</body>

</html>
