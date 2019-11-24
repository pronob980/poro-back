@extends('layouts.app')

@section('content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Stores</h1>
</div>

<div class="row justify-content-center">

    <!-- Area Chart -->
    <div class="col-md-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Create Store</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                <form class="form-horizontal" method="POST" action="{{ route('store.addBooks') }}">

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="title">Title</label>

                        <input id="title" name="title" type="text" placeholder="Book title" class="form-control input-md" required="">


                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="control-label" for="cat_id">Category</label>
                        <select id="cat_id" name="cat_id" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach

                        </select>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Add your description"></textarea>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class=" control-label" for="url">Buy Link</label>
                        <input id="url" name="url" type="text" placeholder="Enter the buy URLl" class="form-control input-md" required="">
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="review">Review</label>
                        <input id="review" name="review" type="text" placeholder="Enter the review (between 1 -5)" class="form-control input-md" required="">
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="thumbnail_url">Thumbnail</label>
                        <input id="thumbnail_url" name="thumbnail" type="file" placeholder="Add thumbnail URL" class="form-control-file input-md">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-primary"> Add</button>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection