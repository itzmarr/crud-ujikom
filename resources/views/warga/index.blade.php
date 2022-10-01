@extends('layouts.master')

@section('content')
    <div class="container">
    <a class="btn btn-danger" href ="/warga/create">Add Warga</a>

        <table class="table table-dark table-striped-columns">
            <tr>
                <th>ID</th>
                <th>FNAME</th>
                <th>LNAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>AKSI</th>
            </tr>
            @foreach($warga as $w)
                <tr>

                    <td>{{$w->id}}</td>
                    <td>{{$w->fname}}</td>
                    <td>{{$w->lname}}</td>
                    <td>{{$w->username}}</td>
                    <td>{{$w->address}}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic example">

                            <a class="btn btn-danger" href="/warga/{{$w->id}}/edit">Edit</a>
                            <form action="/warga/{{$w->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-warning"type="submit" value="Delete">
                            </form>
                    </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection