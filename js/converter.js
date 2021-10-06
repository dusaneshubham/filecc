let convertApi = ConvertApi.auth({
    secret: 'juUaW6ymVgc9WmeX'
});
const elResult = document.getElementById('result');
elResult.style.display = 'none';


// File Converter

document.getElementById('input-file').addEventListener('change', (e) => {
    elResult.style.display = 'none';
    let currentEvent = e.currentTarget.files[0];

    if (inputType.toLowerCase() == 'image' && outputType.toLowerCase() == 'all image type') {
        inputType = document.getElementById('inputType').value;
        outputType = document.getElementById('outputType').value;
    } else if (inputType.toLowerCase() == 'image') {
        inputType = document.getElementById('inputType').value;
    }


    convertBtn.addEventListener('click', async() => {

        document.getElementById('loader').style = "display : flex !important";

        document.documentElement.style.cursor = 'wait';
        if (inputType && outputType) {
            // On file input change, start conversion
            try {
                let params = convertApi.createParams();
                params.add('file', currentEvent);
                params.add('ScaleImage', 'true');
                params.add('ScaleProportions', 'true');
                let result = await convertApi.convert(inputType, outputType, params);

                // Showing link with the result file

                let anchorsDiv = document.getElementById('anchors');

                for (let i = 0; i < result.files.length; i++) {

                    const downloadBtn = document.getElementById('download-btn');
                    const downloadAnchor = document.getElementById('download-anchor');
                    const chooseFileBtn = document.getElementById('choose-file-btn');
                    const convertBtn = document.getElementById('convert-btn');

                    downloadAnchor.setAttribute('href', result.files[i].Url);
                    downloadBtn.classList.remove('display-none');
                    downloadBtn.classList.add('display-block');
                    chooseFileBtn.classList.add('display-none');
                    convertBtn.classList.add('display-none');
                    convertBtn.classList.remove('display-block');
                    console.log(downloadAnchor, downloadBtn);
                }
                console.log(anchorsDiv);
                elResult.style.display = 'block'

            } finally {
                document.documentElement.style.cursor = 'default';
                document.getElementById('loader').style = "display : none !important";
            }
        }
    });
});