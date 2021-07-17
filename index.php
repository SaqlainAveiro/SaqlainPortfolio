<?php

if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $mailFrom = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailTo = "saqlainahs@gmail.com";
    $header = "You have an email from your portfolio!";
    $text = "Name: ".$name."\nFrom: ".$mailFrom."\nSubject: ".$subject."\nMessage: \n".$message."\n\n";
    

    mail($mailTo, $subject, $text, $header);

    header("Location: index.php");
}

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">               <!-- Initial scale is used for ensuring the proper function of the website regardless of any size of devices -->
        <title>My Portfolio</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Images/s_logo.png">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://kit.fontawesome.com/71d116d1c5.js" crossorigin="anonymous"></script>
    </head>


    <body>

        <!--Navigation Section-->
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="#">Portfo<span>lio</span></a></div>
                <ul class="menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#links">Contact</a></li>
                    <li><a href="#cv">CV</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>


        <!--Home Section-->
        <section class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <img class="profile-pic" src="Images/SaqlainPhoto.JPG">
                    <div class="text-1">Hi! This is</div>
                    <div class="text-2">Md. Anwarul Habib</div>
                    <div class="text-3">And I'm a <span>Student</span></div>
                </div>
            </div>
        </section>

        
        <!--About Section-->
        <section class="about" id="about">
            <div class="about-content">
                <h2 class="head" style="font-size: xx-large; font-weight: bolder;">About Me</h2>
                <p class="para" style="font-weight: normal; font-size: large; margin: 10px; text-align: justify;">
                    I am a student, living in Dhaka, 
                    Bangladesh, pursuing my B.Sc. in CSE from AUST. I am from the 41st batch of the CSE department. Currently I am in 3rd 
                    Year and 2st Semester. Artificial Inteligence is the field that attracts me. Besides I do some 
                    competitive programming practice. Being a Software Engineer and doing Research in this field 
                    professionaly is my goal.
                </p>
            </div>
        </section>



        <!--Skills Section-->
        <section class="skills" id="skills">
            <div class="skills-content">
                <p class="head" style="font-weight: bolder; font-size: xx-large;">My Programming Skills</p>
                
                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/c++.png"></div>
                        <p>C++</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/java.png"></div>
                        <p>Java</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/python.png"></div>
                        <p>Python</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/php.png"></div>
                        <p>PHP</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/javascript.png"></div>
                        <p>JS</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/html.png"></div>
                        <p>HTML</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/css.png"></div>
                        <p>CSS</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="logo"><img src="Images/mysql.png"></div>
                        <p>MySQL</p>
                    </div>
                </div>

            </div>
        </section>
        
        
        <!--Contact Section-->
        <section class="contact" id="contact">
            <div class="contact-content">
                <p class="head" style="font-weight: bolder; font-size: xx-large;">Contact</p>

                <div class="col-box">

                    <div class="column-left">

                        <p class="Contact-Header">Mail:</p>

                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="header">Name: </div>
                                <div class="detail">Md. Anwarul Habib</div>
                            </div>
                        </div>

                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="header">Address: </div>
                                <div class="detail">Dhaka, Bangladesh</div>
                            </div>
                        </div>

                        <div class="row">
                            <i class="far fa-envelope"></i>
                            <div class="info">
                                <div class="header">Email: </div>
                                <div class="detail"><a href="mailto:saqlainahs@gmail.com">saqlainahs@gmail.com</a></div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="column-right">

                        <p class="Contact-Header">Details:</p>

                        <form action="mail.php" method="POST">

                            <div class="fields">

                                <div class="field-name">
                                    <input type="text" name="Name" placeholder="Name" required>
                                </div>

                                <div class="field-email">
                                    <input type="email" name="Email" placeholder="Email" required>
                                </div>

                                <div class="field-subject">
                                    <input type="text" name="Subject" placeholder="Subject" required> 
                                </div>

                                <div class="field-message">
                                    <textarea cols="30" name="Message" rows="10" placeholder="Message.." required></textarea>
                                </div>

                                <div class="button">
                                    <button type="submit">Send Mail</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

                <!--<ul class="Link_Class_Ul" style="font-size: large;">
                    <li>E-mail : <a href="https://saqlainahs@gmail.com">saqlainahs@gmail.com</a></li>
                    <li>Edu-mail : <a href="https://180104129@aust.edu">180104129@aust.edu</a></li>
                    <li>Facebook : <a href="https://www.facebook.com/saqlain.is.dead/">Saqlain Habib</a></li>
                    <li>Codeforces : <a href="https://codeforces.com/profile/Saqlain_-">Saqlain_-</a></li>
                    <li>Toph : <a href="https://toph.co/u/Saqlain7">Saqlain7</a></li>
                    <li>Linked In : <a href="https://www.linkedin.com/in/saqlain-habib-887861178/">Saqlain Habib</a></li>
                    <li>GitHub : <a href="https://github.com/SaqlainAveiro">Saqlain Aveiro</a></li>
                    </ul>
                -->  
            </div>
        </section>

        
        <!--CV Section-->
        <section class="cv" id="cv">
            <div class="cv-content">
                <p class="head" style="font-weight: bolder; font-size: xx-large;">CV</p>
                <div class="para">
                    <p style="font-weight: bold; font-size: larger;">You can download my CV from here. <a href="CV/Saqlain_CV.pdf">CV</a></p>
                </div>
            </div>
        </section>

        <footer>

        </footer>

        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="script.js"></script>
    </body>


</html>
