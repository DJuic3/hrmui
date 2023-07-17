<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiaries</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Include the necessary CSS and JavaScript for the modal dialog -->
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <script src="{{ asset('js/modal.js') }}"></script>
    <style>
        .custom-button {
            border-radius: 9999px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="p-20 bg-gray-200 font-sans text-center">
    <h1 class="text-gray-800 text-center">Welcome to the Beneficiaries</h1>
    <div class="flex justify-center mt-8">
        <button id="addBtn" class="mr-4 px-6 py-3 bg-blue-500 text-white custom-button">Add</button>
        <button id="deleteBtn" class="px-6 py-3 bg-blue-500 text-white custom-button">Delete</button>
    </div>
</div>

<!-- Modal dialog HTML -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add Beneficiary</h2>
        <!-- Add your form or content for the modal dialog here -->
    </div>
</div>

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
</script>
</body>
</html>
