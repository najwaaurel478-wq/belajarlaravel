@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Detail Articles</h3>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th width="25%">Title</th>
                    <th width="10px">:</th>
                    <td>{{ $articles->title }}</td>
                </tr>

                 <tr>
                    <th width="25%">Slug</th>
                    <th width="10px">:</th>
                    <td>{{ $articles->slug }}</td>
                </tr>

                 <tr>
                    <th width="25%">Content</th>
                    <th width="10px">:</th>
                    <td>{{ $articles->content }}</td>
                </tr>

                 <tr>
                    <th width="25%">Autor</th>
                    <th width="10px">:</th>
                    <td>{{ $articles->autor }}</td>
                </tr>

                 <tr>
                    <th width="25%">Category</th>
                    <th width="10px">:</th>
                    <td>{{ $articles->category_id }}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('articles.index')}}" class="btn btn-primary">Back</a>
            <a href="{{ route('articles.edit', $articles->id)}}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
@endsection