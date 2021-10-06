<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/converter.css">
    <link rel="stylesheet" href="./css/loader.css">

    <title>filecc | converter</title>
</head>

<body>
    <?php
    require('./utility/navbar.php');
    ?>

    <section style="display: none;" id="loader">
        <div class="loader">
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
        </div>
    </section>

    <div id="main-content">

        <div class="conversion-type-text" style="text-align: center; padding-top: 30px; font-weight: 700;">
            <h2 id="conversion-type-heading" style="font-weight: 600; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;"></h2>
        </div>

        <div id="select-file-type">

            <div id="select-input-file-type">
                <label for="inputType">Select input type</label>
                <select name="" id="inputType">
                    <option aria-disabled style="color: gray;">Select</option>
                    <option value="jpg">jpg</option>
                    <option value="jpeg">jpeg</option>
                    <option value="png">png</option>
                    <option value="svg">svg</option>
                </select>
            </div>

            <div id="select-output-file-type">
                <label for="outputType">Select output type</label>
                <select name="" id="outputType">
                    <option aria-disabled style="color: gray;">Select</option>
                    <option value="jpg">jpg</option>
                    <option value="jpeg">jpeg</option>
                    <option value="png">png</option>
                    <option value="svg">svg</option>
                    <option value="webp">webp</option>
                </select>
            </div>

        </div>

        <div class="browse-file-container">
            <div class="container">
                <div id="drag-and-drop-div">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div class="text">
                            No file chosen, yet!
                        </div>
                    </div>
                </div>

                <button onclick="defaultBtnActive()" id="choose-file-btn">Choose a file</button>
                <input id="input-file" type="file" hidden>

                <button id="convert-btn" class="display-none button">Convert</button>
                <button id="download-btn" class="display-none button"><a href="" id="download-anchor">Download</a></button>

            </div>
        </div>

        <div id="result">
            <div id="anchors">

            </div>
        </div>

    </div>

    <footer class="bg-dark">
        <p class="text-white">&copy; 2021 | Created by <span>Shubham and Team<span></p>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script src="https://unpkg.com/convertapi-js/lib/convertapi.js"></script>

<script src="./js/browse-file.js"></script>
<script src="./js/converter.js"></script>

<script>
    // passing input and output type to conversion page

    const conversionAnchors = document.getElementsByClassName('dropdown-item');

    Array.from(conversionAnchors).forEach(element => {
        element.addEventListener('click', () => {
            let conversionType = element.innerHTML;
            let arr;
            console.log(conversionType);
            if (conversionType.includes(' to ')) {
                arr = conversionType.split(' to ');
                console.log(conversionType);
            } else {
                arr = ['pdf', conversionType];
            }
            location.href = `converter.php?in=${arr[0]}&out=${arr[1]}`;
        });
    });




    // Getting the params from URL

    let URLParams = new URLSearchParams(window.location.search);
    let inputType = URLParams.get('in');
    let outputType = URLParams.get('out');


    const conversionTypeHeading = document.getElementById('conversion-type-heading');
    conversionTypeHeading.innerHTML = inputType.toUpperCase() + '&nbsp; to &nbsp;' + outputType.toUpperCase();


    if (inputType.toLowerCase() === 'word') {
        inputType = 'docx';
    }
    if (outputType.toLowerCase() === 'word') {
        outputType = 'docx';
    }

    if (inputType.toLowerCase() == 'image' && outputType.toLowerCase() == 'all image type') {
        document.getElementById('select-input-file-type').style.display = 'flex';
        document.getElementById('select-output-file-type').style.display = 'flex';
    } else if (inputType.toLowerCase() == 'image') {
        document.getElementById('select-input-file-type').style.display = 'flex';
    }
</script>

</html>