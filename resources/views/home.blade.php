<!DOCTYPE html>
<html>
	<body>

		<h1>Skin Tone Recognizer</h1>
		<p>My first paragraph.</p>

		<p> halo nama saya {{ $nama }} </p>
		<p> hasil dari 95*17 adalah {{ $hasil }}</p>

		@foreach($abc as $warna)
			<div style="width: 100px; height: 100px; background-color: #{{$warna}}">
				#{{$warna}}
			</div>

		@endforeach

		<form action="upload.php" method="post" enctype="multipart/form-data">
		    Select image to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" value="Upload Image" name="submit">
		</form>

	</body>
</html>