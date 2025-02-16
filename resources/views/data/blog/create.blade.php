@extends('layouts.main')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/dropzone/src/dropzone.css') }}">
<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Tambah Data Blog</h4>
        </div>
    </div>
    <form action="{{ route('data_blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Date</label>
            <input class="form-control date-picker" type="date" name="date" value="{{ old('date') }}" required>
            @error('date')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') }}" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" required>{{ old('description') }}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Category</label>
            <input class="form-control" type="text" name="category" value="{{ old('category') }}" required>
            @error('category')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('data_blogs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
<script src="{{ asset('src/plugins/dropzone/src/dropzone.js') }}"></script>
<script>
    Dropzone.autoDiscover = false;
    $(".dropzone").dropzone({
        addRemoveLinks: true,
        removedfile: function(file) {
            var name = file.name;
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    });
</script>
@endsection