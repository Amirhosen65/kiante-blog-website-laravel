@extends('layouts.dashboard_master')

@section('content')

<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Blog Edit</h2>
       </div>
    </div>
 </div>

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <form method="POST" action="{{ route('blog.edit.update',$blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 form-group">
                      <label class="form-label"><h4>Blog Title</h4></label>
                      <input type="text" class="form-control @error('title') is-invalid
                      @enderror" name="title" value="{{ $blog->title }}">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label class="form-label"><h4>Blog Description</h4></label>
                      <textarea id="summernote2" name="description" class="form-control @error('description') is-invalid @enderror" rows="30">{{ $blog->description }}</textarea>
                      @error('description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label"><h4>Blog Tags</h4></label>
                        <div>
                            @foreach ($tags as $tag)
                                <div class="form-check form-check-inline">

                                    <input class="form-check-input tag-checkbox" type="checkbox" name="tag_ids[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}"
                                    @foreach ($blog->ManyRelationTags as $s_tag)
                                    @if ($s_tag->id == $tag->id)
                                    checked
                                    @endif
                                    @endforeach
                                    >
                                    <label class="form-check-label" for="tag_{{ $tag->id }}">{{ $tag->title }}</label>

                                </div>
                            @endforeach
                        </div>
                        <a class="mt-2" href="{{ route('tag') }}">Create New Category</a>

                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label class="form-label"><h4>Category</h4></label>

                        <select required name="category_id" class="form-select @error('category') is-invalid @enderror" aria-label="Default select example">
                            <option>Select Category</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if ($blog->category_id==$category->id)
                                    selected
                                    @endif
                                    >{{ $category->title }}</option>
                            @endforeach
                          </select>
                          <br>
                          <a class="mt-2" href="{{ route('category') }}">Create New Category</a>

                          @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label class="form-label"><h4>Image</h4></label><br>
                        <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" class="img-thumbnail" style="height: 150px; width: auto">

                        <input type="file" class="form-control-file mt-2" name="image">

                      </div>

                      <div class="form-group col-md-6 col-sm-12">
                        <label class="form-label"><h4>Submit Date</h4></label>
                        <input type="date" class="form-control" name="date" value="{{ $blog->date }}">

                      </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer_script')

<script>

$(document).ready(function() {
  $('#summernote2').summernote();
});


</script>



@endsection
