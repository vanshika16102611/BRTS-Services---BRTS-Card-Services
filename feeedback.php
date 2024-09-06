<?php
 include("conn.php");
 if(isset($_REQUEST['submit']))
{
 
 $value=$_REQUEST['star'];
 $Feedback=$_REQUEST['feedback'];
 
  $q="insert into feed(Star,Feedback) values('$value','$Feedback')";
 
 if(mysqli_query($coon,$q))
 {
    echo "Feedback sent";
 }
 else
 {
    echo "error:".sql."<br>".mysqli_error($coon);
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<?php include('head.php'); ?>
    <style>
        body{
            background-image: url('img/bg.jpg');
        }
        .copy-number {
            color: #13357B; /* Default link color */
            text-decoration: underline;
            cursor: pointer;
        }
        .copy-number:hover {
            text-decoration: none;
        }
        .phone-number {
            color: #dc3545; /* Different color for the phone number */
        }
        .rating {
            font-size: 5;
            color: black;
        }
        .rating .star {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.2s;
        }
        .rating .star:hover,
        .rating .star.active {
            color: orange !important; /* Filled star color */
        }
        #feed,
        #rat{
            color: black;
            font-size: 30px;
        }
        textarea {
            width: 100%; /* Set the width to 100% of its container */
            height: 200px; /* Set a fixed height, or adjust as needed */
            padding: 10px; /* Padding inside the textarea */
            font-size: 20px; /* Font size of text inside textarea */
            border: 1px solid #ccc; /* Border style */
            border-radius: 9px; /* Rounded corners */
            resize: vertical; /* Allow vertical resizing */
            background-color: orange ;!important; /* Background color */
        }
        #rating-value{
            color: black;
            font-size: 20px;
        }
        button {
  text-transform: uppercase;
  font-weight: 300;
  background: #151515;
  color: #ffffff;
  width: 10rem;
  height: 50px;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  border: 50px solid var;
  border-color: #ffc451;
}

input:hover, textarea:hover, button:hover {
  opacity: 0.5;
}

button:active {
  opacity: 0.8;
}
button {
    width: 9rem;
}
        
    </style>
</head>
<body>
    
<section id="feedback" class="feedback section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
      <h5 class="section-title px-3">Feedback</h5>
            <h1 class="mb-0">Give your feedback to us...</h1>
        
            <form method="post">
                <label for="feedback" id="rat">Rate Us...</label><br><br>
                <div class="rating" id="star-rating" >
        <span class="star" data-value="1">&#9733;</span>
        <span class="star" data-value="2">&#9733;</span>
        <span class="star" data-value="3">&#9733;</span>
        <span class="star" data-value="4">&#9733;</span>
        <span class="star" data-value="5">&#9733;</span>
    
        <p id="rating-value"></p>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');
            const ratingValue = document.getElementById('rating-value');

            stars.forEach(function(star) {
                star.addEventListener('click', function() {
                    const value = star.getAttribute('data-value');
                    ratingValue.textContent = 'You rated ' + value + ' stars.';

                    // Remove active class from all stars
                    stars.forEach(function(s) {
                        s.classList.remove('active');
                    });

                    // Add active class to the clicked star and all preceding stars
                    let clickedValue = parseInt(value);
                    for (let i = 0; i < clickedValue; i++) {
                        stars[i].classList.add('active');
                    }
                });
            });
        });
    </script>
    <p id="rating-value"></p>

    <label for="feedback" id="feed">Your Feedback:</label><br><br>
        <textarea id="feedback" name="feedback" placeholder="Enter your feedback here..." required></textarea><br><br>
        <center><button type="submit" id="submit" name="submit">Submit</button></center><br><br>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
        </body>
        </html>