@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Data Blog</h4>
    </div>
    <div class="pd-20">
        <p><strong>Date:</strong> {{ $dataBlog->date }}</p>
        <p><strong>Title:</strong> {{ $dataBlog->title }}</p>
        <p><strong>Description:</strong> {{ $dataBlog->description }}</p>
        <p><strong>Category:</strong> {{ $dataBlog->category }}</p>
        <p><strong>Image:</strong>
            @if($dataBlog->image)
                <img src="{{ asset('storage/' . $dataBlog->image) }}" alt="{{ $dataBlog->title }}" width="200">
            @else
                No Image
            @endif
        </p>
        <a href="{{ route('data_blogs.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection