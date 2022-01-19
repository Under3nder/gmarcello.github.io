<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garonzi Marcello</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $filename = "data.json";
    $data = array();

    // Read data from the file $filename
    if (file_exists($filename)) {
        $file = fopen($filename, "r");
        $stringFile = fread($file, filesize($filename));
        fclose($file);

        // Set data dictionary content
        $data = json_decode($stringFile, true);
    } else {
        $data = array("views" => 0);
    }

    // Update data
    $data["views"] += 1;

    // Save data updated content
    $file = fopen($filename, "w");
    fwrite($file, json_encode($data) . "\n");
    fclose($file);
    ?>

    <div class="menu" id="menu">
        <div class="topbar">
            <div class="closebutton" onclick="closeMenu()">
                <span></span>
                <span></span>
            </div>
        </div>
        <h1>Menu</h1>

        <div class="items">
            <div class="item">
                <div class="dropdown" onclick="toggleDropdown(0)">
                    Works<span></span>
                </div>
                <div class="content">
                    <div class="sub-item">Reaction test</div>
                    <div class="sub-item">CPS test</div>
                    <div class="sub-item">Fade in</div>
                </div>
            </div>
            <div class="item">
                <div class="dropdown" onclick="toggleDropdown(1)">
                    About<span></span>
                </div>
                <div class="content">
                    <div class="sub-item">Myself</div>
                    <div class="sub-item">My studies</div>
                    <div class="sub-item">Contacts</div>
                </div>
            </div>
        </div>
    </div>

    <header>
        <nav>
            <div onclick="openMenu()" class="button" id="menu">
                <img src="img/icon-menu.svg" alt="Menu" id="toogleMenuButton" />
            </div>
            <div class="button">
                <a href="#"><img src="img/icon-home.svg" alt="Home" /></a>
            </div>
            <div class="button">
                <img src="img/icon-user.svg" alt="About" />
            </div>
            <div class="link">
                <a href="https://instagram.com" target="blank"><img src="img/icon-instagram.svg" alt="Instagram" /></a>
            </div>
            <div class="link">
                <a href="https://github.com/Under3nder" target="blank"><img src="img/icon-github.svg"
                        alt="Github" /></a>
            </div>
            <div class="link">
                <span style="font-family:Consolas">
                    <?php
                    echo("visitor: #" . $data["views"]);
                    ?>
                </span>
            </div>
        </nav>

        <div class="header-container">
            <div class="text">
                <div>
                    <div>
                        <h1>Garonzi Marcello</h1>
                        <span></span>
                    </div>
                    <p>
                        Web developer, games developer, graphic designer, AI engeneer,
                        fullstack developer, freelancer, superhero, Lebron James, give
                        back Egypt to the cats.
                    </p>
                </div>
            </div>
            <div class="image">
                <div class="window">
                    <div class="top">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span style="width: 34%"></span>
                    <span style="width: 21%"></span>
                    <span style="width: 9%; margin-left: 20px"></span>
                    <span style="width: 39%; margin-left: 20px"></span>
                    <span style="width: 27%; margin-left: 30px"></span>
                    <span style="width: 22%"></span>
                    <span style="width: 5%"></span>
                </div>
            </div>
        </div>
    </header>

    <div>
        <section>
            <div class="cards-3d-screen">
                <div class="cards-3d-container">
                    <div class="cards-3d-line">
                        <div class="card-3d" style="--h:180; --m:200">
                            <span style="width: 65%;"></span>
                            <span style="width: 50%;"></span>
                        </div>
                        <div class="card-3d" style="--h:230; --m:30">
                            <div class="title">Python</div>
                            <img src="img/logo-python.png">
                        </div>
                        <div class="card-3d" style="--h:120; --m:100"></div>
                        <div class="card-3d" style="--h:230; --m:40">
                            <div class="title">C/C++/C#</div>
                            <img src="img/logo_c.png">
                        </div>
                    </div>
                    <div class="cards-3d-line">
                        <div class="card-3d" style="--h:200; --m:100">
                            <div class="title">Assembly</div>
                            <img src="img/logo-assembly.png">
                        </div>
                        <div class="card-3d" style="--h:150; --m:30"></div>
                        <div class="card-3d" style="--h:240; --m:100">
                            <div class="title">Java</div>
                            <img src="img/logo-java.png">
                        </div>
                        <div class="card-3d" style="--h:180; --m:40">
                            <span style="width: 55%;"></span>
                            <span style="width: 30%;"></span>
                        </div>
                    </div>
                    <div class="cards-3d-line">
                        <div class="card-3d" style="--h:230; --m:0">
                            <span style="width: 40%;"></span>
                            <span style="width: 60%;"></span>
                        </div>
                        <div class="card-3d" style="--h:130; --m:20"></div>
                        <div class="card-3d" style="--h:200; --m:70">
                            <div class="title">Powershell</div>
                            <img src="img/logo-powershell.png">
                        </div>
                        <div class="card-3d" style="--h:170; --m:100">
                            <span style="width: 50%;"></span>
                            <span style="width: 55%;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="programming-languages">
                <div class="left">
                    <div class="text">
                        <h1>Programmer</h1>
                        <p>
                            I'm studying IT and I really love coding, it is my favourite hobby.
                            I pay really much attention during IT lessons and I learn every programming language very quick.
                        </p>
                        <p>
                            My favourite language is Python, beacuse it's easy to learn, really powerful and it's the one I know
                            the best. Anyway I also love coding with Java because you can do a huuuge amount of things with it.
                        </p>
                        <p>
                            Here it is a chart of my programming capacities.
                        </p>
                        <div class="legend">
                            Legend:
                            <div class="legend-line">
                                <span class="color"></span>Skill
                            </div>
                            <div class="legend-line">
                                <span class="color"></span>Knowledge
                            </div>
                            <div class="legend-line">
                                <span class="color"></span>Usage
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="chart">
                        <div class="column-group">
                            <div class="skill" style="height: 84%;"><span class="percentage">84%</span></div>
                            <div class="knowledge" style="height: 76%;"><span class="percentage">76%</span></div>
                            <div class="usage" style="height: 16%;"><span class="percentage">16%</span></div>
                        </div>
                        <div class="column-group">
                            <div class="skill" style="height: 97%;"><span class="percentage">97%</span></div>
                            <div class="knowledge" style="height: 91%;"><span class="percentage">91%</span></div>
                            <div class="usage" style="height: 78%;"><span class="percentage">78%</span></div>
                        </div>
                        <div class="column-group">
                            <div class="skill" style="height: 32%;"><span class="percentage">32%</span></div>
                            <div class="knowledge" style="height: 45%;"><span class="percentage">45%</span></div>
                            <div class="usage" style="height: 3%;"><span class="percentage">3%</span></div>
                        </div>
                        <div class="name">Java</div>
                        <div class="name">Python</div>
                        <div class="name">C</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="text">
                <h1>Web Deviloper</h1>
                <p>
                    I also have a good knowledge as a web developer. Here there is a
                    simple list of my skills on web programming languages.
                </p>
            </div>
            <div class="image-container">
                <div class="image">
                    <div class="hecker">
                        <div class="person"></div>
                        <div class="computer">
                            <div class="screen"></div>
                            <div class="stand"></div>
                        </div>
                        <div class="table"></div>
                    </div>
                    <div class="skills">
                        <div class="skill" style="background: #ff493c; width: 89%">
                            HTML 89%
                        </div>
                        <div class="skill" style="background: #3787ff; width: 95%">
                            CSS 95%
                        </div>
                        <div class="skill" style="background: #fde231; width: 81%">
                            JavaScript 81%
                        </div>
                        <div class="skill" style="background: #2adf2a; width: 16%">
                            Php 16%
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="squares">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
    </div>

    <footer>
        <div class="links">
            <a href="https://codepen.io/Under3nder">
                <div class="link">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <img src="img/icon-codepen.png">
                </div>
            </a>
            <a href="https://stackoverflow/Under3nder">
                <div class="link">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <img src="img/icon-stackoverflow.png">
                </div>
            </a>
            <a href="https://github.com/Under3nder">
                <div class="link">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <img src="img/icon-github.svg">
                </div>
            </a>
        </div>
    </footer>

    <script src="fade-in.js"></script>
    <script src="functions.js"></script>
</body>

</html>