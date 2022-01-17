<!DOCTYPE html>
<html lang="en">
<x-head-tag />
<x-header />

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->title}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
