@extends('layouts/main')
@section('content')
@section('titles', 'eDuta - Home')
<div class="card mt-4">
    <div class="card-header">
        <a href="/home/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-circle"></i> Add Students</a>
        <form action="/home/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="card-body">
        @if (session('flash_added'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert" id="alert">
                <strong>{{ session('flash_added') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script type="text/javascript">
                    setTimeout(function() {
                        $('#alert').alert('close');
                    }, 3500);
                </script>
            </div>
        @elseif (session('flash_edited'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                <strong>{{ session('flash_edited') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script type="text/javascript">
                    setTimeout(function() {
                        $('#alert').alert('close');
                    }, 3500);
                </script>
            </div>
        @elseif (session('flash_deleted'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
                <strong>{{ session('flash_deleted') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script type="text/javascript">
                    setTimeout(function() {
                        $('#alert').alert('close');
                    }, 3500);
                </script>
            </div>
        @elseif (session('flash_not_found'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
                <strong>{{ session('flash_not_found') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script type="text/javascript">
                    setTimeout(function() {
                        $('#alert').alert('close');
                    }, 3500);
                </script>
            </div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Tingkat Pendidikan</th>
                    <th scope="col">Bidang Keahlian</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plm as $idx => $n)
                    <tr>
                        <th scope="row">{{ $plm->firstItem() + $idx }}</th>
                        <td>{{ $n->nik }}</td>
                        <td>{{ $n->nama }}</td>
                        <td>{{ $n->gender }}</td>
                        <td>{{ $n->tingkat_pendidikan }}</td>
                        <td>{{ $n->bidang_keahlian }}</td>
                        <td>
                            <a href="home/formedit/{{ $n->id }}" class="btn btn-success"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a href="home/delete/{{ $n->id }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this data? \n\nThis action cannot be undone.')">
                                <i class="bi bi-trash-fill"></i>
                            </a>


                        </td>
                    </tr>
                @endforeach
                <!-- Add a row to display the total -->
                <tr>
                    <td colspan="5"></td>
                    <th>Total Data: {{ $idx + 1 }}</th>
                </tr>
            </tbody>
        </table>
        <span class="float-right">{{ $plm->links() }}</span>
    </div>


</div>
@endsection
