<?php
    /**
     * login in page
     */

    include 'DataHandler.php';



    function start_template(){
        //need to add more code here
        //cookie consent part
        $info_cookie_consent_banner = <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/style.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <title>Start Page</title>
            </head>
            <body class="center">
            <main></main>
            <form action="" method="post">
            <div class="jumbotron">
                <h1 class="display-4">Hello, Welcome to Digital TU Dublin</h1>
                <p class="lead">Digital TU Dublin provides vistors with different experience at different locations, we can introduce you the nature of grangegorman, the history of grangegorman at different locations</p>
                <hr class="my-4">
                <p>This site uses cookies to enhance user experience. see <a href="https://gdpr-info.eu/">Privacy policy</a></p>
                <p class="lead">
                    <button type="submit" class="btn-primary btn-lg" name="agree_button" >Agree</button>
                    <button type="submit" class="btn-primary btn-lg" name="decline_button" >Decline</button>
                </p>
            </div>
            </form>
            </body>
            </html>
        html;
        $info_cookie_consent_banner_rejected = <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/style.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <title><title>Start Page</title></title>
            </head>
            <body class="center">
            <main></main>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Cookie Rejected</h1>
                    <p class="lead">This site uses cookies to enhance user experience. see <a href="https://gdpr-info.eu/">Privacy policy</a></p>
                </div>
            </div>
            </body>
            </html>
        html;
        if ( (isset($_COOKIE["cookies_consent"])) ){

            if ( (isset($_COOKIE["experience"])) && (isset($_COOKIE["duration"])) ){
                login_out();  
            } 
            else{
                login_in();      
            }

        } 
        else{
            echo $info_cookie_consent_banner;

            if (isset($_POST['agree_button'])) {
                // Your code that you want to execute
                $cookie_name = "cookies_consent";
                $cookie_value = "agree";
                setcookie($cookie_name, $cookie_value, time()+60*60*24);                
                ob_end_clean();

                if ( (isset($_COOKIE["experience"])) && (isset($_COOKIE["duration"])) ){
                    login_out();   
                } 
                else{
                    login_in();      
                }

            }
            //if the decline button is clicked
            else if (isset($_POST['decline_button'])){
                ob_end_clean();
                echo $info_cookie_consent_banner_rejected;
            } 

        } 
    }





    function popular_site(){
        //need to add more code here

    }




    function popular_experience(){
        //need to add more code here

    }





    function generate_user_id(){
        $largest_current_user_id_str = check_the_largest_id();
        $largest_current_user_id_int = intval($largest_current_user_id_str);
        $new_current_user_id_int = $largest_current_user_id_int + 1;
        $new_current_user_id_str = strval($new_current_user_id_int);
        return $new_current_user_id_str;
    }





    function check_history(){
        //need to add more code here
        $info_check_user_history = <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <title>Start Location</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/style.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <title><title>Start Page</title></title>
            </head>
            <body class="center">
            <main></main>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Cookie Rejected</h1>
                    <p class="lead">This site uses cookies to enhance user experience. see <a href="https://gdpr-info.eu/">Privacy policy</a></p>
                </div>
            </div>
            </body>
            </html>
        html;
    }





    function index(){
        if ( (isset($_COOKIE["experience"])) && (isset($_COOKIE["duration"])) ){
            login_out();   
        } 
        else{
            login_in();
            //$hello = generate_user_id();      
        }
    }





    function login_in(){
        $info_login_in_page = <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <title>Start Location</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Start Page</title>
            </head>
            <style>
            table, th, td {
              border-collapse: collapse;
            }
            table.center {
              margin-left: auto; 
              margin-right: auto;
            }
            table {
              border-collapse: collapse;
              border-spacing: 0;
              width: 100%;
            }
            th, td {
              text-align: left;
              padding: 8px;
            }
            .center {
              margin: auto;
              width: 50%;
              padding: 10px;
            }
            body { 
              background-image:url('images/outer-wilds.gif'); 
              background-repeat:repeat; 
            }
            audio{
              opacity: 0.5;
            }   
            </style>
            <body class="center">
            <main></main>
            <form action="" method="post">
            <table class = "center">
                <tr>
                    <th>
                    <label style="color: #FF7C25;" for="experience">Please choose a experience:</label>
                    </th>
                </tr>
                <tr>
                    <td>
                    <select style="color: #FF7C25;" name="experience" id="experience">
                    <option style="color: #FF7C25;" value="">--- Choose a experience ---</option>
                    <option style="color: #FF7C25;" value="history">Introduction and History</option>
                    <option style="color: #FF7C25;" value="nature">Nature</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                        <label style="color: #FF7C25;" for="duration">How long do you want to be remembered:</label>
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <select style="color: #FF7C25;" name="duration" id="duration">
                    <option style="color: #FF7C25;" value="">--- Choose a time length ---</option>
                    <option style="color: #FF7C25;" value="one_minute">one minute</option>
                    <option style="color: #FF7C25;" value="one_hour">one hour</option>
                    <option style="color: #FF7C25;" value="one_day">one day</option>
                    <option style="color: #FF7C25;" value="one_week">one week</option>
                    <option style="color: #FF7C25;" value="one_month">one month</option>
                    <option style="color: #FF7C25;" value="one_year">one year</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                        <label style="color: #FF7C25;" for="database">Do you agree to store your cookie in database permanately for user experience improvement:</label>
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>
                    <select style="color: #FF7C25;" name="database" id="database">
                    <option style="color: #FF7C25;" value="">--- Yes or No ---</option>
                    <option style="color: #FF7C25;" value="database_yes">Yes</option>
                    <option style="color: #FF7C25;" value="database_no">No</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <button style="color: #FF7C25;" type="submit"><b>Select</b></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <audio controls autoplay loop>
                            <source src="audio/Outer_Wilds_Travelers.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </td>
                </tr>
            </table>
            </form>
            </body>
            </html>
        html;
        echo $info_login_in_page;
        //get information from user1
        $experience = filter_input(INPUT_POST, 'experience', FILTER_SANITIZE_STRING);
        $duration = filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING);
        $database = filter_input(INPUT_POST, 'database', FILTER_SANITIZE_STRING);
        $cookie_name_a = "experience";
        $cookie_name_b = "duration";
        $cookie_name_c = "database";
        if($experience && $duration){
            if($duration == "one_minute"){
                setcookie($cookie_name_a,$experience,time()+60);
                setcookie($cookie_name_b,$duration,time()+60);
                setcookie($cookie_name_c,$database,time()+60);

                if($database == "database_yes"){
                    $cookie_name_user = "user_id";
                    $user_id = generate_user_id();
                    setcookie($cookie_name_user,$user_id,time()+60);
                    insert_user($user_id);
                }
                else{
                    $cookie_name_user = "user_id";
                    $user_id = "temp";
                    setcookie($cookie_name_user,$user_id,time()+60);                  
                }

                header("Location: http://192.168.1.12/starting_point.php");
                die();
            }
            else if($duration == "one_hour"){
                setcookie($cookie_name_a,$experience,time()+60*60);
                setcookie($cookie_name_b,$duration,time()+60*60);
                setcookie($cookie_name_c,$database,time()+60*60);

                if($database == "database_yes"){
                    $cookie_name_user = "user_id";
                    $user_id = generate_user_id();
                    setcookie($cookie_name_user,$user_id,time()+60*60);
                    insert_user($user_id);
                }
                else{
                    $cookie_name_user = "user_id";
                    $user_id = "temp";
                    setcookie($cookie_name_user,$user_id,time()+60*60);                    
                }
                
                header("Location: http://192.168.1.12/starting_point.php");
                die();
            }
            else if($duration == "one_day"){
                setcookie($cookie_name_a,$experience,time()+60*60*24);
                setcookie($cookie_name_b,$duration,time()+60*60*24);
                setcookie($cookie_name_c,$database,time()+60*60*24);

                if($database == "database_yes"){
                    $cookie_name_user = "user_id";
                    $user_id = generate_user_id();
                    setcookie($cookie_name_user,$user_id,time()+60*60*24);
                    insert_user($user_id);
                }
                else{
                    $cookie_name_user = "user_id";
                    $user_id = "temp";
                    setcookie($cookie_name_user,$user_id,time()+60*60*24);
                }
                
                header("Location: http://192.168.1.12/starting_point.php");
                die();
            }
            else if($duration == "one_week"){
                setcookie($cookie_name_a,$experience,time()+60*60*24*7);
                setcookie($cookie_name_b,$duration,time()+60*60*24*7);
                setcookie($cookie_name_c,$database,time()+60*60*24*7);

                if($database == "database_yes"){
                    $cookie_name_user = "user_id";
                    $user_id = generate_user_id();
                    setcookie($cookie_name_user,$user_id,time()+60*60*24*7);
                    insert_user($user_id);
                }
                else{
                    $cookie_name_user = "user_id";
                    $user_id = "temp";
                    setcookie($cookie_name_user,$user_id,time()+60*60*24*7);
                }
                
                header("Location: http://192.168.1.12/starting_point.php");
                die();                
            }
            else if($duration == "one_month"){
                setcookie($cookie_name_a,$experience,time()+60*60*24*30);
                setcookie($cookie_name_b,$duration,time()+60*60*24*30);
                setcookie($cookie_name_c,$database,time()+60*60*24*30);

                if($database == "database_yes"){
                    $cookie_name_user = "user_id";
                    $user_id = generate_user_id();
                    setcookie($cookie_name_user,$user_id,time()+60*60*24*30);
                    insert_user($user_id);
                }
                else{
                    $cookie_name_user = "user_id";
                    $user_id = "temp";
                    setcookie($cookie_name_user,$user_id,time()+60*60*24*30);
                }
                
                header("Location: http://192.168.1.12/starting_point.php");
                die();                
            }
            else if($duration == "one_year"){
                setcookie($cookie_name_a,$experience,time()+60*60*24*365);
                setcookie($cookie_name_b,$duration,time()+60*60*24*365);
                setcookie($cookie_name_c,$database,time()+60*60*24*365);

                if($database == "database_yes"){
                    $cookie_name_user = "user_id";
                    $user_id = generate_user_id();
                    setcookie($cookie_name_user,$user_id,time()+60*60*24*365);
                    insert_user($user_id);
                }
                else{
                    $cookie_name_user = "user_id";
                    $user_id = "temp";
                    setcookie($cookie_name_user,$user_id,time()+60*60*24*365);
                }
                
                header("Location: http://192.168.1.12/starting_point.php");
                die();
            }        
        }
        else{
            echo "<p style='color: #FF7C25;' align='center'><b>Hello Adventurer !</b></p>";
            echo "<p style='color: #FF7C25;' align='center'><b>We do not have much connection,</b></p>";
            echo "<p style='color: #FF7C25;' align='center'><b>you and I. Still, this encounter feels special.</b></p>";
            echo "<p style='color: #FF7C25;' align='center'><b>I hope you won't mind if I think of you as a friend.</b></p>";
            echo "<p style='color: #FF7C25;' align='center'><b>and i am here to guide you to finish this journey</b></p>";
        }
    }





    function login_out(){
             $info_login_out_page = <<<html
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <title>Start Location</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><title>Start Page</title></title>
            </head>
            <style>
            table, th, td {
              border-collapse: collapse;
            }
            table.center {
              margin-left: auto; 
              margin-right: auto;
            }
            table {
              border-collapse: collapse;
              border-spacing: 0;
              width: 100%;
            }
            th, td {
              text-align: left;
              padding: 8px;
            }
            .center {
              margin: auto;
              width: 50%;
              padding: 10px;
            }
            body { 
              background-image:url('images/outer-wilds.gif'); 
              background-repeat:repeat; 
            }
            audio{
              opacity: 0.5;
            }   
            </style>
                <body class="center">
                <main></main>
                    <form action="" method="post">
                        <table class = "center">
                            <tr>
                                <th>
                                    <p style="color: #FF7C25;">Your Current Adventure is: {$_COOKIE["experience"]}</p>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color: #FF7C25;"><b>Your Time Length is: {$_COOKIE["duration"]} </b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color: #FF7C25;"><b>Your User ID is: {$_COOKIE["user_id"]} </b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button style="color: #FF7C25;" type="submit" name="delete_cookie"><b>Delete Cookie</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button style="color: #FF7C25;" type="submit" name="print_history"><b>Print History</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button style="color: #FF7C25;" type="submit" name="show_popular_site"><b>Popular Site</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button style="color: #FF7C25;" type="submit" name="show_popular_experience"><b>Popular experience</b></button>
                                </td>
                            </tr>                       
                            <tr>
                                <td>
                                    <audio controls autoplay>
                                        <source src="audio/Outer_Wilds_Travelers.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                            </tr>
                        </table>
                    </form>
                </body>
                </html>
            html;
           
        echo $info_login_out_page;       
        // clear cookie and refresh
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_cookie'])) {
        // Something posted
            setcookie("experience", "", time() - 3600);
            setcookie("duration", "", time() - 3600);
            setcookie("user_id", "", time() - 3600);
            header("Location: http://192.168.1.12/starting_point.php");
            die();
        }
        else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['print_history'])) {
        // Something posted
            if($_COOKIE["database"] == "database_yes"){
                print_history($_COOKIE["user_id"]);
            }
            else{
                echo "<p style='color: #FF7C25;' align='center'><b>Sorry, You can not use this function because your history and cookie is not in database</b></p>";
            }
        }
        else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['show_popular_site'])) {
        // Something posted
            print_popular_site();
        }
        else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['show_popular_experience'])) {
        // Something posted
            print_popular_experience();
        }          
    }





    start_template();

?>