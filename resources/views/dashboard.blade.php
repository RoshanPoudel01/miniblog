@extends('layouts.app')
@include('layouts.nav')

@section('content')

     
<div class="card-body">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created By</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td style="display:flex">
                        
                        <a class="btn btn-info btn-sm mr-2"
                            href="{{route('post_edit',  $post->id) }}">
                           
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm mr-2"
                        href="{{route('post_delete',  $post->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Delete
                    </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


    

@endsection
