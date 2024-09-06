<!DOCTYPE html>
<html lang="en">
<head>
  
<?php include('head.php'); ?>

<script>
        function copyPhoneNumber() {
            // Get the phone number text
            var phoneNumber = '+1 (234) 567-890';

            // Create a temporary input element
            var tempInput = document.createElement('input');
            tempInput.value = phoneNumber;
            document.body.appendChild(tempInput);

            // Select the text in the input element
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); /* For mobile devices */

            // Copy the text to the clipboard
            document.execCommand('copy');

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // Provide feedback to the user
            alert('Phone number copied: ' + phoneNumber);
        }
    </script>

    <style>
       
       
        .copy-number {
            color: #ffffff; /* Default link color */
            text-decoration: underline;
            cursor: pointer;
        }
        .copy-number:hover {
            text-decoration: none;
        }
        .phone-number {
            color: #ffffff; /* Different color for the phone number */
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
        
    </style>
</head>

</head>
<body>
  
</body>
</html>


<section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets\img\aibus.jpeg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Help</h3>
              <p style="color:white">If you need immediate assistance, please call our helpline at <span class="copy-number" onclick="copyPhoneNumber()">+1 (234) 567-890</span>.</p>
              <a class="cta-btn" href="#">Helpline</a>
            </div>
          </div>
        </div>
      </div>

    </section>