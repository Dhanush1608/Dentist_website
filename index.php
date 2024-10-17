<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made successfully';
    }
    else{
        $message[] = 'appointment failed'; 
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete Responsive Dentist website</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>





    <!-- header section starts -->

    <header class="header fixed-top">

        <div class="container">
            <div class="row align-items justify-content-between">
                <a href="#home" class="logo">dental <span>care.</span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
                <a href="#contact" class="link-btn">Make appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <!-- Header section ends -->


    <!-- Home section starts -->

    <section class="home" id="home">

        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Let us brighten your smile</h3>
                    <p>
                        Proper oral care habits, including regular brushing and flossing, promote a healthy, radiant smile.
                    </p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>

            </div>
        </div>
    </section>


    <!-- Home section ends -->


    <!-- About section starts -->

    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="https://img.freepik.com/free-photo/close-up-smiley-patient-appointment_23-2149164306.jpg?ga=GA1.1.1198942412.1726855212&semt=ais_hybrid" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>At our dental practice, we prioritize comprehensive care for your entire family, providing personalized treatment plans that address unique oral health needs, from routine cleanings and fillings to advanced restorative and cosmetic procedures, ensuring a lifetime of healthy, confident smiles.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>

            </div>
        </div>

    </section>

    <!-- About section ends -->

    <!-- services section starts -->

    <section class="services" id="services">
        <h1 class="heading">our services</h1>

        <div class="box-container container">
            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/2400/2400864.png?ga=GA1.1.1198942412.1726855212&semt=ais_hybrid" alt="" style="width: 30px; height: 30px;">
                <h3>Alignment Specialist</h3>
                <p>Our expert alignment specialist is dedicated to helping you achieve a perfectly aligned smile, utilizing advanced orthodontic techniques and cutting-edge technology to diagnose and treat misalignments, ensuring a more confident and healthy you.</p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/15538/15538498.png?ga=GA1.1.1198942412.1726855212&semt=ais_hybrid" alt="" style="width: 30px; height: 30px;">
                <h3>Cosmetic Dentistry</h3>
                <p>Transform your smile with our expert cosmetic dentistry services, featuring a range of innovative treatments designed to enhance the aesthetic appeal of your teeth, from teeth whitening and bonding to veneers and crowns, our goal is to help you achieve a radiant, confident smile that lights up the room.</p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/10277/10277035.png?ga=GA1.1.1198942412.1726855212&semt=ais_hybrid" alt="" style="width: 30px; height: 30px;">
                <h3>Oral Hygiene Experts</h3>
                <p>Our team of oral hygiene experts is committed to providing personalized care and education to help you maintain a healthy, beautiful smile. From routine cleanings and preventive care to personalized oral health coaching, we'll work with you to develop a customized plan that addresses your unique needs and promotes a lifetime of good oral health.</p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/17561/17561507.png?ga=GA1.1.1198942412.1726855212&semt=ais_hybrid" alt="" style="width: 30px; height: 30px;">
                <h3>Root Canal Specialist</h3>
                <p>Our experienced root canal specialists use the latest technology and techniques to provide gentle, effective treatment for damaged or infected teeth. With a focus on comfort and precision, we'll work to save your natural tooth, relieving pain and restoring your smile to its full potential. From diagnosis to treatment, we'll guide you through the process with care and compassion. </p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/1957/1957103.png?ga=GA1.1.1198942412.1726855212&semt=ais_hybrid" alt="" style="width: 30px; height: 30px;">
                <h3>Live Dental Advisory</h3>
                <p>Get instant access to personalized dental advice with our live dental advisory service. Our team of experienced dentists and oral health experts are available to answer your questions, address your concerns, and provide guidance on maintaining good oral health. From routine care to complex dental issues, we're here to help you make informed decisions about your smile.</p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/256/8733/8733132.png?ga=GA1.1.1198942412.1726855212&semt=ais_hybrid" alt="" style="width: 30px; height: 30px;">
                <h3>Cavity Inspection</h3>
                <p>Early detection is key to preventing cavities from causing more serious damage. Our cavity inspection process uses advanced digital imaging technology to identify even the smallest signs of tooth decay. Our skilled dentists will carefully examine your teeth, checking for any signs of weakness or damage, and provide personalized recommendations for treatment and prevention.</p>
            </div>
        </div>
    </section>

    <!-- services sections ends -->



    <!-- Process section starts -->

    <section class="process">
        <h1 class="heading">Wrok Process</h1>
        <div class="box-container container">

            <div class="box">
                <img src="https://media.istockphoto.com/id/1274274019/vector/doctor-dentist-conducting-health-medical-check-up-treatment-looking-at-patient-oral-cavity.jpg?s=2048x2048&w=is&k=20&c=fyZiR042lnxRvgU2sG7NUGEwB7ZN-VLwwd8_Zp_Vts0=" alt="" width="250">
                <h3>Cosmetic Dentistry</h3>
                <p> Our cosmetic dentistry process involves a personalized consultation to understand your unique needs and goals. We then use advanced techniques and materials to create a customized treatment plan, which may include teeth whitening, veneers, bonding, or other procedures to enhance the appearance of your smile. Our experienced dentists will work with you to achieve the beautiful, confident smile you deserve.</p>
            </div>
            <div class="box">
                <img src="https://media.istockphoto.com/id/1297011729/vector/man-at-dentist-black-doctor-treating-teeth-assistant-helping-flat-design-illustration-vector.jpg?s=2048x2048&w=is&k=20&c=RLWOIeNWWF2UN20OnIi65zLD9DRuHjWRJTtIUSJddZw=" alt="" width="250">
                <h3>Pediatric Dentistry</h3>
                <p>Our pediatric dentistry process is designed to make your child's dental experience fun and stress-free. We start with a gentle, kid-friendly consultation to assess their oral health and identify any potential issues. Our experienced pediatric dentists then work with your child to create a personalized treatment plan, which may include routine cleanings, fluoride treatments, and educational guidance on proper oral hygiene habits. Our goal is to help your child develop a healthy, happy smile that will last a lifetime. </p>
            </div>
            <div class="box">
                <img src="https://media.istockphoto.com/id/1436665214/vector/dentistry-concept-woman-sitting-in-the-stemmatological-chair-dentist-is-examining-clints.jpg?s=2048x2048&w=is&k=20&c=sExxmC7fEC4fFUZn7kXO0H98C3wIVigX7azF1oqBW70=" alt="" width="250">
                <h3>Dental Implants</h3>
                <p>Our dental implant process begins with a comprehensive consultation to determine if implants are right for you. We then use advanced 3D imaging technology to plan and place the implant, ensuring a precise and comfortable procedure. Once the implant has integrated with your jawbone, we'll create a custom crown or restoration that blends seamlessly with your natural teeth, restoring your smile and confidence.</p>
            </div>

        </div>
    </section>

    <!-- process section ends -->


    <!-- Review section starts -->

    <section class="reviews" id="reviews">

        <h1 class="heading">Satisfied Clients</h1>

        <div class="box-container container">

            <div class="box">
                <img src="./images/pradeep.jpg" alt="" style="width: 100px; height: 100px;">
                <p>I'm thrilled with the results of my dental treatment! The staff were friendly and professional, and I felt at ease throughout the process.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Pradeep</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="./images/dhanush.jpg" alt="" style="width: 100px; height: 100px;">
                <p>I was impressed by the modern facilities and the dentist's expertise. My teeth have never looked better.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Dhanush</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="./images/praveen.jpg" alt="" style="width: 100px; height: 100px;">
                <p>The dentist took the time to explain everything and made me feel comfortable throughout the procedure. I highly recommend this practice.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Praveen</h3>
                <span>Satisfied Client</span>
            </div>
        </div>
    </section>


    <!-- Review section ends -->

        <!-- Contacts section starts -->

        <section class="contact" id="contact">

            <h1 class="heading">Make appointment</h1>


            <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
                <?php
                if(isset($message)){
                     foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
                ?>
                <!-- <p class="message">testing message box</p> -->
                <span>your name :</span>
                <input type="text" name="name" placeholder="enter your name" class="box">
                <span>your email :</span>
                <input type="email" name="email" placeholder="enter your email" class="box">
                <span>your number :</span>
                <input type="number" name="number" placeholder="enter your number" class="box">
                <span>appointment date :</span>
                <input type="datetime-local" name="date"class="box">
               <input type="submit" value="Make appointment" name="submit" class="link-btn">
            </form>


        </section>
         <!-- Contacts section ends -->

         <!-- footer section starts -->

         <section class="footer">
            <div class="box-container container">

                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>Phone number</h3>
                    <p>+91 7730882637</p>
                    <p>+91 9908945408</p>
                    
                </div>

                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>our address</h3>
                    <p>Tiruchirappalli, India - 620012</p>
                </div>

                <div class="box">
                    <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p>09:00am to 10:00pm</p>
                </div>
                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>dhansuhramavath1712@gmail.com</p>
                    <p>agndagnd000@gmail.com</p>
                </div>
            </div>

            <div class="credit"> &copy; Copyright by <span> <?php echo date('Y'); ?> - Ramavathu Dhanush Naik</span></div>

         </section>
         <!-- footer section ends -->


    <!-- custom js file link -->
    <script src="script.js"></script>
</body>

</html>