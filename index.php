<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Neil C. Floyd</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <nav>
            <!--<icon>Neil C. Floyd</icon>-->
            <ul>
               <li><a href="">Home</a></li>
               <li><a href="">About</a></li>
               <li><a href="">Projects</a></li>
               <li><a href="">Contact</a></li>
            </ul>
            </nav>
        <header>

        <div class="main content">

            <div class="showcase">

                <div class="showcaseContainer">
                    <h1>Neil Floyd</h1>
                    <p id="greeting">Hello!</p>
                    <P id="introduction">My name is Neil Floyd,</p>
                    <p id="statement">and I want to be your developer!</p>
                </div><!--showcaseContainer-->

                <div class="showcaseImgContainer">
                    <img src="img/headshot.jpg" class"showcaseImg">
                </div><!--showcaseImgContainer-->

            </div> <!--showcase-->

            <div class="aboutDiv">
                <h2 class="aboutH2">About</h2>
                <div>
                    <img src="img/code_icon.png" class="aboutImgLeft">
                </div>
                <div>
                    <p class="aboutParagraph">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing.
                    </p>
                </div>
                <div>
                    <img src="img/code_icon.png" class="aboutImgRight">
                </div>
            </div><!--aboutDiv-->

            <div class="projectsDiv">
                
                <h2>My most recent work</h2>
                <div class="project">
                    <a href=""><img src="img/placeholder.png"></a>
                    <h3>Sample Project</h3>
                </div>

                <div class="project">
                    <a href=""><img src="img/placeholder.png"></a>
                    <h3>Sample Project</h3>                    
                </div>

                <div class="project">
                    <a href=""><img src="img/placeholder.png"></a>
                    <h3>Sample Project</h3>
                </div>
                
            </div><!--projectsDiv-->
            
            <div class="contactContainer">
                <h2 class="formH2">I look forward to hearing from you</h2>
                <form method="post" action="parser.php">
                    <input type="text" name="name" placeholder="Enter your name" id="name">
                    <input type="email" name="email" placeholder="Enter your email" id="email">
                    <textarea type="text" name="message" placeholder="Enter your Message" id="message"></textarea>

                    <input type="submit" name="submit" value="submit" id="submit">
                </form>
            </div><!--contactContainer-->
            

        </div> <!--main content-->

        <footer>
            <div class="footerDiv">
                <h2 class="footerH2">Neil C. Floyd</h2>
                <p class="footerParagraph">All rights Reserved</p>
                <p>&copy;2018</p>
            </div><!--footerDiv-->
            
            <div class="socialMedia">
                <!--enter Font Awesome icons for facebook, instagram, behance, twitter-->
            </div><!--socialMeida-->
        </footer>

        <script src="main.js" async defer></script>
    </body>
</html>
