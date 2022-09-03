<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pkl</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="img/tvri.png" alt="logo" class="bi me-2" width="60" height="35" role="img" aria-label="Bootstrap">
            </a>
        
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Beranda</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Layanan</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Karir</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Kontak</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Tentang Kami</a></li>
                <li><a href="/peminjaman" class="nav-link px-2 link-dark">Peminjaman barang</a></li>
            </ul>
        
            <div class="col-md-3 text-end">
                <div class="dropdown">
                    <a href="/logout">
                        <button class="btn btn-primary" type="button">
                            Logout
                        </button>
                    </a>
                </div>
            </div>
        </header>
    </div>
    
    <div class="b-example-divider"></div>
        
    <div class="container">
        <div class="p-5 mb-4 rounded-3 img-box">
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Data Kerjasama Perusahaan</h1>
                    </div>
                  
                </div>
            </div>
        </div>
    </div> 
    
    <div class="container">
        <table id="tabelpt" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Email Perusahaan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
           
        </table>
    </div>
    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="footer-info">
                                    <h3>Visi</h3>
                                    <p>Terwuiudnya LPP TVRI yang mandiri dan Profesional guna menguatkan persatuan dan kesatuan bangsa dalam mendukung Visi dan Misi Presiden dan Wakil Presiden Yaitu lndonesia Maju yang Berdaulat, Mandiri, dan Berkepribadian Berlandaskan Gotong-royong .</p>
                                </div>
                                <div class="footer-newsletter">
                                    <h3>Misi</h3>
                                    <p>1. Memberikan dukungan teknis penyiaran publik dalam pengambilan kebijakan penyelangaraan pemerintahan / negara
                                        <br>
                                        2. Meningkatkan kualitas sumber daya manusia, sarana, dan prasarana LPP TVRI
                                        <br>
                                        3. Menyelenggarakan pelayanan yang efektif dan efisien di bidang pengelolaan sumber-sumber, pengawasan, administrasi umum, informasi dan hubungan kelembagaan</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="footer-links">
                                    <h4>Links</h4>
                                    <ul>
                                        <li><a href="#data_perusahaan">Data Perushaan</a></li>
                                        <li><a href="#data_inventaris_barang">Data Inventaris Barang</a></li>
                                        <li><a href="#">Basmi Hoax</a></li>
                                        <li><a href="#">Tentang TVRI</a></li>
                                    </ul>
                                </div>
                                <div class="footer-links">
                                    <h4>Hubungi Kami</h4>
                                    <p>
                                    Jl. Mayjen Sungkono No.124, Pakis, Kec. Sawahan, Kota SBY, Jawa Timur 60189 <br>
                                    <strong>Phone:</strong> (031) 5678515<br>
                                    <strong>Email:</strong> sekretariattvrijatim@gmail.com<br>
                                    </p>
                                </div>
                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.265211304128!2d112.69690803955078!3d-7.290083499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc734b7f3bd1%3A0xb549bdffa17f9ac3!2sTVRI%20Stasiun%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1661325501948!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                        </div>    
                    </div>
                </div>
            </div>

           
        </div>
    </footer>







    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
    </script>
    <script>
        $('#example').dataTable( {
            "columnDefs": [
                { "width": "14%", "targets": 0 }
            ]
        } );
    </script>

<!-- SCRIPT AJAX -->

   


<script type="text/javascript">

    $(document).ready(function () {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
          });
  
  
  
      $(document).ready(function() {
  
         var table = $('#tabelpt').DataTable({
              "pageLength": 50,
             processing : true,
             serverSide : true,
             ajax: {
  
              url: "{{route('dataperusahaan.index')}}",
              type: 'GET',
              
               },
               columns: [{
                          data:'nama_perusahaan',
                          name:'nama_perusahaan'
                      },
                      
                      {
                          data:'email',
                          name:'email'
                      },
                      {
                          data:'keterangan',
                          name:'keterangan'
                      },
  
                       
                    
                  ],
  
                  order:[
                  [0,'desc']
                  ]
  
  
              });
  //function auto reload table
              setInterval( function () {
      table.ajax.reload();
  }, 3000 );
      });
  
  
  
  
  
  
  </script>











</body>


</html>