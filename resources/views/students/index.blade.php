<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <style>



        body {
            padding: 0rem 2rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-items: center;
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

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            text-align: center;
            background-color: #fff1f1;
        }

        tr {
            background-color: #fff1f1;
        }

        tr:nth-child(even) {
            background-color: #f1fbff;
        }

        .action {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }

        .action a {
            padding: .25rem 1rem;
            border-radius: 5px;
            color: rgb(7, 7, 7);
            font-weight: 600;
            border: .15px solid black;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.205);
            cursor: pointer;
            text-decoration: none;
            font-size: .9rem;
        }

        .view {
            background-color: rgba(255, 207, 207, 0.781);
        }

        .edit {
            background-color: rgba(211, 235, 255, 0.781);

        }

        #add {
            background-color: #123456;
            padding: .35rem 1rem;
            border-radius: 100px;
            color : white;
            text-decoration: none;
            margin: 5rem;
            font-size: 1.15rem;
            text-align: center;
            width: 20%;
        }

    </style>


</head>
<body>

<x-navbar></x-navbar>
<x-title>Student List</x-title>

<table>
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Year Level</th>
        <th>Action</th>
    </tr>
        @foreach ($samples as $sample)
        <tr>
            <td>{{$sample['name']}}</td>
            <td>{{$sample['course']}}</td>
            <td style="text-align: center">{{$sample['year']}}</td>
            <td class="action">
                <a class="view" href="/show/student/{{ $sample['id'] }}">View</a>
                <a class="edit" href="/edit/{{ $sample['id'] }}">Edit</a>
            </td>
        </tr>
        @endforeach
</table>

<a id="add" href="/add">
    Add Student
</a>

</body>
</html>
