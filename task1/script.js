window.onload = init;
let modalOpenButton = document.getElementById('sendResume');
let modalCloseButton = document.getElementById('closeModal');
let overlay = document.getElementById('overlay')
let modal = document.getElementById('modal')
let fileInput = document.getElementById('inputFile')


function init() {
    modalOpenButton.onclick = showModal;
    overlay.onclick = closeModal;
    modalCloseButton.onclick = closeModal;
    fileInput.onchange = updateName;
}

function showModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

function updateName() {
    let fileName = fileInput.files[0].name;
    let inputFileLabel = document.getElementById('inputFileName')
    let image = document.getElementById('inputFileImage')
    image.style.display = "none";
    inputFileLabel.innerHTML = fileName;
}