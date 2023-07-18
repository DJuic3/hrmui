<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="{{route ('personalDetails')}}" method="POST">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <legend>Contact Details</legend>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cellphone">Cellphone:</label>
                            <input type="text" name="cellphone" id="cellphone" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telephone">Telephone:</label>
                            <input type="text" name="telephone" id="telephone" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="contact_address">Contact Address:</label>
                        <input type="text" name="contact_address" id="contact_address" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="physical_address">Physical Address:</label>
                        <input type="text" name="physical_address" id="physical_address" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
            </div>

            <button type="" class="btn btn-primary">Next</button>
        </form>
    </div>
</body>
</html>
