window.onload = init;
function init() {
    var button = document.getElementById('sendResume');
    var buttonClose = document.getElementById('modalClose');
    var modalOverlay = document.getElementById('overlay')
    var modal = document.getElementById('modal')
    var fileInput = document.getElementById('inputFile')
    var inputFileLabel = document.getElementById('input-file-name')
    button.onclick = showModal;
    modalOverlay.onclick = closeModal;
    buttonClose.onclick = closeModal;
    fileInput.onchange = fileIsLoaded;
}

function showModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

function fileIsLoaded(){
    inputFileLabel.textContent = fileInput.files[0].name;
}