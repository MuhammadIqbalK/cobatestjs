<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda-user</title>
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
                    <div class="col-md-6 rounded-3 input-box">
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Perusahaan</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea type="textarea" class="form-control" id="keterangan"></textarea>
                            </div>
                            <button type="cancel" class="btn btn-outline-danger">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="container">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Email Perusahaan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sukamaju</td>
                    <td>sukamaju@gmail.com</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores provident cumque qui illum debitis tempora illo deleniti minima. Eius cupiditate assumenda necessitatibus vitae fuga commodi sunt cum alias eveniet rem.</td>
                </tr>
                <tr>
                    <td>Berjaya</td>
                    <td>berjayaaaa@gmail.com</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel facilis sunt alias doloremque nemo praesentium odit pariatur fuga dolorum illo aliquam vitae, vero saepe inventore magni nam esse, blanditiis repellendus.</td>
                </tr>
                <tr>
                    <td>abccc</td>
                    <td>abc123@gmail.com</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium voluptates, incidunt suscipit voluptatem illum ullam fugiat cupiditate repellat. Labore, ullam vero cum placeat sed harum a deserunt quidem quo accusantium!</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                </tr>
            </tbody>
        </table>
    </div>

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
</body>


</html>