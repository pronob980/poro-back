@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <h1>upload pdf</h1>
                    <form method="post" action="/books/create" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Select Category</label>
                            <select name="cat_id" class="form-control">
                                <option value="" disabled> Select Category </option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->title }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Book Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter book title">
                        </div>

                        <div class="form-group">
                            <label>Book Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter book description">
                        </div>

                        <div class="form-group">
                            <label>PDF file</label>
                            <input type="file" class="form-control" name="pdf" placeholder="pdf book">
                        </div>

                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" placeholder="thumbnail">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection