<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>The Holy Grail</title>
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
                <div class="bg-thg pt-4 col-auto col-md-auto">
                    <nav class="nav flex-nowrap">
                        <ul class="navbar-nav px-0 ps-1">
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-4 m-2"
                                        >construction</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-4 m-2"
                                        >auto_stories</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-4 m-2"
                                        >terminal</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-4 m-2"
                                        >archive</i
                                    ></a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"
                                    ><i
                                        class="material-symbols-outlined fs-4 m-2"
                                        >sword_rose</i
                                    ></a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <div
                        class="container h-100 w-75 d-flex mx-auto align-items-center"
                    >
                        <div class="row">
                            <div class="col-12 col-md-3 mb-3 mt-4 m-md-0">
                                <div class="image-container">
                                    <img
                                        class="profile"
                                        src="src/pogi.jpeg"
                                        alt=""
                                    />
                                    <p class="text">Pogi</p>
                                </div>
                            </div>
                            <?php
                            $members = [
                                "Chae" => "chae", 
                                "Mobi" => "mobi", 
                                "Misaka" => "misaka", 
                                "Ramyeun" => "ramyeun", 
                                "Jaehwqn" => "jaehwan", 
                                "Saitama" => "saitama", 
                                "Chillz" => "chillz"
                            ];
                            foreach($members as $name => $image) { 
                                echo '<div class="col-12 col-md-3 mb-3">
                                        <div class="image-container">
                                            <img
                                                class="profile"
                                                src="src/'.$image.'.jpeg"
                                                alt=""
                                            />
                                        
                                            <p class="text">'.$name.'</p>
                                        </div>
                                    </div>
                                '; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
