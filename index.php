<?php 


function browse()
{
	# Mengidentifikasi Browser yang digunakan oleh client
	if (strpos($_SERVER["HTTP_USER_AGENT"], "Edge") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Edge";
}elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Chrome") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Chrome";
}elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Mozilla") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Mozilla";
}
elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Opera") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Opera";
}elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Trident") !== FALSE) {
	echo "Broser yang kamu gunakan adalah IE";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Browser</title>

<style type="text/css">
	.container{
		padding-top: 20px;
	}

	footer {
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 120px;
	background-color: #333;
	padding-top: 30px;
}

footer p {
	color: #aaa;
	font-size: 0.9em;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                      <a class="navbar-brand" href="#">REPHI</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#card">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#card">Features</a>
                          </li>
                        </ul>
                      </div>
                    </nav>

<div class="container">
	<div class="col-sm text-center">
		<h2>" Aplikasi Untuk Mengetahui Browser yang digunakan oleh client "</h2>
	</div>
</div>


	<div class="container" id="card" align="center">
		<div class="col-12 col-md-6 col-lg-3">
                <div class="card card-warning">
                  <div class="card-header">
                    <h4>Apakah Browsermu</h4>
                  </div>
                  <div class="card-body">
                    <p><?php echo browse(); ?></p>
                  </div>
                </div>
        </div>
	</div>


<!-- Footer -->
	<footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy 2020 | bulit by. <a href="http://facebook.com/rephipradana.10">Rephi Pradana</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="http://youtube.com/rephipradana10 " class="btn btn-danger">Subscribe Youtube</a>
          </div>
        </div>
      </div>
    </footer>
<!-- Akhir Footer -->
</body>
</html>