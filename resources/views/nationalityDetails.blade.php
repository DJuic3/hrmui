<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="" method="POST">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <legend>Nationality</legend>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nationality">Nationality:</label>
                            <input type="text" name="nationality" id="nationality" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="citizenship">Citizenship:</label>
                            <input type="text" name="citizenship" id="citizenship" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="national_id_number">National ID Number:</label>
                        <input type="text" name="national_id_number" id="national_id_number" class="form-control">
                    </div>
                </div>
            </div>

            <button type="" class="btn btn-primary">Next</button>
        </form>
    </div>
</body>
</html>
