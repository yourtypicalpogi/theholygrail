<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Not a Bot</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        />
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row min-vh-100">
                <div
                    class="bg-primary pt-4 col-auto col-md-auto border-end border-bv"
                >
                    <nav class="nav flex-nowrap">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-3 m-2"
                                        >code</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><span
                                        class="material-symbols-outlined fs-3 m-2"
                                        >auto_stories</span
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-3 m-2"
                                        >terminal</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-3 m-2"
                                        >bolt</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-3 m-2"
                                        >warning</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-3 m-2"
                                        >archive</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><span
                                        class="material-symbols-outlined fs-3 m-2"
                                        >sword_rose</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <div class="row pt-3">
                        <div class="col-12 col-md-6 pe-md-1 mb-2 mb-md-0">
                            <div class="card bg-bv h-100">
                                <div class="card-body">
                                    <p class="ps-2 fs-4 mb-2">cURL</p>
                                    <textarea
                                        id="curl"
                                        rows="10"
                                        class="form-control bg-bv"
                                    ></textarea>
                                    <div class="row">
                                        <div class="col pe-1">
                                            <button
                                                class="btn btn-bv mx-auto mb-2 w-100"
                                                onclick="generate_curl()"
                                            >
                                                <span
                                                    class="material-symbols-outlined"
                                                    >code</span
                                                >
                                                Generate
                                            </button>
                                        </div>
                                        <div class="col ps-1">
                                            <button
                                                class="btn btn-bv mx-auto mb-2 w-100"
                                                onclick="delete_curl('curl')"
                                            >
                                                <span
                                                    class="material-symbols-outlined"
                                                    
                                                    >delete</span
                                                >
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-12 col-md-6 ps-md-1">
                                <div class="card bg-bv h-100">
                                    <div class="card-body">
                                        <p class="ps-2 fs-4 mb-2">PHP</p>
                                        <textarea
                                            id="php"
                                            rows="10"
                                            class="form-control bg-bv mt-0"
                                        ></textarea>
                                        <div class="row">
                                            <div class="col pe-1">
                                                <button
                                                    class="btn btn-bv mx-auto mb-2 w-100"
                                                    onclick="copy_curl()"
                                                >
                                                    <span
                                                        class="material-symbols-outlined"
                                                        >content_copy</span
                                                    >
                                                    Copy
                                                </button>
                                            </div>
                                            <div class="col ps-1">
                                                <button
                                                    class="btn btn-bv mx-auto mb-2 w-100"
                                                    onclick="delete_curl('php')"
                                                >
                                                    <span
                                                        class="material-symbols-outlined"
                                                        >delete</span
                                                    >
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        const generate_curl = () => {
            const curl = document.getElementById("curl").value;
            fetch("generate_curl.php", {
                method: "post",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    curl: curl,
                }),
            })
                .then((response) => response.text())
                .then((data) => {
                    const response = JSON.parse(data);
                    headers = [];
                    response["headers"].forEach((header) => {
                        headers.push(`"${header}",`);
                    });
                    if (response["method"] == "get") {
                        document.getElementById("php").value = `$url = "${
                            response["url"]
                        }";\n$headers = [\n\t${headers.join(
                            "\n\t"
                        )}\n];\n$response = $requests->${
                            response.method
                        }($url, $headers);`;
                    } else {
                        document.getElementById("php").value = `$url = "${
                            response["url"]
                        }";\n$headers = [\n\t${headers.join(
                            "\n\t"
                        )}\n];\n$post = "${
                            response["postfield"]
                        }";\n$response = $requests->${
                            response.method
                        }($url, $headers, $post);`;
                    }
                })
                .catch((error) => console.error("Error:", error));
        };



        const copy_curl = () => {
            const curl = document.getElementById("php");

            curl.select();

            document.execCommand("copy");
        };
        const delete_curl = (id) => (document.getElementById(id).value = "");
    </script>
</html>
