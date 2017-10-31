<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Jumbotron Template for Bootstrap</title>

        <!-- Stylesheets  Here -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/css/main.css" rel="stylesheet" />
    </head>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">


<!-- PHP Code Starts Here -->
                <?php
                    // Creating opening unorder list element
                    echo "<ul class=\"navbar-nav mr-auto\">";

                    // Foreach menu item in the data array get the index and key
                    foreach($data as $x => $x_value) {

                        $className;
                        if ($data2["pagename"]==$x) {
                            $className = "nav-item active";
                        } else {
                            $className = "nav-item";
                        }
            
                        /* Create a list element with an anchor tag thats whos href 
                        is the index and has appended value and closing tags. */
                        echo "<li class=\"$className\" ><a class=\"nav-link\" href=\"/controller/$x\">".$x_value."</a></li>";
        
                    }
                ?>
<!-- PHP Code Ends Here -->


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/welcome">Welcome Controller</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>