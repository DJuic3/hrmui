<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiaries</title>
    <link rel="stylesheet" href="{{ asset('css/beneficiaries.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
@stack('scripts')
<body>
<!-- Side Navigation Bar -->
<div id="mySidenav" class="sidenav">
    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="personalDetails">Personal Details</a>
    <a href="contactDetails.blade.php">Contact Details</a>
    <a href="nationalityDetails.blade.php">Nationality Details</a>
    <a href="beneficiaries.blade.php">Beneficiaries</a>
    <a href="#">Educational Details</a>
    <a href="#">Contact Details</a>
    <a href="#">Finalise</a>

</div>

<!-- Main Content -->
<div id="main">

    <div class="p-20 bg-blue-400 font-sans text-center">
    <h1 class="text-blue-600 text-center">Beneficiaries</h1>
    <div class="flex justify-center mt-8">
        <button id="addBtn" class="mr-6 px-6 py-3 text-white custom-button">Add</button>
        <button id="deleteBtn" class="px-6 py-3 text-white custom-button">Delete</button>
    </div>

</div>

<table id="beneficiaryTable" class="mt-8 w-full border border-gray-300">
    <thead>
    <tr>
        <th class="bg-gray-200 px-4 py-2 font-bold text-left">First Name</th>
        <th class="bg-gray-200 px-4 py-2 font-bold text-left">Surname</th>
        <th class="bg-gray-200 px-4 py-2 font-bold text-left">Relationship</th>
        <th class="bg-gray-200 px-4 py-2 font-bold text-left">Date of Birth</th>
    </tr>
    </thead>
    <tbody>
    <!-- Beneficiary data will be dynamically added here -->
    </tbody>
</table>


<!-- Modal dialog HTML -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add Beneficiary</h2>
        <form>
            <div>
                <label for="beneficiaryType">Beneficiary Type:</label>
                <select id="beneficiaryType" name="beneficiaryType" required>
                    <option value="" disabled selected>Select Beneficiary Type</option>
                    <option value="Pension">Pension</option>
                    <option value="Funeral">Funeral</option>
                    <option value="Medical">Medical</option>
                </select>
            </div>
            <div>
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div>
                <label for="relationship">Relationship:</label>
                <select id="relationshipType" name="relationshipType" required>
                    <option value="" disabled selected>Select Relationship Type</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Child">Child</option>
                    <option value="Parent">Parent</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Next of kin">Next of kin</option>
                </select>

            </div>
            <div>
                <label for="spouse">Spouse:</label>
                <input type="text" id="spouse" name="spouse">
            </div>
            <div>
                <label for="dateOfBirth">Date of Birth:</label>
                <input type="text" id="dateOfBirth" name="dateOfBirth" class="datepicker" required>
            </div>

            @push('scripts')
                <script>
                    $(document).ready(function() {
                        $('.datepicker').datepicker({
                            dateFormat: 'yy-mm-dd',
                            changeYear: true,
                            yearRange: '1950:' + new Date().getFullYear(),
                        });
                    });
                </script>
            @endpush

            <div>
                <label for="percentage">Percentage:</label>
                <input type="number" id="percentage" name="percentage" required>
            </div>
            <div class="flex justify-center mt-4">
                <button class="mr-4 px-6 py-3 bg-blue-500 text-white custom-button">Save</button>
                <button class="px-6 py-3 bg-gray-400 text-white custom-button close">Cancel</button>
            </div>
        </form>
    </div>
</div>

    <script>
        // Open the side navigation bar
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        // Close the side navigation bar
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script>
    var saveBtn = document.querySelector("#myModal .modal-content button");
    var tableBody = document.querySelector("#beneficiaryTable tbody");

    // Save button click event handler
    saveBtn.onclick = function(event) {
        event.preventDefault();

        // Get the form inputs' values
        var firstName = document.querySelector("#firstName").value;
        var surname = document.querySelector("#surname").value;
        var relationship = document.querySelector("#relationshipType").value;
        var dateOfBirth = document.querySelector("#dateOfBirth").value;

        // Perform form validation
        if (!firstName || !surname || !relationship || !dateOfBirth) {
            alert("Please fill in all the required fields.");
            return;
        }

        // Create a new table row with the form data
        var newRow = document.createElement("tr");
        var firstNameCell = document.createElement("td");
        firstNameCell.textContent = firstName;
        var surnameCell = document.createElement("td");
        surnameCell.textContent = surname;
        var relationshipCell = document.createElement("td");
        relationshipCell.textContent = relationship;
        var dateOfBirthCell = document.createElement("td");
        dateOfBirthCell.textContent = dateOfBirth;

        // Append the cells to the new row
        newRow.appendChild(firstNameCell);
        newRow.appendChild(surnameCell);
        newRow.appendChild(relationshipCell);
        newRow.appendChild(dateOfBirthCell);

        // Append the new row to the table body
        tableBody.appendChild(newRow);

        // Close the modal
        modal.style.display = "none";

        // Reset the form inputs
        document.querySelector("#myModal form").reset();
    }

    // Event listener for table row deletion
    tableBody.addEventListener("click", function(event) {
        var target = event.target;
        if (target.tagName === "TD" && confirm("Are you sure you want to delete?")) {
            var row = target.parentNode;
            row.parentNode.removeChild(row);
        }
    });
</script>

<!-- JavaScript code for the modal dialog -->
    <!-- JavaScript code for the modal dialog -->
    <script>
        var modal = document.getElementById('myModal');
        var addBtn = document.getElementById("addBtn");
        var closeBtn = document.getElementsByClassName("close")[0];

        addBtn.onclick = function() {
            modal.style.display = "block";
        }

        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script></div>
</body>
</html>
