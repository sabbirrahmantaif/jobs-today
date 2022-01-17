<!DOCTYPE html>
<html lang="en">
<x-head-tag />
<x-header />
<body>
    <h1>Categories</h1>
    <small>Total categories {{count($categories)}}</small>
    <ul>
        @foreach ($categories as $category)
            <li><a href="/quiz/{{$category->id}}">{{$category->category}}</a></li>
        @endforeach
    </ul>
</body>
</html>
