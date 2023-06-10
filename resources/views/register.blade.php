<!doctype html>
<html lang="en">

<head>
    <title>Register Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center border vh-100">
        <div class="card mt-4 w-25">
            <div class="card-header bg-primary text-light d-flex justify-content-center">
                <b>REGISTER FORM</b>
            </div>
            <div class="card-body">
                <form action="/simpan" method="POST">
                    @csrf
                    <div class="form-group">
                        <label><strong> NIK </strong></label>
                        <input type="number" name="nik_user" placeholder="Input NIK" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label><strong> Username </strong></label>
                        <input type="text" name="nama_user" placeholder="Input Username" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label><strong> No. Hp </strong></label>
                        <input type="number" name="no_hp" placeholder="Input Phone Number" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label><strong> Password </strong></label>
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
                    </div>
                    <hr>
                    <span class="d-flex justify-content-center"><strong>OR</strong></span>
                    <a href="/" class="btn btn-success btn-block mt-4">SIGN IN?</a>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
