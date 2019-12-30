<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>PDF Creator</title>
</head>
<body>


	<div class="container mt-5">

		<form action="private/PDFCreator.php" method="POST" class="offset-md-3 col-md-6">

			<h1>Create PDF file</h1>
			<p>Fill out of the details below and the PDF will download.</p>

				<div class="row mb-2">

					<div class="col-md-6">
						<h6>First Name</h6>
							<input type="text" name="fname" placeholder="First Name" class="form-control" required></input>
					</div>

					<div class="col-md-6">
						<h6>Surname</h6>
							<input type="text" name="lname" placeholder="Surname" class="form-control" required></input>
					</div>
				</div>

					<h6>Email</h6>
					<input type="email" name="email" placeholder="E-mail" class="form-control" required></input>

					<h6>Phone</h6>
					<input type="tel" name="phone" placeholder="Phone" class="form-control" required></input>

					<h6>Your Message</h6>
					<textarea name="message" placeholder="Your Message" class="form-control" required></textarea>



					<button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button>

			</form>
		</form>






</body>
</html>
