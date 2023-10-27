@extends('admin.layout.app')

@section('title')
    Data Jawaban Form Kalkulasi Bisnis
@endsection

@push('addons-css')
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Jawaban Form Kalkulasi Bisnis</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Jawaban Form Kalkulasi Bisnis</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-3">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Jabatan</th>
                                <th>Email</th>
                                <th>Nomor Whatsapp</th>
                                <th>Ya</th>
                                <th>Tidak</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('addons-js')
    <script src="{{ asset('/js/admin/delete-place.js') }}"></script>
    <script src="{{ asset('/js/admin/detail-place.js') }}"></script>
    <script>
        $("#example1").DataTable({
            "processing": true,
            "serverSide": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    title: 'No',
                    data: null,
                    searchable: false,
                    orderable: false,
                    width: '50px',
                    className: 'text-center border-bottom',
                    render: (data, type, row, meta) => {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'instance',
                    name: 'instance',
                },
                {
                    data: 'position',
                    name: 'position',
                },
                {
                    data: 'email',
                    name: 'email',
                },
                {
                    data: 'whatsapp_number',
                    name: 'whatsapp_number',
                },
                {
                    data: 'ya',
                    name: 'ya',
                },
                {
                    data: 'tidak',
                    name: 'tidak',
                },
            ],
        });
    </script>
@endpush
