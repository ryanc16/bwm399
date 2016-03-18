<?php
    include('includes/session_update.php');
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>APP Club - Programming Competitions</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom css -->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" src="images/AppLogo.png">
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="events.php">Events Home</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="gamejam.php">GameJam</a></li>
                            <li class="active"><a href="programming.php">Programming Competition</a></li>
                            <li><a href="fundraisers.php">Fundraisers</a></li>
                        </ul>
                    </li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="members.php">Members</a></li>
                </ul>
                <?php
                    if(isset($_SESSION['logged_in'])){
                        echo('
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['email'].'<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="includes/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    ');
                        }
                    ?>
            </div>
        </div>
    </nav>
    <section id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Programming Competitions</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <p>Programming competitions are held in the spring semester of the school year. They consist of teams of up to three people using only one computer. Participating teams are only allowed to utilize the API and reference books.</p>
                    <p>Two categories exist for the competition based on level of experience. There is the Novice and Expert divisions. A perticipant may compete in the novice level if they have not taken CIT360 yet. Anyh participant who is currently in or has taken CIT360 must compete in the Expert Level.</p>
                    <p>Prizes will be awarded to the top 3 teams fom each category.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="extra-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>Past Problem Sets</h2>
                    <p>
                        <a href="docs/novice-problems-2015.pdf" class="btn btn-success" target="new">Novice 2015 PDF</a>
                        <a href="docs/expert-problems-2015.pdf" class="btn btn-danger" target="new">Expert 2015 PDF</a>
                        <br><br>
                        <a href="docs/novice-problems-2014.pdf" class="btn btn-success" target="new">Novice 2014 PDF</a>
                        <a href="docs/expert-problems-2014.pdf" class="btn btn-danger" target="new">Expert 2014 PDF</a>
                    </p>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <h2>Register for this year</h2>
                    <a href="#"><img src="images/GoogleDrive-Logo.png" style="width: 50px;" /> Google Forms</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Club Constitution</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p>Copyright &copy; 2016 APP Club</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery2.2.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>

</html>