<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jose Castillo P1</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('images/home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Jose Castillo</h1>
                        <hr class="small">
                        <span class="subheading">Project 1</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div align = center class="post-preview">

                        <h2 class="post-title">
                            About Me
                        </h2>
                            My name is Jose, I am currently working in IT and trying to learn more about web development. My hobbies including cooking (and fermenting) many types of food and beverages,
                            hiking, watching old movies, and playing golf.

                </div>
                <hr>
                <div align = 'center' class="post-preview">

                      <h2 class="post-title">
                          Movie Quote of the Day
                      </h2>
                      <div align="center">

                            <?php
                            $quotes=array("Here's looking at you, kid.","I'm gonna make him an offer he can't refuse.","You talking to me?","Open the pod bay doors, HAL. ",
                            "Anne-Marie, do all the interns get Glocks?", "That sounds like poetry. Poems don’t always have to rhyme, you know. They’re just supposed to be creative.", "So, where was I?", "Joey, do you like movies about gladiators?");
                            $movies=array("Casablanca", "The Godfather", "Taxi Driver", "2001: A Space Odyssey", "Life Aquatic", "Moonrise Kingdom", "Memento", "Airplane!");

                            $n=count($quotes);
                            $num=rand(0, ($n-1));
                            $quote=$quotes[$num];
                            $movie=$movies[$num];
                            $text=$quote;
                            $from=$movie;

                            print "<i>$text - </i>";
                            print "<strong>$from</strong>";
                            ?>

                </div>

            </div>
        </div>
    </div>

    <hr>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
