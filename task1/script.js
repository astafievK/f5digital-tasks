window.onload = init;
function init() {
    var button = document.getElementById("sendResume");
    var buttonClose = document.getElementById("modalClose");
    var modal = document.getElementById('modal')
    button.onclick = handleButtonClick;
    buttonClose.onclick = handelButtonCloseClick;
}
function handleButtonClick() {
    modal.style.display = 'block';
}

function handelButtonCloseClick() {
    modal.style.display = 'none';
}

let inputElement = document.getElementById("lalala");

if (inputElement) {
    console.log("dasd");
    inputElement.addEventListener("change", function() {
        let spanElement = document.getElementById("input-file-name");
        spanElement.textContent = inputElement.files[0].name;
    });
}