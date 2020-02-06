@extends('admin.layouts.main')

@section('content')
    <h1>Admin Category Index View</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Parent</th>
                <th>URI</th>
                <th>Name</th>
                <th>Pagetitle</th>
                <th>Published</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->parent }}</td>
                    <td>/{{ $category->uri }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->pagetitle }}</td>
                    <td>{{ $category->published }}</td>
                    <td>{{ $category->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection