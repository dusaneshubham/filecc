// Browse File

var file;

const dragAndDropDiv = document.getElementById('drag-and-drop-div');
const inputFile = document.getElementById("input-file");
const img = document.getElementsByTagName("img");
const convertBtn = document.getElementById('convert-btn');

function defaultBtnActive() {
    inputFile.click();
};

inputFile.addEventListener("change", function() {
    file = this.files[0];
    // console.log(file);
    if (file) {
        showFile(file);
    }
});


/////////////////// DRAG AND DROP /////////////////////////

var fileName, fileType, fileSize;

dragAndDropDiv.addEventListener('dragover', (event) => {
    event.preventDefault();
});

dragAndDropDiv.addEventListener('dragleave', () => {
    // console.log('leaved from the drag and drop div');
});

dragAndDropDiv.addEventListener('drop', (event) => {
    event.preventDefault();
    file = event.dataTransfer.files[0];
    showFile(file);
});

function showFile(file) {
    fileName = file.name;
    fileType = file.type;
    fileSize = file.size;
    // console.log(file, fileType, fileSize);

    let fileReader = new FileReader();
    fileReader.addEventListener('load', () => {
        let fileURL = fileReader.result;
        // console.log("File URL" + fileURL);
        let imgTag = `<embed src="${fileURL}" alt="file" id="inputPreview" width="100%" height="100%">`;
        dragAndDropDiv.innerHTML = imgTag;
    });
    fileReader.readAsDataURL(file);

    convertBtn.classList.remove('display-none');
    convertBtn.classList.add('display-block');
};