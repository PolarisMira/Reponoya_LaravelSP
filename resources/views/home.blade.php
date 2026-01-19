    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Student Portal</title>
    </head>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction:     column;
            justify-content : center;
            align-items: center;
            text-align: center;
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

        p {
            text-align: center;
            font-size: 1.25rem;
            padding: 0rem 1rem;
            width: 85%;
            font-style : italic;
        }

        #stud-btn {
            background-color: #123456;
            padding: .35rem 1rem;
            border-radius: 100px;
            color : white;
            text-decoration: none;
            margin: 2rem;
            font-size: 1.15rem
        }

    </style>

    <body>

        <x-navbar></x-navbar>
        <x-title>Student Portal</x-title>


        <p>student portal is a centralized online platform where students can access academic information, manage enrollment, view grades, and communicate with faculty and school services.</p>

        <a href="/index" id="stud-btn">Student List</a>
    </body>
    </html>
