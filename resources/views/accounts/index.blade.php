@extends('layouts.adminlte')

@section('head')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <style>
        .table-data-identifier {
            width: 7rem !important;
        }

    </style>
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{-- <h5><i class="icon fas fa-check"></i> Alert!</h5> --}}
                    {{ session('success') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{-- <h5><i class="icon fas fa-check"></i> Alert!</h5> --}}
                    {{ session('warning') }}
                </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">Account</h1>
                    {{-- @can('users create')
                        <a href="{{ route('admin.users.create') }}" class="material-icons-round">add</a>
                    @endcan --}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('landingpage') }}">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content pb-3">
        <div class="container-fluid">
            <div class="card m-0">
                <div class="card-body table-responsive">
                    <div class="align-items-center d-flex flex-column mb-4">
                        <img src="{{ Auth::user()->image ? asset('storage/photoProfiles/' . Auth::user()->image) : 'https://dummyimage.com/34x34/000/fff&amp;text=+' }}"
                            alt="" class="mb-2"
                            style="width: 100px;border-radius: 50%;height: 100px;object-fit: cover;">
                        <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#photo">Change</button>
                    </div>
                    <table class="table table-bordered mb-4">
                        <tr>
                            <td class="table-data-identifier">Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td class="table-data-identifier">Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td class="table-data-identifier">Registered</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                        @can('roles read')
                            <tr>
                                <td class="table-data-identifier">Roles</td>
                                <td>
                                    <div class="d-flex" style="gap: 10px">
                                        @foreach ($user->roles as $role)
                                            <span
                                                class="text-capitalize">{{ $role->name }}{{ $loop->last ? '' : ',' }}</span>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                        @endcan
                    </table>
                    <a href="{{ route('account.edit', $user) }}" class="btn btn-default">Edit</a>
                </div>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="photo" tabindex="-1" aria-labelledby="photoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photoLabel">Update Photo Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('account.update', $user->id) }}" method="post" id="updatePhotoProfile" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group mb-0">
                            <!-- <label for="customFile">Custom File</label> -->
        
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile" accept="image/*" name="image" required>
                              <label class="custom-file-label" for="customFile">Choose</label>
                            </div>
                          </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" onclick="event.preventDefault();document.querySelector('form#updatePhotoProfile').submit()">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>
@endsection
