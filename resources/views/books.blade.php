@extends('layouts.app')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Books</h1>
</div>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="row justify-content-center">

    <!-- Area Chart -->
    <div class="col-md-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Create Book</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

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
                        <label>Book Author</label>
                        <input type="text" class="form-control" name="author" placeholder="Enter book author name">
                    </div>

                    <div class="form-group">
                        <label>PDF file</label>
                        <input type="file" class="form-control-file" name="pdf" placeholder="pdf book">
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" class="form-control-file" name="thumbnail" placeholder="thumbnail">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>
                                    <a href="/books/delete/{{ $book->id }}">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection