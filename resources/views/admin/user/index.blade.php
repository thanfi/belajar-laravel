@extends('layouts.admin_template')

@section('title', $title)

@section('content')
<<<<<<< HEAD
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Student Management</h1>
                </div>
                <div class="col-12">
                    <table id="student" class="table" style="color:#000 !important;">
                        <thead class="bg-white">
                            <tr>
                                <th width="5%">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th width="15%" class="text-center">
                                    <a href="#Addpart" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#Addpart">
                                        Tambah Data
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>
                                        {{ ($user->currentPage() - 1) * $user->perPage() + $loop->iteration }}
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td class="text-center">
                                        <a href="#EditPart{{ $item->id }}" data-toggle="modal"
                                            data-target="#EditPart{{ $item->id }}" class="btn btn-success btn-sm">
                                            Edit
                                        </a>

                                        <a href="{{ url('user/hapus/' . $item->id) }}"
                                            onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"
                                            class="btn btn-danger btn-sm">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $user->links() }}
                    </div>
                    {{-- ! Add Part --}}

                    <!-- Modal -->
                    {{-- Add Part --}}
                    <div class="modal fade" id="Addpart" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">

                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Tambah Data Student
                                    </h5>

                                    <button type="button" class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                </div>

                                <form method="POST" action="{{ url('student/simpan') }}">

                                    @csrf

                                    <div class="modal-body">

                                        <div class="row">

                                            {{-- Nama --}}
                                            <div class="col-md-6 mb-3">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Nama Student" required>
                                            </div>

                                            {{-- Email --}}
                                            <div class="col-md-6 mb-3">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email" required>
                                            </div>

                                            {{-- Phone --}}
                                            <div class="col-md-6 mb-3">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="Phone" required>
                                            </div>

                                            {{-- Address --}}
                                            <div class="col-md-6 mb-3">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Address" required>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>

                                        <button type="submit" class="btn btn-primary">
                                            Save Changes
                                        </button>
=======
<div class="col-12">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 style="font-family: 'Arial', sans-serif; color: #2c3e50; font-weight: bold; font-size: 32px;">
                    <i class="fa fa-user"></i>
                    User Management</h1>
            </div>
            <div class="col-12">
                <table id="student" class="table tblack" style="color: #000 !important;">
                    <thead class="bg-white">
                        <tr>
                            <th> No </th>
                            <th> Nama</th>
                            <th> Email</th>
                            {{-- <th> Role</th> --}}
                            <th class="text-center"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $item)
                        <tr>
                            <td></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            {{-- <td>{{ $item->role->nama_role }}</td> --}}
                            <td
                            align="middle"><a href="#EditPart{{ $item->id }}" data-toggle="modal" data-target="#EditPart{{ $item->id }}"
                                class="btn btn-success btn-sm"style="font-family: 'Poppins', sans-serif; font-weight: 500; border-radius: 6px;">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('user.destroy', $item->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"
                                    class="btn btn-danger btn-sm" style="font-family: 'Poppins', sans-serif; font-weight: 500; border-radius: 6px;" type="submit" >
                                    <i class="fa-solid fa-trash"></i> Hapus</button>
                                </form>
                                </td>




                        </tr>
                        @endforeach
                    </tbody>

                    {{-- Add Part --}}
                    <div class="modal fade" id="AddPart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body form">
                                <form class='form-horizontal' enctype="multipart/form-data" method="post" action="{{ url('admin/user/update') . '/' . $item->id}}">
                                    @csrf
                                    <div class="row">
                                    <input name="id" type="hidden" value="{{ $item->id}}" class="form-control" readonly>
                                    <div class="col-12">
                                    <fieldset>
                                        <label class="form-label">Role</label>
                                        <select class="form-control" name="role">
                                            <option value="1">Admin</option>
                                            <option value="2">Users</option>
                                        </select>
                                    </fieldset>
                                    {{-- <fieldset class="form-group">
                                        <label class="form-label">📧Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label class="form-label">📞Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="phone">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label class="form-label">🏠Address</label>
                                        <textarea name="address" class="form-control" placeholder="Address"></textarea>

                                    </fieldset>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Save</button>

                                    </div> --}}
                                </div>

                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                </table>
                    {{-- edit part --}}
                    @foreach ($users as $item)
                    <div class="modal fade" id="EditPart{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel{{ $item->id }}"> Edit data</h3>
                                {{-- Tombol Close Bootstrap 4 --}}
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body form">
                                <form class='form-horizontal' enctype="multipart/form-data" method="post"
                                action="{{ url('admin/user/update/' . $item->id) }}">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{ $item->id }}" class="form-control" readonly>
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                        <label class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control"
                                        value="{{ $item->name}}">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $item->email}}">
                                    </fieldset>

                                    </fieldset>
                                    <fieldset>
                                        <label class="form-label">Role</label>
                                        <select class="form-control" name="role">
                                            <option value="1">Admin</option>
                                            <option value="2">Users</option>
                                        </select>
                                    </fieldset>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Save</button>
>>>>>>> e2d5be3705f79791d8d0befc44c41eac7588ca73

                                    </div>

                                </form>
<<<<<<< HEAD

                            </div>

                        </div>

                    </div>

                    {{-- Edit Sparepart --}}
                    @foreach ($user as $item)
                        <div class="modal fade" id="EditPart{{ $item->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel{{ $item->id }}"> Edit data</h3>
                                        {{-- Tombol Close Bootstrap 4 --}}
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body form">
                                        <form class='form-horizontal' enctype="multipart/form-data" method="post"
                                            action="{{ url('student/update' . '/' . $item->id) }}">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{ $item->id }}"
                                                    class="form-control" readonly>
                                                <div class="col-12">
                                                    <fieldset class="form-group">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $item->name }}">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ $item->email }}">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label class="form-label">Phone</label>
                                                        <input type="text" name="phone" class="form-control"
                                                            value="{{ $item->phone }}">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label class="form-label">Address</label>
                                                        <textarea name="address" class="form-control">{{ $item->address }}</textarea>

                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary">Save</button>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
=======
                            </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
>>>>>>> e2d5be3705f79791d8d0befc44c41eac7588ca73
@endsection
