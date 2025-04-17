<?php
    if (isset($_POST['go_back'])):
        header("Location: student_sign_in.php");
    endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Terms and Conditions</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
            <h1>Terms and Conditions</h1>
        </div>

        <p style="text-align: center;">
            By accessing or using the gym facilities at Washington Adventist University (WAU), I acknowledge and 
            agree to abide by all policies, safety guidelines, and behavioral expectations set forth by the 
            university. I understand that participation in physical activities involves inherent risks, 
            including the possibility of injury, and I affirm that I am in adequate physical condition to engage 
            in such activities. I agree to assume full responsibility for my own safety and well-being while 
            using the gym and its equipment. I further understand that WAU and its staff are not liable for any 
            injuries, health complications, or lost or damaged personal property resulting from the use of the 
            gym. I agree to use equipment properly and respectfully, return items to their proper places, wear 
            appropriate gym attire, and clean equipment after use to maintain a sanitary and safe environment for 
            all users. I understand that failure to comply with these guidelines or any form of disrespectful, 
            disruptive, or inappropriate behavior may result in suspension or permanent loss of gym privileges.
            I also acknowledge that the gym may adjust operating hours, limit access, or change safety protocols
            based on university policy, staffing, weather conditions, or emergency situations, and I agree to 
            comply with any such changes. By checking this box and submitting this form, I confirm that I have 
            carefully read and fully understand these Terms and Conditions, and I accept them as a condition for
            my use of the WAU gym facilities.
        </p>

        <div style="text-align: right;">
            <form method="POST" action="">
                <p>  <input type="submit" name="go_back" value="Go Back" class="go_back"></p>
            </form>   
        </div>
    </body>
</html>


