<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        *::selection {
            background-color: black;
            color: white;
        }

        body {
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('laptop-background.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .main {
            width: 80vw;
            height: 80vh;
           margin: auto;
            
        }

        .main h2 {
            color: tomato;
            text-align: center;
        }

        .main h4 {
            color: white;
            text-align: center;
            margin-top: 1rem;
        }

        .home_icon {
            position: fixed;
            right: 0;
            bottom: 0;            
        }

        #my_icon {
            font-size: 3rem;
            color: white;
        }
        form{
            width: auto;
            margin: auto;           
        }
    </style>
</head>

<body>
    <div class="home_icon">

        <a id="my_icon" href="Homepage.php"> <i class="fa fa-home"></i></a>
    </div>

    <div class="main">
        <h2>Contact</h1>
        <h4>If you have any query, don't hesitate to contact us.
            We will try to provied you a solution asap!
        </h3>

        <!-- form -->
        

    <form>
        <!-- Text field -->
        <fieldset>
            <legend style="color: white;">Personal Information:</legend>
        
        <input type="text" id="fname" name="fname" placeholder="first name"><br><br>
       
        <input type="text" id="lname" name="lname" placeholder="last name"><br><br>
     
        <input type="email" id="mail" name="email" placeholder="email"><br><br>
        </fieldset>

    <!-- Textarea -->
    <textarea name="message" rows="10" cols="30" placeholder="write your message..."></textarea><br>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>

</html>