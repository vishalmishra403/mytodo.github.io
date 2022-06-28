<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    *::selection{
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
    .main{
        position: absolute;
        width: 80vw;
        height: 80vh;
        overflow: auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 1px solid tomato;
    }

    .main h1{
        color: tomato;
        text-align: center;
        padding: 3rem; 
    }

    .main h3 {
        text-align: center;
        color: white;
        word-spacing: 5px;
        margin-top: 2rem;
        padding: 3rem;
    }
    .home_icon{
        
        text-align: center;
    }

    #my_icon{
        font-size: 3rem;
        color: white;
    }
    
</style>

<body>
    <div class="home_icon">
        
        <a id="my_icon" href="Homepage.php"> <i class="fa fa-home" ></i></a>
    </div>
    <div class="main">
        <h1>About us</h1>

        <h3>
            Welcome to MadeYourDay, your number one source for listing and editing your daily task, which can be
            accessed from <span id="web-address">https;//www.madeyourday.com</span> . We're dedicated to
            providing you the very best of [to do list], with an emphasis on [editing your list], [deleting your list].


            Founded in [2022] by [Vishal Mishra, Ishan Bishnoi, Sarthak Sharma], MadeYourDay has come a long way from
            its
            beginnings in [May 2022]. When [Vishal Mishra] first started out, [his] passion for [brand message - e.g.
            "don't
            forget your tasks"] drove them to start their own business.


            We hope you enjoy our product as much as we enjoy offering them to you. If you have any questions or
            comments,
            please don't hesitate to contact us.


            Sincerely,

            [Vishal Mishra, Ishan Bishnoi, Sarthak Sharma]
        </h3>

    </div>
</body>

</html>