<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Merriweather:ital@0;1&family=Work+Sans:wght@400;500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,400;0,600;0,700;1,100;1,200;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
    <script>
    $( document ).ready(function() {
      console.log( "document loaded" );
      $("form[name='contact']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      message: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your name",
      lastname: "Please enter your lastname",
      email: "Please enter a valid email address",
      message: "Please enter your message."
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  var $form = $('contact');
   $form.submit(function(){
      $.post($(this).attr('action'), $(this).serialize(), function(response){
            // do something here on success
      },'json');
      return false;
   });
   
});
    });
 
    $( window ).on( "load", function() {
        console.log( "window loaded" );
    });
    </script>
    <link rel="stylesheet" href="styles.css" />
    <title>Hel's Portfolio</title>
</head>
<body>
    <?php
    $currentPage= $_SERVER['SCRIPT_NAME'];
    $currentPage = substr($currentPage, 6);

    $navbar = array(
      array(
        "name" => "Home",
        "link" => "index.php"
      ),
      array(
        "name" => "About",
        "link" => "index.php/#about"
      ),
      array(
        "name" => "Projects",
        "link" => "projects.php"
      ),
      array(
        "name" => "Contact",
        "link" => "index.php/#contact"
      ),
    );
    
    $all = json_decode(file_get_contents('./assets/projects-db.json'), true)['data'];

    ?>
    <div class="header-container">

    <?php require('./components/navbar.php') ?>

    </div>
    <div class="container pt-4 pb-4">