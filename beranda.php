<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- Header-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#" style="height: 80px;">
            </a>
        </div>
    </nav>
    <br><br><br>

    <!--Membuat Konten-->
    <div class="row" style="padding: 15px;">
    	<!--Bagian Welcome-->
        <div class="text-primary" style="font-size: 500px;text-align: center; margin-top: 75px;">
            <h2>Welcome to</h2>
            <h1><strong>Heal.ing</strong></h1>
        </div>
       
        <!--Bagian Tombol Register dan Login-->
        <div class="d-grid" style="padding:  30px;">
             <br><br>
        <div class="col-md-15 text-center">
            	<h5>Belum memiliki akun? Mohon register terlebih dahulu</h5>
                 <a href="formregister.php"><button type="submit" name="register" class="btn btn-primary btn-create">Register</button></a>
             </div>
             <br>
             <div class="col-md-15 text-center">
             	<h5>Sudah memiliki akun? Mohon login terlebih dahulu</h5>
                <a href="formlogin.php"><button type="submit" name="login" class="btn btn-primary btn-create">Login</button></a>
             </div>
             <br>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Copyright -->
        <div class="text-center p-4 text-light bg-primary" style="background-color: rgba(0, 0, 0, 0.05); height: 80px;">
            <p>© 2022 Copyright: <strong>yantee & rhizma</strong></p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>