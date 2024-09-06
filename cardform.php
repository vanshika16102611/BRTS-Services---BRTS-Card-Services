<?php
 include("conn.php");
 if(isset($_REQUEST['submit']))
{

 $Date = date('Y-m-d', strtotime($_POST['Date']));
 $Name=$_REQUEST['Name']; 
 $Age=$_REQUEST['Age'];
 $Gender=$_REQUEST['Gender']; 
 $Email=$_REQUEST['Email'];
 $MNumber=$_REQUEST['MNumber'];
 $Address=$_REQUEST['Address'];

 $photo = $_REQUEST['photo'];
 $acard = $_REQUEST['acard'];

 $q="insert into crud (Date,Name,Age,Gender,Email,MNumber,Address,photo,acard) values('$Date','$Name',$Age,'$Gender','$Email',$MNumber,'$Address','$photo','$acard')";
 
 if(mysqli_query($coon,$q))
 {
    header("location:index.php");
 }
 else
 {
  echo "error:".sql."<br>".mysqli_error($coon);
 }
 }



?>

<!-- Responsive Contact Page with Dark Mode and Form Validation (vanilla JS).

*Designed & built for desktop and tablets with viewport width >= 720px and in landscape orientation.  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
  <style>
    :root {
      --primary-color: #FCFDFD;
  --secondary-color: #818386;
  --bg-color: #010712;
  --button-color: #818386;
  --h1-color: #FCFDFD;

}

[data-theme="dark"] {
  --primary-color: #FCFDFD;
  --secondary-color: #818386;
  --bg-color: #010712;
  --button-color: #818386;
  --h1-color: #FCFDFD;
}

* {
  margin: 0;
  box-sizing: border-box;
  transition: all 0.3s ease-in-out;
}

.contact-container {
  display: flex;
  width: 100vw;
  height: 100vh;
  background: var(--bg-color);
}

.left-col {
  width: 100vw;
  height: 150%;
  background-image: url("assets/img/bus2ai.jpeg");
  background-size: cover;
  background-repeat: no-repeat;
}

.logo {
  width: 10rem;
  padding: 1.5rem;
}

.right-col {
  background: var(--bg-color);
  width: 70vw;
  height: 150vh;
  padding: 5rem 3.5rem;
}

h1, label, button, .description {
  font-family: 'Jost', sans-serif;
  font-weight: 400;
  letter-spacing: 0.1rem;
}

h1 {
  color:var(--h1-color);
  text-transform: uppercase;
  font-size: 2.5rem;
  letter-spacing: 0.5rem;
  font-weight: 300;
}

p {
  color: var(--secondary-color);
  font-size: 0.9rem;
  letter-spacing: 0.01rem;
  width: 40vw;
  margin: 0.25rem 0;
}

label, .description {
  color: var(--secondary-color);
  text-transform: uppercase;
  font: size 50px;;
}

form {
  width: 31.25rem;
  position: relative;
  margin-top: 2rem;
  padding: 1rem 0;
}

input, textarea, label {
  width: 40vw;
  display: block;
}

p, placeholder, input, textarea {
  font-family: 'Helvetica Neue', sans-serif;
}

input::placeholder, textarea::placeholder {
  color: var(--primary-color);
}

input, textarea {
  color: var(--primary-color);
  font-weight: 500;
  background: var(--bg-color);
  border: none;
  border-bottom: 1px solid var(--secondary-color);
  padding: 0.5rem 0;
  margin-bottom: 1rem;
  outline: none;
}

textarea {
  resize: none;
}

button {
  text-transform: uppercase;
  font-weight: 300;
  background: var(--button-color);
  color: var(--bg-color);
  width: 10rem;
  height: 2.25rem;
  border: none;
  border-radius: 2px;
  outline: none;
  cursor: pointer;
}

input:hover, textarea:hover, button:hover {
  opacity: 0.5;
}

button:active {
  opacity: 0.8;
}

/* Toggle Switch */

.theme-switch-wrapper {
  display: flex;
  align-items: center;
  text-align: center;
  width: 160px;
  position: absolute;
  top: 0.5rem;
  right: 0;
}

.description {
    margin-left: 1.25rem;
  }

.theme-switch {
  display: inline-block;
  height: 34px;
  position: relative;
  width: 60px;
}

.theme-switch input {
  display:none;
}

.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}

.slider:before {
  background-color: #fff;
  bottom: 0.25rem;
  content: "";
  width: 26px;
  height: 26px;
  left: 0.25rem;
  position: absolute;
  transition: .4s;
}

input:checked + .slider {
  background-color: var(--button-color);
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

#error, #success-msg {
  width: 40vw;
  margin: 0.125rem 0;
  font-size: 0.75rem;
  text-transform: uppercase;
  font-family: 'Jost';
  color: var(--secondary-color);
  }


  #success-msg {
  transition-delay: 3s;
  }

@media only screen and (max-width: 950px) {
  .logo {
    width: 8rem;
  }
  h1 {
    font-size: 1.75rem;
  }
  p {
    font-size: 0.7rem;
  }
  input, textarea, button {
    font-size: 0.65rem;
  }
  .description {
    font-size: 0.3rem;
    margin-left: 0.4rem;
  }
  button {
    width: 7rem;
  }
  .theme-switch-wrapper {
    width: 120px;
  }
  .theme-switch {
  height: 28px;
  width: 50px;
}

.theme-switch input {
  display:none;
}

.slider:before {
  background-color: #fff;
  bottom: 0.25rem;
  content: "";
  width: 20px;
  height: 20px;
  left: 0.25rem;
  position: absolute;
  transition: .4s;
}
  input:checked + .slider:before {
  transform: translateX(16px);
}

.slider.round {
  border-radius: 15px;
}

.slider.round:before {
  border-radius: 50%;
}
.alert{
  color:white;
}

}
  </style>
</head>
<body>
<div class="contact-container">
  <div class="left-col">
    <img class="logo" src="assets/img/brtslogo.jpeg"/>
  </div>
  <div class="right-col">
    <h1>Purchase New Card</h1>
    
    <form id="contact-form" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
        <div id="date3" data-target-input="nearest">
            <label for="Date">Date</label>
            <input type="date" id="date" name="Date" placeholder="Date" data-toggle="datetimepicker" data-target="#date3" required>
            <div class="custom-icon"></div>
        </div>

        <label for="name">Name</label>
        <input type="text" id="name" name="Name" placeholder="Enter Your Full Name" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="Age" placeholder="Enter Your Age" min="1" max="120" required>

        <legend>Gender</legend>
        <label>Male
            <input type="radio" name="Gender" value="male" required>
        </label>
        <label>Female
            <input type="radio" name="Gender" value="female">
        </label>
        <label>Other
            <input type="radio" name="Gender" value="other">
        </label>
        <label>Prefer not to say
            <input type="radio" name="Gender" value="prefer-not-to-say">
        </label>    

        <label for="email">Email</label>
        <input type="email" id="email" name="Email" placeholder="Enter Your Email" required>

        <label for="mnumber">Mobile Number</label>
        <input type="text" id="mnumber" name="MNumber" placeholder="Enter Your Mobile Number" pattern="\d{10}" required>

        <label for="address">Address</label>
        <textarea id="address" name="Address" placeholder="Enter Your Address" required></textarea>

        <label for="photo">Passport Size Photo</label>
        <input type="file" name="photo" id="photo" accept="image/jpeg, image/png" required>
        <p>(Max file size: 5MB. Allowed formats: JPG, PNG.)</p>

        <label for="acard">Aadhar Card</label>
        <input type="file" name="acard" id="acard" accept=".pdf" required>
        <p>(Max file size: 10MB. Allowed format: PDF.)</p><br>

        <button type="submit" id="submit" name="submit">Book Now</button>
    </form>

    <div id="error"></div>
    <div id="success-msg"></div>
  </div>
</div>

<script>
function validateForm() {
    // Validate Mobile Number
    const mNumber = document.getElementById('mnumber').value;
    if (!/^\d{10}$/.test(mNumber)) {
        alert('Please enter a valid 10-digit mobile number.');
        return false;
    }

    // Validate Photo File Size
    const photo = document.getElementById('photo').files[0];
    if (photo.size > 5 * 1024 * 1024) {
        alert('Photo size should be less than 5MB.');
        return false;
    }

    // Validate Aadhar Card File Size
    const acard = document.getElementById('acard').files[0];
    if (acard.size > 10 * 1024 * 1024) {
        alert('Aadhar Card size should be less than 10MB.');
        return false;
    }

    // Add any other custom validation here if needed

    return true;
}
</script>


<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form.js"></script>
</body>
</html>
<!-- Image credit: Oliver Sjöström https://www.pexels.com/photo/body-of-water-near-green-mountain-931018/  -->