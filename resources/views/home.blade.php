@extends('layouts.app')

@include('layouts.nav')

@section('content')

     
<div class="card-body">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
             
                <th>Title</th>
                <th>Body</th>
                <th>Created By</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                   
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->user->name }}</td>
                </tr>
            @endforeach
        
        </tbody>
    </table>
    {{$posts->links()}}
</div>


    

@endsection
