<?php

if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $description = $_POST['description'];


    // $sql = "INSERT INTO `myprofile`.`contact` (`name`, `email`, `gender`, `number`, `description`, `date`) VALUES ('$name', '$email', '$gender', '$contact', '$description', current_timestamp());";
    $sql = "INSERT INTO `profile`.`detail` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$gender', '$contact');";


    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_Portfolio</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/myprofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/s.css">
    <link rel="stylesheet" href="css/skill.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/modify.css">


    <style>

        .ce{
            margin: 20px;
            max-width: 10%;
            border-radius: 20px;
        }


        .about {
            border-radius:0%;
            min-height: 60vh;
            background-color: black;
            flex-wrap:wrap;
        }
    </style>


</head>

<body>
    <!-- header start -->
    <header class="header cen">

        <!-- main-menu-start -->
        <div class="free_box">
        </div>
        <div class="main_menu fix">
            <div class="left-logo cen"><!-- left-start-->
                <a href="index.php" class="cen" title="Profile">
                    <p>M</p><span>y_Profile</span>
                </a>
            </div><!-- left-end -->
            <div class="mid-part cen"><!--mid-start -->
            <a class="cen" href="#skill">SKILLs</a>
            <a class="cen" href="#ser">SERVICES</a>
            <a class="cen" href="#a1">ABOUT</a>
                <a class="cen" href="#call">CONTACT</a>
            </div><!--mid-end-->
        </div>
        <!-- main-menu-end -->



    </header>
    <!-- header end -->
    <!-- side-menu-start -->

    <input type="checkbox" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner top"></div>
        <div class="spinner middle"></div>
        <div class="spinner bottom"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="menu">
            <li><a href="#skill">SKILLs</a></li>
            <li><a href="#ser">SERVICES</a></li>
            <li><a href="#a1">ABOUT</a></li>
            <li><a href="#call">CONTACT</a></li>
        </ul>
    </div>
    <!-- side-menu-end -->
    <!-- profile-start -->
    <div class="blank"></div>
    <div class="home cen wrap">
        <div class="left-home">
            <div class="content">
                <h3 id="hey">Hey! It's Me</h3>
                <h1>Sagar Juneja</h1>
                <h3 id="web">And I'm a</h3><span id="loop" class="auto-type"></span>
                <p>I had a dynamic professional with a passion for Computer Science.</p><br><br>
                <a href="https://www.linkedin.com/in/sagar-juneja-47223921b" target="_blank" id="li"><i class="fa-brands fa-linkedin fa-beat fa-2xl" style="color: #005eff;"></i></a>
                <a href="mailto:sagarjuneja9027@gmail.com" target="_blank" id="mail"><i class="fa-solid fa-envelope fa-beat fa-2xl" style="color: #005eff;"></i></a>
            </div>
        </div>
        <div class="right-home">
            <div class="me">
                <img src="images/IMG_20230422_222027.jpg" alt="ME" title="Sagar Juneja" class="image">
            </div>
        </div>
    </div>
        
        
        
        <!-- profile-end -->
        
        <div id="skill" class="skills_section">
        <div class="skills_head">
            <h2>My <span>Skills</span></h2>
            <!-- <p>Here is my skills to represent my Expertise</p> -->
        </div>

        <div class="skills_main">
            <div class="skill_bar">
                <div class="info">
                    <p>HTML</p>
                    <P>90%</P>
                </div>
                <div class="bar">
                    <span class="html"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>CSS</p>
                    <P>85%</P>
                </div>
                <div class="bar">
                    <span class="css"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>Java</p>
                    <P>80%</P>
                </div>
                <div class="bar">
                    <span class="sass"></span>
                </div>
                </div>
            <div class="skill_bar">
                <div class="info">
                    <p>Java Script</p>
                    <P>80%</P>
                </div>
                <div class="bar">
                    <span class="js"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>React js</p>
                    <P>75%</P>
                </div>
                <div class="bar">
                    <span class="react"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>Python</p>
                    <P>70%</P>
                </div>
                <div class="bar">
                    <span class="node"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>Bootstrap</p>
                    <P>65%</P>
                </div>
                <div class="bar">
                    <span class="express"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>C++</p>
                    <P>60%</P>
                </div>
                <div class="bar">
                <span class="mongo"></span>
                </div>
            </div>
        </div>
    </div>


    <!-- ab

    <!-- services-start -->
    <div class="blank"></div>
    <div class="blank"></div>
    <!-- <div class="blank"></div> -->
    <h2 id="ser">SERVICES</h2>
    <div class="blank"></div>

    <div class="services">
        <div class="s" id="box1">
            <div class="brush cen">
                <i class="fa-sharp fa-solid fa-paintbrush fa-flip fa-2xl" style="color: #35e1ed;"></i></i>
            </div>
            <h1>WEB DESIGNS</h1><br>
            <h3 style="font-size:medium;">I try to do good and trending web design, I make all web designs <br>responsive.</h3>
        </div>
        <div class="s" id="box2">
            <div class="seo cen">
                <i class="fa-solid fa-magnifying-glass-chart fa-flip fa-2xl" style="color: #35e1ed;"></i>
            </div>
            <h1>SEO</h1><br>
            <h3 style="font-size: medium;">Search engine optimization:<br>the process of making your site better search engines.</h3>
        </div>
        <div class="s" id="box3">
            <div class="dev cen"><i class="fa-sharp fa-solid fa-code fa-flip fa-2xl" style="color: #35e1ed;"></i></div>
            <h1>DEVELOPMENT</h1><br>
            <h3 style="font-size:medium;">I design web pages using <br> HTML, CSS, JAVASCRIPT,<br> PHP and MySQL.</h3>
        </div>
    </div>
    <!-- services-end -->
    <div class="blank"></div>
    <div class="blank"></div>
    <div id="a1"></div>
    <h2 id="ser" style="text-align: center; background-color:black;">ABOUT</h2>
    <!-- <div class="blank"></div> -->
    <div class="blank"></div>
    <!-- <div class="blank"></div> -->
    <div class="about cen" style="background-color:black;">
        <!-- <div> -->
        <img style="box-shadow:0 0 25px white; max-height:300px; margin-top: 25px; margin-left:0%; border-radius:25px; opacity:0.7; " src="./images/mypic.jpeg" alt="">   
        <h3 id="sa" style="cursor:pointer; text-align:center;  margin-left:10%; margin-right:10%; background-color:yellow; opacity:0.7; color:black; margin-top:2%; margin-bottom:2%; padding:1%; border-radius:20px;">Want To secure a challenging position in a reputed organization where my skills and abilities can be utilized for the growth of the organization.</h3>  
        <a style="margin-bottom: 1%;" href="./resume/MYRESUME.pdf" download="MYRESUME" class="button bg">
  <p class="text">
  Resume 
  </p>
  <div class="svg">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-download" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path> </svg>
  </div>
    </a>  
    </div>


    


    <!-- contact-start -->
    <div class="blank"></div>
    <h2 id="call">CONTACT</h2>
    <div class="get_in_touch">
        <h3><i class="fa-solid fa-message fa-beat fa-xl" style="color: #31f2ef;"></i></h3>
        <p id="heading">For any work or information, please complete this form. If you require a prompt response, kindly reach out to me via LinkedIn.</p>
        <div id="get_set"></div>
        <form action="index.php" method="post" id="form">
            <div class="name_email">
                <div class="name"><input type="text" name="name" id="name" placeholder="Name" class="message" required></div>
                <div class="email"><input type="email" name="email" id="email" placeholder="Email" class="message" required></div>
            </div>
            <div class="gender cen">
                <div class="name_email">
                    <div>
                        <select name="gender" id="gender" class="sel">
                            <option value="non" class="non">Select-Gender</option>
                            <option value="male" class="gen">MALE</option>
                            <option value="female" class="gen">FEMALE</option>
                            <option value="other" class="gen">OTHER</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="name_email">
                <div>
                    <input type="number" name="contact" id="contact" class="message" placeholder="Enter Your Phone Number" required>
                </div>
                <div>
                    <input type="text" name="description" id="description" class="message" placeholder="Description (optional)">
                </div>
            </div>
            <div class="sub cen"><button id="submit" type="submit" onclick="conclusion();">SUBMIT</button></div>
            <!-- <div class="adding">sagar</div> -->
        </form>
        <div class="blank"></div>
    </div>

    <!-- contact-end -->
    <footer>
        <p> RIGHTS &reg; TO SAGAR JUNEJA</p>
    </footer>





</body>
<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
<script>
    var typed = new Typed(".code .auto-type", {
        strings: ["Eat(); Sleep();  Code();  Repeat(); }; "],
        typeSpeed: 150,
        backSpeed: 150,
        loop: true,
    });
    addEventListener("contextmenu", (e) => {
        e.preventDefault();
    })
</script>
<script src="js/multi.js"></script>
<script src="js/submit.js"></script>

</html>