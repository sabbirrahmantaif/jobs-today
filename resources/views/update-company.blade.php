<!DOCTYPE html>
<html lang="en">
<x-head-tag />
<x-header />

<body>
    <h1>Edit company</h1>
    <form action="/company/update/{{$data->id}}" method="post">
        @csrf
        <input type="text" placeholder="name" name="name" value="{{$data->name}}">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
