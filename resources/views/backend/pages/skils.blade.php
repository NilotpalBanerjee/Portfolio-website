@extends('backend.layout.master')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Skils</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <span class="font-weight-bold text-primary">All Skils</span>
            <a href="/admin/skils-add" class="btn btn-success float-right">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Name</th>
                            <!-- <th>Skils</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sr. No</th>
                            <th>Name</th>
                            <!-- <th>Skils</th> -->
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($skils as $sk)
                        <tr>
                            <td>{{ $loop-> index+1 }}</td>
                            <td>{{ $sk->name }}</td>
                            <!-- <td>{{ $sk->description }}</td> -->
                            <td class="text-center">
                                <a href="/admin/{{ $sk->id }}/skils-edit" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <span>&nbsp;&nbsp;&nbsp;</span>
                                <a href="/admin/{{ $sk->id }}/skils-delete" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection