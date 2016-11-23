<!DOCTYPE html>
<html>
	<head>
		<title>MatchMakeup</title>
		<!--bootsrtap library link-->
		<link href="{{ asset('library/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('library/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('library/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}" rel="stylesheet" media="screen">
		<!--additional-->
		<link href="{{ asset('library/bootstrap-3.3.7-dist/css/heroic-features.css') }}" rel="stylesheet" media="screen">
	</head>
	<body>



		<div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>MatchMakeup</h1>
            <p>MatchMakeup adalah sistem pendukung keputusan yang dibuat untuk menentukan warna makeup yang sesuai dengan warna alami yang dimiliki agar mengurangi potensi kesalahan pengguna dalam membeli produk makeup.</p>

            <p>Kenali warna kulit anda!</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
		    Select image to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" class="btn btn-primary btn-large" value="Upload Image" name="submit">
		</form>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Kulit anda terdiri dari warna-warna berikut:</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        
        <div class="row text-center">
        	@foreach($abc as $warna)
			<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div style="width: 250px; height: 150px; background-color: #{{$warna}}">
					</div>
                    <div class="caption">
                        <h3>#{{$warna}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
			@endforeach

        </div>
	</body>
</html>