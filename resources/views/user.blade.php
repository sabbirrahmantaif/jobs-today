<!DOCTYPE html>
<html lang="en">
<x-head-tag />
<x-header />

<body>
    <h1>Users with image</h1>
    @if (session('res'))
        <small>{{ session('res') }}</small>
    @endif
    <form action="/user" method="post" enctype="multipart/form-data">
        @csrf
        <input placeholder="name" type="text" name="name" id="name">
        <input placeholder="email" type="email" name="email" id="">
        <input placeholder="phone" type="number" name="phone" id="">
        <input placeholder="password" type="password" name="password" id="">
        <input type="file" name="image" id="">
        <button type="submit">Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>image</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peoples as $people)
            <tr>
                <td>{{$people->id}}</td>
                <td><img src="{{Storage::url($people->image)}}" alt=""></td>
                <td>{{$people->name}}</td>
                <td>{{$people->phone}}</td>
                <td>{{$people->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
