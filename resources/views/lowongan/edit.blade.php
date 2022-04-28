@extends('layouts.adminlte')

@section('head')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">

    {{-- Select2 --}}
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">Edit Postingan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.lowongan.index') }}">Users</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content pb-3">
        <div class="container-fluid">
            <div class="card m-0">
                <div class="card-body">
                    <form action="{{ route('admin.lowongan.update', $lowongan) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="jabatan" class="text-capitalize">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="jabatan"
                                value="{{ old('jabatan') ?? $lowongan->jabatan }}" required>
                            @error('name')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gaji" class="text-capitalize">Gaji</label>
                            <input type="number" class="form-control" id="gaji" name="gaji" placeholder="gaji"
                                value="{{ old('gaji') ?? $lowongan->gaji }}" required>
                            @error('gaji')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea  name="desk_pek" for="desk_pek" class="text-capitalize">{{ $lowongan->desk_pek }}</textarea>
                            {{-- <input type="text" class="form-control" id="desk_pek" name="desk_pek" placeholder="desk_pek"
                                value="{{ old('desk_pek') ?? $lowongan->desk_pek }}" required> --}}
                            @error('desk_pek')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="skill" class="text-capitalize">Keahliann</label>
                            <input type="text" class="form-control" id="skill" name="skill" placeholder="skill"
                                value="{{ old('skill') ?? $lowongan->skill }}" required>
                            @error('skill')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="edukasi" class="text-capitalize">Edukasi</label>
                            <input type="text" class="form-control" id="edukasi" name="edukasi" placeholder="edukasi"
                                value="{{ old('edukasi') ?? $lowongan->edukasi }}" required>
                            @error('edukasi')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pengalaman" class="text-capitalize">Pengalaman</label>
                            <input type="text" class="form-control" id="pengalaman" name="pengalaman" placeholder="pengalaman"
                                value="{{ old('pengalaman') ?? $lowongan->pengalaman }}" required>
                            @error('pengalaman')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lowtersedia" class="text-capitalize">Lowongan tersedia</label>
                            <input type="text" class="form-control" id="lowtersedia" name="lowtersedia" placeholder="lowtersedia"
                                value="{{ old('lowtersedia') ?? $lowongan->lowtersedia }}" required>
                            @error('lowtersedia')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="skill" class="text-capitalize">sifat</label>
                            <span class="detil">Sifat Pekerjaan</span>
                                <input type="radio" name="sifat" id="html" name="fav_language" value="Tetap">
                                <label for="html">Tetap</label><br>
                                <input type="radio" name="sifat" id="css" name="fav_language" value="Paruh Waktu">
                                <label for="css">Paruh Waktu</label><br>
                                <input type="radio" name="sifat" id="javascript" name="fav_language" value="Remote">
                                <label for="javascript">Remote</label><br>
                                <input type="radio" name="sifat" id="javascript" name="fav_language" value="Freelance">
                                <label for="javascript">Freelance</label>
                            @error('skill')
                                <div class="text-sm text-danger">{{ $message ?? 'Something Wong' }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- jQuery --}}
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    {{-- Bootstrap 4 --}}
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- Select2 --}}
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap4',
            closeOnSelect: false
        })
    </script>
@endsection
