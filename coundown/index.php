<?php

    if (isset($_POST['submit'])) {
        
        $from = $_POST['email'];
        $to = 'alvaro@alvarosantillan.com';
        $subject = 'Email signup';
        $body = 'Please sign me up to the mailing list';
        
        if (!$_POST['email']) {
            $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
        }
        
        if (!$emailError) {
            if (mail ($to, $subject, $body, $from)) {
                $result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;thank you I\'ll keep you updated</div>';
            } else {
                $result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;sorry there has been an error, please try again</div>';
            }
        }
        
    }

?>

<!doctype html>
<html lang="en">
 
    <head>

        <!-- required meta tags -->
        <title>Álvaro F Santillan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="img/favicon.png" rel="icon">
        
        <!-- external resources -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!-- Goole Fonts need to clean -->
        <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bungee|Nunito+Sans:700" rel="stylesheet">
        
        <link href="css/responsive.css" rel="stylesheet">

    </head>
  
    <body>
       
        <section id="introMessage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <p>Hello, I’m Al, a CU Boulder junior majoring in Computer Science (BS)</p>
                    </div> 
                </div>
            </div>  
        </section>
        
        <section id="mainMessage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>I'm in the works to launch a beautiful and professionally designed personal website!</p>
                        <p>I just need to finish my exams first.</p>
                        <p>In the meantime, sign up to be notified about the websites great reveal.</p>
                    </div>
                </div>
            </div>  
        </section>

        <section id="countdown-timer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="countdown"></div>                
                    </div>
                </div>
            </div>  
        </section>

        <section id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-inline" method="post" action="#signup">
                            <input type="email" class="form-control form-control-sm" name="email" placeholder="Pssst, type your email">
                            <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Take me breath away</button>
<!--
                         <p>
                         while (emailSubmitted && haveDignity) {
                            <br>!spamAdmirer;<br>
                         }
                         </p> 
-->
                        </form>
                            <?php echo $emailError;?>
                            <?php echo $result;?>
                    </div>
                </div>
            </div>  
        </section>
        
        <section id="social-icons">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline">
                          
                           <a href="https://github.com/AFSM1995" target="#"><li class="list-inline-item"><i class="fab fa-github-square fa-3x" aria-hidden="true"></i></li></a>                             
                           <a href="https://drive.google.com/file/d/1oJEurhMurC-LhqLdDZoYkuvMs0rJdCyv/view?usp=sharing" target="#"><li class="list-inline-item"><i class="fas fa-envelope-square fa-3x" aria-hidden="true"></i></li></a>
                           
                           <a href="https://drive.google.com/file/d/1oJEurhMurC-LhqLdDZoYkuvMs0rJdCyv/view?usp=sharing" target="#"><li class="list-inline-item"><i class="fab fa-google-drive fa-3x" aria-hidden="true"></i></li></a> 

                           <a href="https://www.linkedin.com/in/alvaro-santillan-2b0764173/" target="#"><li class="list-inline-item"><i class="fab fa-linkedin fa-3x" aria-hidden="true"></i></li></a> 
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="copyMessage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <p>Copyright © 2018 Álvaro Santillan. All rights reserved.</p>
                    </div> 
                </div>
            </div>  
        </section>
        
    <!-- external resources: jquery, then bootstrap.js -->
    <script src="js/jquery/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/countdown/jquery.countdown.js"></script>
    <script src="js/custom.js"></script>
    
  </body>
  
</html>