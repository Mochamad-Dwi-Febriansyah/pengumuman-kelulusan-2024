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
    <section class="content">
        <div class="container py-3">
            <div class="row d-flex justify-content-center align-items-center no-wrap">
                <div class="top d-flex justify-content-center align-items-center gap-3 mb-3">
                    <img src="{{ url('img/images-removebg-preview (1).png') }}" alt="" class="logo">
                    <div class="text">
                        <h4 class="m-0 text-light">Pengumuman Kelulusan</h3>
                            <h2 class="m-0  fw-bolder  text-warning">SMK Negeri 2 Demak</h1>
                    </div>
                </div>
                <div class="middle my-4 col-md-10 mb-0">
                    <div class="card bg-transparent border-0">
                        <div class="card-body">
                            <h4 class="fw-normal text-center text-light">
                                Selamat Datang 
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="bottom col-md-4 col-12">
                    <div class="card bg-transparent border-0">
                        <div class="card-body">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ Auth::user()->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>NISN</th>
                                        <td>{{ Auth::user()->nisn }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="bottomm col-md-8 mb-3">
                    @if (Auth::user()->status_lulus_type == 1)
                        <h1 class="text-light text-center">  
                            <p class="bg-success text-light">Selamat!!!</p> Anda dinyatakan lulus <img src="{{ url('img/senang.png') }}" alt="">
                        </h1>
                        <p class="text-light">Hari ini adalah awal dari petualangan baru yang menunggu. Teruslah mengejar
                            impianmu dengan semangat dan ketekunan. Kami bangga padamu!
                        </p>
                    @endif
                    @if (Auth::user()->status_lulus_type == 0)
                        <h1 class="text-light text-center">  
                            <p class="bg-danger text-light">Mohon Maaf,</p> Anda dinyatakan Tidak lulus <img src="{{ url('img/sedih.png') }}" alt="">
                        </h1>
                        <p class="text-light">Tetap Semangat, karena setiap pengetahuan baru akan membuka pintu kesuksesan di masa depan.
                        </p>
                    @endif
                </div>
                <div class="bottomm col-md-8">
                    <h4 class="text-light text-center">Opsi</h4>
                    <div class="d-flex justify-content-center gap-1"> 
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#infol">Info Lanjutan</button>
                        <div class="modal fade" id="infol" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-6" id="staticBackdropLabel">Nilai Anda</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body"> 
                                     <p>
                                        SKL (Surat Keterangan Lulus) bisa diambil mulai hari selasa dan akan diinformasikan melalui WA group oleh wali kelas
                                     </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                        <a href="{{ url('/logout') }}" class="btn btn-danger btn-sm">Keluar</a>
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