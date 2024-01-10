@extends('layouts.main')

@section('content')
    <div class="col-12">
        <h2 class="mb-2 page-title">Data table</h2>
        <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table datatables" id="dataTable-2">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nim</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Jurusan</th>
                                    <th>Semester</th>
                                    <th>Kelas</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Jumlah Tugas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $d)
                                    <tr>
                                        <td>{{ $d->name }}</td>
                                        <td>231005</td>
                                        <td>Aladadio , 27 Juli 2003</td>
                                        <td>Makassar</td>
                                        <td>Sistem Informasi</td>
                                        <td>Semester 1</td>
                                        <td>A</td>
                                        <td>085349699104</td>
                                        <td>studyweb2023@gmail.com</td>
                                        <td>12</td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                                <a class="dropdown-item" href="#">Assign</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->
    </div>
@endsection
