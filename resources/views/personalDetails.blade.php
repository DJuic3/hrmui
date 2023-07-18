<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title">Title:</label>
                    <select name="title" id="title" class="form-select">
                        <option value="">Select Title</option>
                        <option value="MR">MR</option>
                        <option value="MRS">MRS</option>
                        <option value="MS">MS</option>
                        <option value="DR">DR</option>
                        <option value="MISS">MISS</option>
                        <option value="REV">REV</option>
                        <option value="SR">SR</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="forenames">Forenames:</label>
                    <input type="text" name="forenames" id="forenames" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" class="form-select">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="ecNum">EC Number:</label>
                <input type="text" name="ecNum" id="ecNum" class="form-control">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="date_of_birth">Date of Birth:</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" max="{{ date('Y-m-d', strtotime('-18 years')) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="marital_status">Marital Status:</label>
                    <select name="marital_status" id="marital_status" class="form-select">
                        <option value="">Select Marital Status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="religion">Religion:</label>
                <select name="religion" id="religion" class="form-select">
                    <option value="">Select Religion</option>
                    <option value="christianity">Christianity</option>
                    <option value="islam">Islam</option>
                    <option value="hinduism">Hinduism</option>
                    <option value="buddhism">Buddhism</option>
                    <option value="judaism">Judaism</option>
                </select>
            </div>

            <button type="" class="btn btn-primary">Next</button>
        </form>
    </div>
</body>
</html>
