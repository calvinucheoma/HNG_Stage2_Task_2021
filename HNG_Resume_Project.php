<?php

$error = "";
  $successMessage = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["email"])) {

$error .= "An email address is required.<br>";
}

if (empty($_POST["username"])) {

$error .= "The name field is required.<br>";
}

if (empty($_POST["subject"])) {

	$error .= "The subject field is required vruh.<br>";
}


if (empty($_POST["comments"])) {

	$error .= "The comment field is required.<br>";
}

if ($_POST['email'] && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) === false) {


#if (empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

$error .= "The email address is not valid";

}

if ($error != "") {

$error = '<div class="alert alert-danger" role="alert"> <p> <strong> There are error(s) in your form: </strong> </p>' . $error . '</div>';
}


else {

  $successMessage = '<div class="alert alert-success" role="alert"> <p> <strong> Your form was submitted successfully! </strong> </p> </div>';
}

}

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Chuks_Dev Resume</title>

    <style>

      #main-wrapper {

          height:100vh;
      }

      #about {

        height:100vh;

      }

      #services {

        height:100vh;

      }

      #contact {

        height:100vh;

      }

      #image_logo {

          height:250px;
          margin-left:35px;

      }

      a {

        text-decoration:none;

      }

      .nav-item{

        font-size:25px;
        margin:10px;
        padding:10px;
        -webkit-transition: all 1s ease;
        transition: all 1s ease;

      }

      .nav-item :hover{

        font-size:30px;
        border:2px solid white;
        border-radius:10%;
        background-color:gray;
        -webkit-transition: all 1s ease;
        transition: all 1s ease;

      }

      .fa {

            display:inline;
            padding: 12px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            margin: 10px ;
            border-radius: 50%;
          }

          .fa:hover {
              opacity: 0.7;
          }

          .fa-facebook {
            background: #3B5998;
            color: white;

          }

          .fa-twitter {
            background: #55ACEE;
            color: white;
          }


          .fa-linkedin {
            background: #007bb5;
            color: white;
          }

          .fa-github {

              background:black;
              color: white;
          }

          .fa-whatsapp {

            background:#6CB26C;
            color: white;

          }

        .list {

            font-size:30px;
            text-align:center;
            list-style-type:none;

        }

        #HNG {

          width:300px;
          height:150px;
          margin-top:25px;

        }


    </style>



  </head>

  <body >


    <div id="main-wrapper" class="bg-dark">
         <!-- Header
         ============================ -->
         <header id="header" >
           <!-- Navbar -->
           <nav class="primary-menu navbar navbar-expand-lg  navbar-text-light border-bottom-0">
             <div class="container-fluid position-relative h-100 flex-lg-column ps-3 px-lg-3 pt-lg-3 pb-lg-2">

               <!-- Logo -->
               <a href="index.html" class="mb-lg-auto mt-lg-4">
       			<span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">
       				<img class="img-fluid rounded-pill d-block" id = "image_logo" src="chuks_image.jpg" title="I'm Chukwuma" alt="Profile Picture">
       			</span>
       			<h1 class="text-5 text-white text-center mb-0 d-lg-block">Chukwuma Ucheoma</h1>
               </a>
               <!-- Logo End -->

               <div id="header-nav" class="collapse navbar-collapse my-lg-auto">
                 <ul class="navbar-nav text-lg-center my-lg-auto py-lg-3 nav-fill">
                   <li class="nav-item"><a class="nav-link smooth-scroll active text-white" href="#home">Home</a></li>
                   <li class="nav-item"><a class="nav-link smooth-scroll text-white" href="#about">About Me</a></li>
                   <li class="nav-item"><a class="nav-link smooth-scroll text-white" href="#services">Skills</a></li>
                   <li class="nav-item"><a class="nav-link smooth-scroll text-white" href="#contact">Contact</a></li>
                 </ul>
               </div>

              <div class="social-icons my-3">

                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#"> <i class="fa fa-github"></i></a>
                <a href="#"> <i class="fa fa-whatsapp"></i></a>
              </div>

              <a href="https://internship.zuri.team/" target="_blank"> <img src="HNG_logo.png" id="HNG"> </a>

             </div>
           </nav>
           <!-- Navbar End -->
         </header>
         <!-- Header End -->
       </div>

         <div id = "about" class="container">

            <h1 class="text-9 text-dark text-center text-lg my-5 p-5">ABOUT ME </h1>
            <h2 class="text-7 mb-3  text-lg-start">I'm Chukwuma Ucheoma, a Web Developer</h2>
            <p class=" text-lg-start">I am student of University of Nigeria, Nsukka studying Electronic Engineering.
              I am 20 years of age. I had my secondary school education at Topfaith International Secondary School,</p>
              <p> Mkpatak, Akwa Ibom State.
              I am an aspiring full stack web developer with other interests in mobile app development and data science.</p>
              <p>I write codes in both front-end and back-end. I try to improve on myself every day with constant practice an constant seeking of new information.</p>
           <p> I am hard-working, a team player, and I make sure if I try to help people if I am in any position to do so. I believe in always giving it your all no matter what and hoping for the best always.</p>

         </div>

         <div id="services">

            <h1 class="text-9 text-dark text-center text-lg my-5 p-5">SKILLS</h1>

            <ul class="list">
              <li> HTML</li>
              <li> CSS </li>
              <li> Javascript </li>
              <li> JQuery </li>
              <li> Bootstrap </li>
              <li> PHP </li>
              <li> MySQL </li>
            </ul>

       </div>

       <div class="bg-dark">

       <div id="contact" class="container">

           <h1 class="text-9 text-white text-center text-lg my-5 p-5">CONTACT</h1>

           <div  id="error"><?php echo $error . $successMessage; ?></div>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <fieldset class="form-group my-2 text-white">
	<label for="username"> Name </label> <br>
	<input type="text" name="username" id="username" class="form-control">
	</fieldset>

	<fieldset class="form-group my-2 text-white">
	<label for="mail"> Email address </label> <br>
	<input type="email" name="email" id="mail" placeholder="Enter email" class="form-control">
	<small class="text-muted"> We'll never share your email with anyone else. </small>
	</fieldset>

  <fieldset class="form-group my-2 text-white">
	<label for="subject_mail"> Subject </label> <br>
	<input type="text" name="subject" id="subject_mail" class="form-control">
	</fieldset>

  <fieldset class="form-group my-2 text-white">
	<label for="comments"> What would you like to ask us? </label>
	<textarea class="form-control" rows=3 name="comments" id="comments"></textarea>
	</fieldset>

  <p class="text-white"> Get in touch!</p>

	<button type="button" class="btn btn-primary btn-block "  name="submit" id="submit"> Submit </button>

	</form>

	</div>

</div>
       </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">

      	$(document).ready (function () {

      	$("#submit").click(function (e) {


      		var error = "";

      		if ($("#mail").val() == "") {

      			error += " The email field is required <br>" ;

      		}

          if ($("#username").val() == "") {

            error += " The name field is required <br> " ;

          }


      		if ($("#subject_mail").val() == "") {

      			error += " The subject field is required <br> " ;

      		}



      		if ($("#comments").val() == "") {

      			error += " The comment field is required " ;

      		}

      		if (error != "") {

      			$("#error").html( '<div class="alert alert-danger" role="alert">  <strong> There are error(s) in your form: </strong> <br>' + error +  '</div>');

      		    return false; // This is a way of saying something has gone wrong with your form and you don't want to submit it.//
      		}


      		else {

      		$("#error").html('<div class="alert alert-success" role="alert"> <p> <strong> Your form was submitted successfully! </strong> </p> </div>');

        	}
          
      	});



      	});

	</script>
  </body>
</html>
