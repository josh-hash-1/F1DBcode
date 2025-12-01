<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Default styling for the page -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Global styles shared across the site -->
    <link rel="stylesheet" href="css/global.css">
    <!-- Page-specific styling for Best Drivers -->
    <link rel="stylesheet" href="css/best_driver.css">
    <title>
        Best Drivers
    </title>
</head>
<body>
    <!-- Include site header/navigation -->
    <?php include "Header.php" ?>

    <!-- Main title section -->
    <div class="title_first">
        <h1>Top Drivers - Hall of Fame</h1>
    </div>

    <!-- Container for all driver cards -->
    <div class="project-container">

        <!-- Individual driver card -->
        <div class="project-card-top">
            <h1>Juan Manuel Fangio</h1>
            <!-- Driver image -->
            <div class="project-card-image-box">
                <img src="images/juan_manuel_angio.png" title="Photo of Juan Manuel Fangio" alt="Photo of Juan Manuel Fangio">
            </div>
            <div class="project-card-body"></div>
            <!-- Driver achievements -->
            <p><strong>5× World Champion</strong></p>
            <p><strong>1951, 1954, 1955, 1956, 1957</strong></p>
            <p><strong>Alfa Romeo, Maserati, Mercedes & Ferrari</strong></p>
            <!-- External link to Wikipedia -->
            <a href="https://en.wikipedia.org/wiki/Juan_Manuel_Fangio" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>  
        </div>

        <!-- Repeat structure for other drivers -->
        <div class="project-card-top">
            <h1>Niki Lauda</h1>
            <div class="project-card-image-box">
                <img src="images/niki_lauda.png" title="Photo of Niki Lauda" alt="Photo of Niki Lauda">
            </div>
            <div class="project-card-body"></div>
            <p><strong>3× World Champion</strong></p>
            <p><strong>1975, 1977, 1984</strong></p>
            <p><strong>Ferrari & Mclaren</strong></p>
            <a href="https://en.wikipedia.org/wiki/Niki_Lauda" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>    
        </div>

        <div class="project-card-top">
            <h1>Alain Prost</h1>
            <div class="project-card-image-box">
                <img src="images/alain_prost_HOF.png" title="Photo of Alain Prost" alt="Photo of Alain Prost">
            </div>
            <p><strong>4× World Champion</strong></p>
            <p><strong>1985, 1986, 1989, 1993</strong></p>
            <p><strong>McLaren & Williams</strong></p>
            <a href="https://en.wikipedia.org/wiki/Alain_Prost" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>                    
        </div>

        <div class="project-card-top">
            <h1>Ayrton Senna</h1>
            <div class="project-card-image-box">
                <img src="images/ayrton_senna.png" title="Photo of Ayrton Senna" alt="Photo of Ayrton Senna">
            </div>
            <div class="project-card-body"></div>
            <p><strong>3× World Champion</strong></p>
            <p><strong>1988, 1990, 1991</strong></p>
            <p><strong>Mclaren</strong></p>
            <a href="https://en.wikipedia.org/wiki/Ayrton_Senna" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>  
        </div>

        <div class="project-card-top">
            <h1>Michael Schumacher</h1>
            <div class="project-card-image-box">
                <img src="images/Michael_Schumacher.jpg" title="Photo of Michael Schumacher" alt="Photo of Michael Schumacher">
            </div>
            <p><strong>7× World Champion</strong></p>
            <p><strong>1994, 1995, 2000, 2001, 2002, 2003, 2004</strong></p>
            <p><strong>Benetton & Ferrari</strong></p>
            <a href="https://en.wikipedia.org/wiki/Michael_Schumacher" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>    
        </div>

        <div class="project-card-top">
            <h1>Lewis Hamilton</h1>
            <div class="project-card-image-box">
                <img src="images/lewis_hamilton.jpg" title="Photo of Lewis Hamilton" alt="Photo of Lewis Hamilton">
            </div>
            <p><strong>7× World Champion</strong></p>
            <p><strong>2008, 2014, 2015, 2017, 2018, 2019, 2020</strong></p>
            <p><strong>McLaren & Mercedes</strong></p>
            <a href="https://en.wikipedia.org/wiki/Lewis_Hamilton" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>   
        </div>

        <div class="project-card-top">
            <h1>Sebastian Vettel</h1>
            <div class="project-card-image-box">
                <img src="images/sebastian_vettel.jpg" title="Photo of Sebastian Vettel" alt="Photo of Sebastian Vettel">
            </div>
            <div class="project-card-body"></div>
            <p><strong>4× World Champion</strong></p>
            <p><strong>2010, 2011, 2012, 2013</strong></p>
            <p><strong>Red Bull Racing</strong></p>
            <a href="https://en.wikipedia.org/wiki/Sebastian_Vettel" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>    
        </div>

        <div class="project-card-top">
            <h1>Max Verstappen</h1>
            <div class="project-card-image-box">
                <img src="images/max_verstappen.png" title="Photo of Max Verstappen" alt="Photo of Max Verstappen">
            </div>
            <div class="project-card-body"></div>
            <p><strong>3× World Champion</strong></p>
            <p><strong>2021, 2022, 2023</strong></p>
            <p><strong>Red Bull Racing</strong></p>
            <a href="https://en.wikipedia.org/wiki/Max_Verstappen" target="_blank">
                <button class="project-card-top-btn">
                    Click me!
                </button>   
            </a>   
        </div>

    </div>
    <!-- Include site footer -->
    <?php include "Footer.php" ?>
</body>
</html>
