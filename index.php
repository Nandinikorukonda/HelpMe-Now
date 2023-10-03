<?php
// to display i.e. admin name:yami and admin password:123
$conn = mysqli_connect('localhost','root','','contact2_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
    $issue = mysqli_real_escape_string($conn, $_POST['issue']);
    $area = mysqli_real_escape_string($conn, $_POST['area']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact3_form`(name, email,issue,area, number, date) VALUES('$name','$email','$issue','$area','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'report made successfully!';
   }else{
      $message[] = 'report failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by sigma</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><i class="fa-solid fa-hand-holding-hand"></i>  <strong>Help</strong>Me Now!</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="login/login.php">login</a>
        <a href="login/signup.php">register</a>
        <a href="#appointment">Report Issue</a>
        <a href="#review">review</a>
        <a href="admin/login.php">Admin Section</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="aas.jpg" alt="">
    </div>

    <div class="content">
        <h3>Health and happiness are at the heart of what we do!</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> Report Issue <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <!-- <i class="fa-solid fa-user"></i> -->
        <h3>35+</h3>
        <p>persons at work</p>
    </div>

    <div class="icons">
         <!-- <i class="fa-solid fa-users"></i>  -->
        <h3>103+</h3>
        <p>satisfied clients</p>
    </div>

    <div class="icons">
         <!-- <i class="fa-solid fa-droplet"></i>  -->
        <h3>30+</h3>
        <p>solved water facility</p>
    </div>

    <div class="icons">
         <!-- <i class="fa-solid fa-trash-can-plus"></i> -->
        <h3>7+</h3>
        <p>available operations</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality service</h3>
            <p>Our mission is to shine a light on the issues of improper current, streetlights, stray dogs, pollution control, and water supply. Working towards a cleaner, safer, and more sustainable urban environment</p>
            <p>We are dedicated to raising awareness and fostering positive change in our communities by addressing these above critical issues.Join us in making a difference for a brighter and greener future."</p>
            <a href="#appointment" class="btn">Report Issue<span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

 <section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <!-- <i class="fas fa-notes-medical"></i> -->
            <h3>Electricity Security</h3>
            <p>To ensure uninterrupted availability of electricity by withstanding and recovering from disturbances and issues.
                To solve the problems occured related to electrical appliances
            </p>
               <a href="#appointment" class="btn"> Report Issue <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <!-- <i class="fas fa-ambulance"></i> -->
            <h3>Stray Dogs</h3>
            <p> Our website is dedicated to solving the issue of stray dogs in our community.Reducing the issues such as pubic fear,nuisance,health risks,population control,environmental impact and safety concerns</p>
             <a href="#appointment" class="btn"> Report Issue <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <!-- <i class="fas fa-user-md"></i> -->
            <h3>Water Supply</h3>
            <p>This website addresses water supply challenges, providing innovative solutions to ensure access to clean and sustainable water sources.Resolves water shortage,sewage and contaminated water problems. Join us in creating a water-secure future today</p>
            <a href="#appointment" class="btn"> Report Issue <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <!-- <i class="fas fa-pills"></i> -->
            <h3>Industrial Pollution</h3>
            <p>Our dedicated team is actively engaged in identifying eco-friendly alternatives, promoting responsible disposal practices within industries.We ensure to minimize the damage that occur due to chemical explosions, gas and smoke releases by your report.</p>
            <a href="#appointment" class="btn"> Report Issue <span class="fas fa-chevron-right"></span> </a>
        </div>

       

    </div>

</section> 






<!-- report section starts   -->

 <section class="appointment" id="appointment">

    <h1 class="heading"> <span>Report</span> Now </h1>    

    <div class="row">

        <div class="image">
            <img src="report-issue.png" alt="">
        </div>

       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>Reach Us</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="text"name="issue" placeholder="your issue" class="box">
            <input type="text"name="area" placeholder="your area" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="report" class="btn">
        </form>

    </div>

</section>

<!-- report section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="p3.jpeg" alt="">
            <h3>Resolved Stray Dogs</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">This website resolved my problem.It's a testament to the effectiveness of this platform in addressing the stray dog problem. Thank you for making a real difference!</p>
        </div>

        <div class="box">
            <img src="p4.jpeg" alt="">
            <h3>Resolved Water Issues</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I'd like to express my sincere gratitude to the website that helped resolve my water issue. Their invaluable assistance was swift and effective, making a significant difference in my situation. Thank you for being a reliable source of support!</p>
        </div>

        <div class="box">
            <img src="p2.jpeg" alt="">
            <h3>Resolved about pollution</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I'm immensely grateful to the website that effectively addressed my industrial pollution concern. Their invaluable guidance and resources significantly improved the situation. Thank you for making a positive impact on our environment.</p>
        </div>

    </div>

</section>







<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> report an issue </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i>spray dogs </a>
            <a href="#"> <i class="fas fa-chevron-right"></i>water supply </a>
            <a href="#"> <i class="fas fa-chevron-right"></i>power issues</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>industrial releases</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>Home appliances</a>
        </div>

        <div class="box">
            <h3>report issue info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> r9@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> nandini03@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>viit, vizag </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Sigma Team</span> | all rights reserved </div>

</section>

 



    <!--    -->
<script src="script.js"></script>

</body>
</html>
