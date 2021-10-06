<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">filecc</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar-ul">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Converter Tools
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 1200px; padding: 0;" id="tools-sub-menu-div">

                        <div id="tools-sub-menu" class="bg-dark text-white" style="display: flex; padding: 20px 30px;  ">

                            <div class="tools-sub-menu-sub-div" id="convert-btn-from-pdf">
                                <h5 class="text-white">Convert from PDF</h5>
                                <ul>
                                    <li>
                                        <i class="far fa-file-word" style="color: rgb(59, 127, 230);"></i>
                                        <a class="dropdown-item text-white" href="#">PDF to WORD</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="converter.php?in=PDF&out=JPG">PDF to JPG</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="#">PDF to PNG</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-alt" style="color: rgba(255,255,255,0.8);"></i>
                                        <a class="dropdown-item text-white" href="#">PDF to TXT</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-powerpoint " style="color: orange"></i>
                                        <a class="dropdown-item text-white" href="#">PDF to PPT</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tools-sub-menu-sub-div" id="convert-btn-from-image">
                                <h5 class="text-white">Convert from Image</h5>
                                <ul>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="#">Image to All Image Type</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-pdf text-danger"></i>
                                        <a class="dropdown-item text-white" href="#">Image to PDF</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-powerpoint " style="color: orange"></i>
                                        <a class="dropdown-item text-white" href="#">Image to PPT</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tools-sub-menu-sub-div" id="convert-btn-from-doc">
                                <h5 class="text-white">Convert from WORD</h5>
                                <ul>
                                    <li>
                                        <i class="far fa-file-pdf text-danger"></i>
                                        <a class="dropdown-item text-white" href="#">WORD to PDF</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="#">WORD to JPG</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="#">WORD to PNG</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file" style="color: rgba(255,255,255,0.8);"></i>
                                        <a class="dropdown-item text-white" href="#">WORD to TIFF</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-code" style="color: rgb(180, 204, 153)"></i>
                                        <a class="dropdown-item text-white" href="#">WORD to HTML</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-alt" style="color: rgba(255,255,255,0.8);"></i>
                                        <a class="dropdown-item text-white" href="#">WORD to TXT</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tools-sub-menu-sub-div" id="convert-btn-from-ppt">
                                <h5 class="text-white">Convert from PPT</h5>
                                <ul>
                                    <li>
                                        <i class="far fa-file-pdf text-danger"></i>
                                        <a class="dropdown-item text-white" href="#">PPT to PDF</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="#">PPT to JPG</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="#">PPT to PNG</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file" style="color: rgba(255,255,255,0.8);"></i>
                                        <a class="dropdown-item text-white" href="#">PPT to TIFF</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More PDF Tools
                    </a>

                    <ul class="dropdown-menu" id="tools-sub-menu-div-2" aria-labelledby="navbarDropdown" style=" padding: 0;">

                        <div id="tools-sub-menu-2" class="bg-dark text-white" style="display: flex; padding: 20px 30px;  ">

                            <div class="tools-sub-menu-sub-div" id="convert-btn-from-ppt">
                                <h5 class="text-white">More PDF Tools</h5>
                                <ul>
                                    <li>
                                        <i class="far fa-file-image" style="color: wheat;"></i>
                                        <a class="dropdown-item text-white" href="#">Extract-Images</a>
                                    </li>
                                    <li>
                                        <i class="far fa-file-pdf text-danger"></i>
                                        <a class="dropdown-item text-white" href="#">Compress</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>

            </ul>

        </div>

    </div>
</nav>
