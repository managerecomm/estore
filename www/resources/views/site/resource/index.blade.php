@extends('site.layouts.main')

@section('content')
    <h1>Site Resources Index View</h1>
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
        @foreach($resources as $resource)
            <tr>
                <td>{{ $resource->id }}</td>
                <td>{{ $resource->parent }}</td>
                <td>/{{ $resource->uri }}</td>
                <td>{{ $resource->name }}</td>
                <td>{{ $resource->pagetitle }}</td>
                <td>{{ $resource->published }}</td>
                <td>{{ $resource->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $resources->links() }}
@endsection