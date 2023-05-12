window.onload = init;
let button = document.getElementById('sendResume');
let buttonClose = document.getElementById('modalClose');
let modalOverlay = document.getElementById('overlay')
let modal = document.getElementById('modal')
let fileInput = document.getElementById('inputFile')
let inputFileLabel = document.getElementById('input-file-name')

function init() {
    button.onclick = showModal;
    modalOverlay.onclick = closeModal;
    buttonClose.onclick = closeModal;
    fileInput.onchange = updateName;
}

function showModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

function updateName() {
    let fileName = fileInput.value.split("\\").pop();
    let image = document.getElementById('file-name-image')
    image.style.display = "none";
    inputFileLabel.innerHTML = fileName;


}