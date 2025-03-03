@extends('layouts.main')

@section('content')
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Blog</h4>
        <a href="{{ route('data_blogs.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataBlogs as $dataBlog)
                <tr>
                    <td>{{ $dataBlog->date }}</td>
                    <td>{{ $dataBlog->title }}</td>
                    <td>{{ Str::limit($dataBlog->description, 50) }}</td> <!-- Batasi deskripsi -->
                    <td>{{ $dataBlog->category }}</td>
                    <td>
                        @if($dataBlog->image)
                            <img src="{{ asset('/blog_images/' . $dataBlog->image) }}" alt="{{ $dataBlog->title }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('data_blogs.show', $dataBlog->id) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="{{ route('data_blogs.edit', $dataBlog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('data_blogs.destroy', $dataBlog->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection