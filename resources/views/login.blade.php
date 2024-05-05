<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengumuman Kelulusan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url('style.css') }}">
  <link rel="shortcut icon" href="{{ url('img/images-removebg-preview (1).png') }}" type="image/x-icon">
</head>
<body>
  <section class="content">
    <div class="container py-3">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="top d-flex justify-content-center align-items-center gap-3 mb-3">
          <img src="{{ url('img/images-removebg-preview (1).png') }}" alt="" class="logo">
          <div class="text">
            <h4 class="m-0 text-light">Pengumuman Kelulusan</h4>
            <h2 class="m-0 fw-bolder text-warning">SMK Negeri 2 Demak</h2>
          </div>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center">
          <div class="middle my-4 col-md-10" id="tx">
            <div class="card bg-transparent border-0">
              <div class="card-body">
                <p class="fw-normal text-light" >
                  Bersiaplah untuk memulai perjalanan penuh kebahagiaan dan prestasi! Saat yang dinanti-nantikan semakin dekat saat kami bersiap untuk mengumumkan hasil dari kerja keras Anda. 
                  <br><br> Tetaplah terhubung karena pengumuman kelulusan menanti. Dedikasi, ketekunan, dan semangat Anda telah membawa Anda mencapai tonggak bersejarah ini. Biarkan antisipasi memuncak saat kami membuka pintu ke babak baru kesuksesan. Selamat atas pencapaian yang luar biasa ini!
                </p>
              </div>
            </div> 
          </div>
          <div class="bottom col-md-10">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center" id="tm">
                <h5 class="text-light">Akan dimulai dalam</h5>
                <div class="d-flex justify-content-center align-items-center gap-3">
                  <p class="tmr" id="day">00</p>
                  <p>:</p>
                  <p class="tmr" id="hour">00</p>
                  <p>:</p>
                  <p class="tmr" id="minute">00</p>
                  <p>:</p>
                  <p class="tmr" id="second">00</p>
                </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center">
          <div class="middle my-4 col-md-10">
            <div class="card bg-transparent border-0">
              <div class="card-body">
                <h4 class="fw-normal text-center text-light" id="sl">
                  Silahkan Login
                </h4>
              </div>
            </div>
          </div>
          
          <div class="bottom col-md-5 col-10">
            <div class="card bg-transparent border-0">
              <div class="card-body">  
                @if(!empty(session('error'))) 
                  <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                  </div>
                @endif
                <form action="" method="post">
                  @csrf
                  <div class="mb-3" id="nisn">
                    <label class="form-label text-light">NISN</label>
                    <input type="number" class="form-control" name="nisn" required placeholder="ex662......">
                  </div>
                  <div class="mb-3" id="ttl">
                    <label class="form-label text-light">Tanggal Lahir</label>
                    <input type="number" class="form-control" name="tanggal_lahir" required placeholder="ex14052002">
                  </div> 
                  <button type="submit" class="btn btn-primary" id="bt">Masuk</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 6, 2024 02:31:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
      document.getElementById("day").innerHTML = days + " Hari"
      document.getElementById("hour").innerHTML = hours + " Jam"
      document.getElementById("minute").innerHTML = minutes + " Menit"
      document.getElementById("second").innerHTML = seconds + " Detik"
     
      // If the count down is finished, toggle the display of sections
      if (distance < 0) {
          clearInterval(x);
        document.getElementById("tx").style.display = 'none';
        document.getElementById("tm").style.display = 'none';
        document.getElementById("sl").style.display = 'block';
          document.getElementById("nisn").style.display = 'block';
          document.getElementById("ttl").style.display = 'block';
          document.getElementById("bt").style.display = 'block';
    }else{
          document.getElementById("sl").style.display = 'none';
          document.getElementById("nisn").style.display = 'none';
          document.getElementById("ttl").style.display = 'none';
          document.getElementById("bt").style.display = 'none';
      }
    }, 1000);
  </script>
</body>
</html>
