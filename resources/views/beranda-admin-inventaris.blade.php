<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda-admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
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
                <li><a href="/beranda-admin" class="nav-link px-2 link-dark">Perusahaan</a></li>
                <li><a href="/beranda-admin-inventaris" class="nav-link px-2 link-dark">Inventaris</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Kontak</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Tentang Kami</a></li>
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
        
    <div class="container" style="margin-bottom: 100px;">
        <div class="p-5 mb-4 rounded-3 img-box">
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-md-7 judul">
                        <h1>Data Inventaris Barang</h1>
                        <h3>Menampilkan informasi tentang barang yang tersedia untuk dilakukan peminjaman</h3>
                        <a href="#data-barang">
                            <button type="submit" class="btn btn-success">Mulai layanan</button>
                        </a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div> 

    <nav class="breadcrumbs">
        <a href="" class="breadcrumbs__item">BARANG</a>
        <a href="/riwayatviewadmin" class="breadcrumbs__item">RIWAYAT</a> 
      </nav>


    <div class="container my-5 title-data-perusahaan" id="data_inventaris_barang">
        <h1 id="data-barang">DATA INVENTARIS BARANG</h1>
    </div>

    <div class="container" style="margin-bottom: 100px;" >
        <table id="tabelbr" class="table table-striped" style="width:100%">
            <thead>
                <button id="tombol-tambahbr" class="btn btn-primary" type="button">
                    Tambah Barang
                </button>
                <tr>
                    <th>No</th>
                    <th>Nama barang</th>
                    <th>jumlah</th>
                    <th>Deskripsi</th>
                    <th>Tanggal diinput</th>
                    <th>Tanggal diperbarui</th>
                    <th>Aksi</th>
                    
                     
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




 

 
 

 
 
        
    <!-- MODAL DELETE barang -->
    <div class="modal fade" id="modalDeletebr" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                 <p><b>Jika menghapus Data ini maka</b></p>
                    <p>*data tersebut hilang selamanya, apakah anda yakin?</p>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" name="tombol-hapusbr" id="tombol-hapusbr" class="btn btn-primary">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    
    
     <!-- MODAL EDIT tambah barang -->
     <div class="modal fade" id="edit-modalbr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="modal-judul">Edit Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-editbr" name="form-tambah-editbr" >
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="hidden" name="id_barang" id="id_barang">
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama Barang</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"  id="nama_barang" name="nama_barang"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Jumlah</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control"  id="jumlah" name="jumlah" value=""
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Deskripsi</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control"  name="Deskripsi" id="Deskripsi" required></textarea>
                                    </div>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                            <button type="submit" id="tombol-simpanbr" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    
    
<!-- MODAL tambah peminjaman-->
<div class="modal fade" id="edit-modalpnj" tabindex="-3" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="modal-judul">Edit Data</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-editpnj" name="form-tambah-editpnj" >
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <input type="hidden" name="kode_peminjaman" id="kode_peminjaman">
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Id barang</label>
                                <div class="col-sm-12">
                                    <input readonly type="text" class="form-control"  id="id_barang" name="id_barang"
                                        value="" required>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">id user</label>
                                    <div class="col-sm-12">
                                        <input readonly type="text" class="form-control"  id="id_user" name="id_user"
                                            value="" required>
                                    </div>
                            </div> 

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama Barang</label>
                                    <div class="col-sm-12">
                                        <input readonly type="text" class="form-control"  id="nama_barang" name="nama_barang"
                                            value="" required>
                                    </div>
                            </div> 

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama Peminjam</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"  id="nama_peminjam" name="nama_peminjam"
                                            value="" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Jumlah</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control"  id="jumlah" name="jumlah" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Tanggal Kembali</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control"  name="tanggal_kembali" id="tanggal_kembali" value=""
                                    required>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                        <button type="submit" id="tombol-simpanpnj" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  --> 
 





 
    
 
    

  
    <!-- script css,boostrap,datatable dll -->
    
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
    </script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        } );    
    </script>
    <script>
        $('#example').dataTable( {
            "columnDefs": [
                { "width": "12%", "targets": 3 },
                { "width": "14%", "targets": 0 }
            ]
        } );
    </script>
    <script>
        $('#example2').dataTable( {
            "columnDefs": [
                { "width": "12%", "targets": 3 },
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
  
         var table = $('#tabelbr').DataTable({
              "pageLength": 50,
             processing : true,
             serverSide : true,
             ajax: {
  
              url: "{{route('databarang.index')}}",
              type: 'GET',
              
               },
               columns: [

                       {
                         data: 'DT_RowIndex',
                         name: 'DT_RowIndex'
                       },

                      {
                          data:'nama_barang',
                          name:'nama_barang'
                      },
                      
                      {
                          data:'jumlah',
                          name:'jumlah'
                      },
                      {
                          data:'Deskripsi',
                          name:'Deskripsi'
                      },

                      {
                          data: 'created_at',
                          name: 'created_at'
                      },

                      {
                          data: 'updated_at',
                          name: 'updated_at'
                      },
  
                       {
                          data: 'action',
                          name: 'action'
                      },

                     
                    
                  ],
  
                  order:[
                  [0,'desc']
                  ]
  
  
              });
  // //function auto reload table
  //             setInterval( function () {
  //     table.ajax.reload();
  // }, 3000 );
      });

// Script Create-edit

//script tombol-modal-create
$('#tombol-tambahbr').click(function () {
            $('#button-simpanbr').val("create-post"); //valuenya menjadi create-post
            $('#id_barang').val(''); //valuenya menjadi kosong
            $('#form-tambah-editbr').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah data Baru"); //valuenya tambah pegawai baru
            $('#edit-modalbr').modal('show'); //modal tampil
        });




 if ($("#form-tambah-editbr").length > 0) {
            $("#form-tambah-editbr").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpanbr').val();
                   
                     $('#tombol-simpanbr').html('Sending..');
                    $.ajax({
                        data: $('#form-tambah-editbr')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('databarang.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe yang dikirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-editbr').trigger("reset"); //form reset
                            $('#edit-modalbr').modal('hide');
                            $('#tombol-simpanbr').html('Simpan'); //tombol simpan
                            var oTable = $('#tabelbr').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kiri atas
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('success ')}}',
                                position: 'topLeft'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpanbr').html('Simpan');
                        }
                    });
                    return false;
                }
            })
        }

//script tombol-modal-edit
$('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('databarang/' + data_id + '/edit', function (data) {
                $('#modal-judul').html("Edit barang");
                $('#tombol-simpabr').val("edit-post");
                $('#edit-modalbr').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id_barang').val(data.id_barang);
                $('#nama_barang').val(data.nama_barang);
                $('#jumlah').val(data.jumlah);
                $('#Deskripsi').val(data.Deskripsi);
            })
        });






//Script delete

//jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
$(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#modalDeletebr').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapusbr').click(function () {
            $.ajax({

                url: "databarang/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapusbr').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#modalDeletebr').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#tabelbr').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'topLeft'
                    });
                }
            })
        });









</script>



















</body>
</html>