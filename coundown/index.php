<!-- PHP only executed on the server`s side -->
<?php
    if (isset($_POST['submit'])) {
        /* if submit button is pressed send me an email */
        $from = $_Post['email'];
        $to = 'afsm1995@live.com';
        $subject = 'Email signup';
        $body = "Please sign me up to the mailing list";
        /* if for invalid email */
        /* red color with "text-danger", then fontawsome icon, then spacing with &nbsp, then message */
        /* "&nbsp;" allows you to create multiple spaces that are visible on a web page and not only in the source code. */
        if (!$_POST['email']) {
            $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid address</div';
        }
        /* if for valid email */
        /* green color with "text-success", then fontawsome icon, then spacing with &nbsp, then message */
        /* "&nbsp;" allows you to create multiple spaces that are visible on a web page and not only in the source code. */
        if (!$emailError) {
            if (mail ($to, $subject, $body, $from)) {
                $result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Thank you we\`ll keep you updated</div';
            /* in case of an error */
            } else {
                $result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Sorry there has been an error, please try again</div';
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Wild West Academy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font-awesome.css -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <!-- google_fonts.css -->
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
</head>

<body>
    <!-- website logo -->
    <!-- in its own section so we can style it -->
    <section id="logo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- "img-fluid" bootstrap 4 so that images change size-->
                    <img src="img/image.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- introduction text -->
    <!-- in its own section so we can style it -->
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>we`re working hard, we`ll be ready to launch in...</p>
                </div>
            </div>
        </div>
    </section>
    <!-- external countdown -->
    <!-- in its own section so we can style it -->
    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="countdown"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- social media icons -->
    <!-- in its own section so we can style it -->
    <section id="icons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- "****-inline" will not force breaks after the list items and they will line up horizontally. -->
                    <ul class="list-inline">
                        <a href="www.twitter.com" target="blank">
                            <!-- twitter so can be accesed from .css -->
                            <li class="list-inline-item"><i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></li>
                        </a>
                        <a href="www.facebook.com" target="blank">
                            <!-- facebook so can be accesed from .css -->
                            <li class="list-inline-item"><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i></li>
                        </a>
                        <a href="www.google.com" target="blank">
                            <!-- google-plus so can be accesed from .css -->
                            <li class="list-inline-item"><i class="fa google-plus fa-google-plus-square fa-3x" aria-hidden="true"></i></li>
                        </a>
                        <a href="www.instagram.com" target="blank">
                            <!-- instagram so can be accesed from .css -->
                            <li class="list-inline-item"><i class="fa instagram fa-instagram fa-3x" aria-hidden="true"></i></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- email form -->
    <!-- in its own section so we can style it -->
    <section id="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- "****-inline" will not force breaks after the list items and they will line up horizontally. -->
                    <!-- "role" for people that use screen readers, "post" info placed in the form cant be cashed or bookmarked -->
                    <!-- were the user is sent after the form is submited, "signup, what this form is named" keeps users on this site. -->
                    <form class="form-inline" role="form" method="post" action="#signup">
                        <!-- "email, look for @, form-control, adds required padding, sm size of imput, name= what we link to with PHP -->
                        <!-- "enter your email, goe inside the email text field the user sees -->
                        <input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email">
                        <!-- "find out more, goe inside the button the user sees -->
                        <!-- class="btn btn-signup btn-sm" desings the button -->
                        <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">find out more</button>
                    </form>
                    <!-- implementing PHP -->
                    <?php echo $emailError;?>
                    <?php echo result;?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Popper.js is part of bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- jquery.countdown.js -->
    <!-- counter integration -->
    <!-- text copied from documintation -->
    <!-- https://github.com/rendro/countdown -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script>
        $(function() {
            $('.countdown').countdown({
                date: "June 7, 2087 15:03:26"
            });
        });
    </script>
</body>
</html>