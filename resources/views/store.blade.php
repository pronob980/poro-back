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


                    <form class="form-horizontal" method="POST" action="{{ route('store.addBooks') }}">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Store Management</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" placeholder="Book title" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cat_id">Category</label>
                                <div class="col-md-4">
                                    <select id="cat_id" name="cat_id" class="form-control">
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="description" name="description" placeholder="Add your description"></textarea>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="url">Buy Link</label>
                                <div class="col-md-4">
                                    <input id="url" name="url" type="text" placeholder="Enter the buy URLl" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="review">Review</label>
                                <div class="col-md-4">
                                    <input id="review" name="review" type="text" placeholder="Enter the review (between 1 -5)" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="thumbnail_url">Thumbnail</label>
                                <div class="col-md-4">
                                    <input id="thumbnail_url" name="thumbnail_url" type="text" placeholder="Add thumbnail URL" class="form-control input-md" required="">

                                </div>
                            </div>

                        </fieldset>
                        @csrf
                        <button> Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection