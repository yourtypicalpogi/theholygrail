<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        />
        <link rel="stylesheet" href="../../index.css" />

        <title>Curl Generator</title>
    </head>

    <body>
        <div class="container-fluid vh-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="material-symbols-outlined"
                                    >cookie</span
                                >
                                Curl Generator
                            </h5>
                            <textarea
                                class="form-control mb-3"
                                id="curl"
                                rows="7"
                            ></textarea>
                            <div class="row">
                                <div class="col-8 pe-0">
                                    <button
                                        class="btn btn-sm w-100 mb-2"
                                        onclick="generate_curl()"
                                    >
                                        <span class="material-symbols-outlined"
                                            >cookie</span
                                        >
                                        GENERATE
                                    </button>
                                </div>
                                <div class="col-2">
                                    <button
                                        class="btn btn-sm w-100 mb-2"
                                        onclick="copy_curl()"
                                    >
                                        <span class="material-symbols-outlined"
                                            >content_copy</span
                                        >
                                    </button>
                                </div>
                                <div class="col-2 ps-0">
                                    <button class="btn btn-sm w-100 mb-2">
                                        <span
                                            class="material-symbols-outlined"
                                            onclick="delete_curl()"
                                            >delete</span
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
    
</html>
