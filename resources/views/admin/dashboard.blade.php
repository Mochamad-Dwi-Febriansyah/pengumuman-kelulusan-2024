<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengumuman Kelulusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ url('style.css') }}">
        <link rel="shortcut icon" href="{{ url('img/images-removebg-preview (1).png') }}" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body mb-5">
        <div class="container">
          <a class="navbar-brand" href="#">Dashboard</a> 
          <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
        </div>
      </nav>
    <section class="content">
      <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body table-responsive"> 
                  <div class="d-flex align-items-center gap-1"> 
                        <a href="" class="btn btn-success btn-sm">+</a>
                        <a href="{{ url('admin/dashboard/export') }}" class="btn btn-info btn-sm">Export</a>
                        <form action="{{ url('admin/dashboard/import') }}" method="post" class="d-inline-block" enctype="multipart/form-data">
                        @csrf 
                        <div class="d-flex flex-direction-row">
                          <input type="file" name="userfile" id="" class="form-control form-control-sm">
                          <button type="submit" class="btn btn-warning btn-sm">Import</button>
                        </div>
                      </form>
                        </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nisn</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Status Lulus</th>
                            <th scope="col">Tipe User</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($getRecord as $item)
                          <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->kelas }}</td>
                            @if ($item->status_lulus_type == 1)
                            <td class="bg-primary text-light">Lulus</td>
                            @endif
                            @if ($item->status_lulus_type == 0)
                            <td class="bg-danger text-light">Tidak Lulus</td>
                            @endif
                            </td>
                            <td> 
                              @if ($item->user_type == 1)
                                  Admin
                              @endif
                              @if ($item->user_type == 0)
                                  Siswa
                              @endif
                            </td>   
                            <td style="min-width: 120px">
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                              </td>
                          </tr>
                              
                          @empty
                              
                          @endforelse 
                        </tbody>
                      </table>
                      <div style="padding: 10px; float: right">
                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>