<?php
    $name = $_POST["name"];
    $degree = $_POST["Degree"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portfolio.css">
    <title>Portfolio</title>
</head>
<body>

    <header>
        <div class="profile">
             <img src="img/pic2.jpeg" alt="full pic" width="140px" height="140px">
             <h1>Jogi Karthik</h1>
            <div class="social-icons">
                <a href="#" ><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#home" class="active"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="#about"><i class="fa-solid fa-user"></i> About Me</a></li>
                <li><a href="#"><i class="fa-solid fa-briefcase"></i> Portfolio</a></li>
                <li><a href="#"><i class="fa-solid fa-server"></i> Services</a></li>
            </ul>
        </nav>

        <div class="footer">
            <p>&copy; Copyright 2023 <br>Developed By <a href="#"><?php echo $name; ?></a></p>
        </div>
        
    </header>

    <main>

        <section id="home">
            <div class="home-row">
                <h1>Hello.. ! This is <br>Karthik Jogi <span>.</span> </h1>
                <p>I'm  a <span class="auto-input">Free-Lancer</span></p>
            </div>
        </section>

        <section id="about">
            <h1 class="sub-heading">About Me</h1>
            <div class="divider"> </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.            
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,              
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.            
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.        
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing   
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <div class="about-col">
                <div class="img-col">
                    <img src="img/pic3.webp" alt="" height="400px" width="400px"
                </div>
            </div>
            <div class="info-col">
                <h1>Front-End Developer</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="icon-list-col">
                    <div class="icon-list">
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  Birthday :</strong> <span>28</span></li>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  Website :</strong> <span>www.karthik.com</span></li>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  Phone :</strong> <span>9553627999</span></li>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  City :</strong> <span>Bhimavaram</span></li>

                        </ul>
                    </div>

                    <div class="icon-list">
                        <ul>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  Age :</strong> <span>18</span></li>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  Degree :</strong> <span>B.Tech</span></li>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  Email :</strong> <span><a href="jogikarthik123@gmail.com">click here</a></span></li>
                            <li><i class="fa-solid fa-angle-right"></i><strong>  Freelance :</strong> <span>Available</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="portfolio.js"></script>
    <script src="https://kit.fontawesome.com/bd154d3f66.js" crossorigin="anonymous"></script>
</body>
</html>