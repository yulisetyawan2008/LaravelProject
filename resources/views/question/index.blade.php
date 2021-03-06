@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
    <h1>Daftar Pertanyaan</h1>
        <a href="/question/create" class="btn btn-primary">
            Tambah Pertanyaan
        </a>
        <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Pertanyaan</th>
                        <th>Isi Pertanyaan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $question->judul }}</td>
                        <td>{{ $question->isi }}</td>  
                        <td>
                            <a href="answer/{{$question->id}}" class="btn btn-sm btn-success">Jawab</a>
                            <a href="question/{{$question->id}}" class="btn btn-sm btn-primary">Lihat QnA</a>
                            <a href="question/{{$question->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/question/{{$question->id}}" method="POST" style="display: inline">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>          
                    </tr>
                    @endforeach
                </tbody>
        </table>
       
    </div>
    
    
@endsection