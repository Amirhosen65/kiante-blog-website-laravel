@extends('layouts.dashboard_master')

@section('content')

<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Add New Blog </h2>
       </div>
    </div>
 </div>

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                  <form method="POST" action="{{ route('blog.insert') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h4>Blog Title</h4>

                      <input type="text" class="form-control @error('title') is-invalid
                      @enderror" name="title">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <h4>Blog Description</h4>

                        {{-- <textarea name="description" class="form-control" id="summernote" cols="30" rows="10"></textarea> --}}
                        <textarea id="summernote" name="description" class="form-control @error('description') is-invalid @enderror" rows="6"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <h4>Tags</h4>

                        @foreach ($tags as $tag)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input tag-checkbox" type="checkbox" name="tag_ids[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}">
                                    <label class="form-check-label" for="tag_{{ $tag->id }}">{{ $tag->title }}</label>
                                </div>
                            @endforeach
                            <br><a class="mt-2" href="{{ route('tag') }}">Create New Tag</a>
                      </div>

                      <div class="form-group col-md-6 col-sm-12">
                        <h4>Select Category </h4>
                        <select name="category_id" class="custom-select @error('category') is-invalid @enderror" aria-label="Default select example">
                            <option>Select Category</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                          </select>
                          @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <br><a class="mt-2" href="{{ route('category') }}">Create New Tag</a>
                      </div>

                      <div class="form-group col-md-6 col-sm-12">
                        <h4>Image</h4>
                        <input type="file" class="form-control-file @error('image') is-invalid
                        @enderror" name="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group col-md-6 col-sm-12">
                        <label class="form-label"><h4>Submit Date</h4></label>
                        <input type="date" class="form-control" name="date" value="">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section('footer_script')


<script>
    $(document).ready(function () {
       $('#summernote').summernote({
          height: 300,

       });
    });
 </script>


@endsection
