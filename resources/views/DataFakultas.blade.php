@extends('layout.main')

@section('title', 'UTS WAHYU 1347-Data Fakultas')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Berikut Adalah Data Fakultas Yang Tersedia</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Dekan</th>
                    <th scope="col">Wakil_Dekan</th>
                    <th scope="col">aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($fakultas as $fkl)
                        
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$fkl->Fakultas}}</td>
                        <td>{{$fkl->Dekan}}</td>
                        <td>{{$fkl->Wakil_Dekan}}</td>
                        <td>
                            <button type="button" class="btn btn-success">edit</button>
                            <button type="button" class="btn btn-danger">delete</button>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
  