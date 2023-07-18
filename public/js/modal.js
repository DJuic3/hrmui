// modal.js
var modal = document.getElementById('myModal');
var addBtn = document.getElementById('addBtn');
var closeBtn = document.getElementsByClassName('close')[0];

addBtn.onclick = function() {
    modal.style.display = 'block';
};

closeBtn.onclick = function() {
    modal.style.display = 'none';
};

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};


