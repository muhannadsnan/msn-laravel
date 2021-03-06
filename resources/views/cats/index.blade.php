@extends('layout.master')

@section('title', 'Category - all')

@section('content')
    {{session('message') ?? ''}}

    <h1>ALL CATEGORIES ({{ sizeof($data) }} found)</h1>

    <div class="create-cat">
        <form action="/cats" method="POST">
            @csrf
            <label for="cat-title">Category title:</label>
            <input type="text" name="title" id="cat-title" placeholder="Enter a title for category..">
            <button type="submit">Save</button>
        </form>
    </div>

    <br><br>

    @if(sizeof($data) == 0)
        <h4>No categories.</h4>
    @else
        @foreach($data as $cat)
            <div class="cat">
                
                <form action="/cats/{{$cat->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    ({{$cat->id}}) {{$cat->title}} <small>{{$cat->updated_at}}</small>
                    <button type="submit">Delete</button>

                    <form action="/cats/{{$cat->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title" placeholder="Change title...">
                        <button type="submit">Update</button>
                    </form>
                </form>

            </div>
            <hr>
        @endforeach
    @endif
@stop

@section('style')
    body{background: #ccc;}
@stop

@section('script')
    console.log('this is script')
@stop
