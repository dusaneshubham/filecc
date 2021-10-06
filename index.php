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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/converter.css">

    <title>filecc | index</title>
</head>

<body>
    <?php
    require('./utility/navbar.php');
    ?>

    <div class="converter-div">
        <h3>Most Popular Tools</h3>

        <div class="converters">
            <a href="converter.php?in=PDF&out=WORD">
                <div class="tool-div">
                    <i class="far fa-file-word" style="color: rgb(59, 127, 230);"></i>
                    <p>PDF to WORD</p>
                </div>
            </a>

            <a href="converter.php?in=PDF&out=JPG">
                <div class="tool-div">
                    <i class="far fa-file-image" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>PDF to JPG</p>
                </div>
            </a>

            <a href="converter.php?in=PDF&out=PNG">
                <div class="tool-div">
                    <i class="far fa-file-image" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>PDF to PNG</p>
                </div>
            </a>

            <a href="converter.php?in=PDF&out=TXT">
                <div class="tool-div">
                    <i class="far fa-file-alt" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>PDF to TXT</p>
                </div>
            </a>

            <a href="converter.php?in=PDF&out=PPT">
                <div class="tool-div">
                    <i class="far fa-file-powerpoint " style="color: orange"></i>
                    <p>PDF to PPT</p>
                </div>
            </a>


            <a href="converter.php?in=Image&out=All Image Type">
                <div class="tool-div">
                    <i class="far fa-file-image" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>Image to All Image Type</p>
                </div>
            </a>

            <a href="converter.php?in=Image&out=PDF">
                <div class="tool-div">
                    <i class="far fa-file-pdf text-danger"></i>
                    <p>Image to PDF</p>
                </div>
            </a>

            <a href="converter.php?in=Image&out=PPT">
                <div class="tool-div">
                    <i class="far fa-file-powerpoint " style="color: orange"></i>
                    <p>Image to PPT</p>
                </div>
            </a>


            <a href="converter.php?in=WORD&out=PDF">
                <div class="tool-div">
                    <i class="far fa-file-pdf text-danger"></i>
                    <p>WORD to PDF</p>
                </div>
            </a>

            <a href="converter.php?in=WORD&out=JPG">
                <div class="tool-div">
                    <i class="far fa-file-image" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>WORD to JPG</p>
                </div>
            </a>

            <a href="converter.php?in=WORD&out=PNG">
                <div class="tool-div">
                    <i class="far fa-file-image" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>WORD to PNG</p>
                </div>
            </a>

            <a href="converter.php?in=WORD&out=TIFF">
                <div class="tool-div">
                    <i class="far fa-file" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>WORD to TIFF</p>
                </div>
            </a>

            <a href="converter.php?in=WORD&out=HTML">
                <div class="tool-div">
                    <i class="far fa-file-code" style="color: rgb(180, 204, 153);"></i>
                    <p>WORD to HTML</p>
                </div>
            </a>

            <a href="converter.php?in=WORD&out=TXT">
                <div class="tool-div">
                    <i class="far fa-file-alt" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>WORD to TXT</p>
                </div>
            </a>


            <a href="converter.php?in=PPT&out=PDF">
                <div class="tool-div">
                    <i class="far fa-file-pdf text-danger"></i>
                    <p>PPT to PDF</p>
                </div>
            </a>

            <a href="converter.php?in=PPT&out=JPG">
                <div class="tool-div">
                    <i class="far fa-file-image" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>PPT to JPG</p>
                </div>
            </a>

            <a href="converter.php?in=PPT&out=PNG">
                <div class="tool-div">
                    <i class="far fa-file-image" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>PPT to PNG</p>
                </div>
            </a>

            <a href="converter.php?in=PPT&out=TXT">
                <div class="tool-div">
                    <i class="far fa-file" style="color: rgba(0, 0, 0, 0.6);"></i>
                    <p>PPT to TIFF</p>
                </div>
            </a>

        </div>
    </div>

    <footer class="bg-dark">
        <p class="text-white">&copy; 2021 | Created by <span>Shubham and Team<span></p>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script src="https://unpkg.com/convertapi-js/lib/convertapi.js"></script>


</html>