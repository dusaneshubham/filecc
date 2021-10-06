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
                    let outputImage = document.createElement('a');
                    let txtNode = document.createTextNode('Downlaod');
                    outputImage.appendChild(txtNode);
                    outputImage.setAttribute('href', result.files[i].Url);
                    outputImage.setAttribute('id', 'download-btn');
                    // outputImage.setAttribute('style', 'text-decoration: none ;text-transform: uppercase;width: 450px;padding: 8px 0;font-size: 20px;border-radius: 25px;color: #fff;border: none;outline: none;letter - spacing: 1 px; cursor: pointer; background: linear - gradient(135 deg, #287ff0 0%, # 8546f1 100%);');
                    anchorsDiv.appendChild(outputImage);
                    console.log(outputImage);
                    // outputImage.innerHTML = result.files[i].Url + '</br>';
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