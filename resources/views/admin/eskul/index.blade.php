@extends('layout.main')
@section('styles')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Components</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{route('eskul.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->


<h6 class="mb-0 text-uppercase">Data Eskul</h6>
<hr>
<div class="card">
    {{-- <div class="card-header">

    </div> --}}
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Eskul</th>
                        <th>Deskripsi</th>
                        <th>Cover</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1
                    @endphp
                    @foreach ($eskul as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->eskul}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td><img src="{{asset('images/eskul/'.$item->cover)}}" style="width: 10%; height:10%" alt=""></td>
                        {{-- <td>
                            @if ($item->isAdmin)
                            Admin
                            @else
                            eskul
                            @endif
                        </td> --}}
                        <td>
                            <form action="{{route('eskul.destroy',$item->id)}}" method="post">
                                @method('DELETE')
                                @csrf

                                {{-- <button class="btn btn-sm btn-danger" type="submit" disabled
                                data-confirm-delete="true">
                                Can't Delete
                                </button> --}}

                                <a href="{{route('eskul.edit',$item->id)}}" class="btn btn-sm btn-success">
                                    Edit
                                </a>
                                <a href="{{ route('eskul.destroy', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
			$('#example').DataTable();
		});
</script>
@endpush
