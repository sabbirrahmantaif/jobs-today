<!DOCTYPE html>
<html lang="en">

    <x-head-tag />
    <x-header />
<body>
    <h1>Company</h1>
    @if (session('res'))
        <small>{{ session('res') }}</small>
    @endif
    <form action="/company" method="post">
        @csrf
        <input type="text" placeholder="name" name="name">
        @error('name')
            <br><small>{{$message}}</small><br>
        @enderror
        <button type="submit">Add</button>
    </form>
    <h2>Company list</h2>
    <ul>
        @foreach ($companies as $company)
            <li>{{$company->name}} <a href="/company/edit/{{$company->id}}"><button>update</button></a> <a href="/company/delete/{{$company->id}}"><button>delete</button></a></li>
        @endforeach
    </ul>
</body>

</html>
