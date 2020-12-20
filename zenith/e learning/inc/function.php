<script src="https://kit.fontawesome.com/fe64e0f126.js" crossorigin="anonymous"></script>
<?php
    function head_link(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"<ul>
                <li><a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook-f'></i></a></li>
                <li><a href='https://www.twitter.com/".$row['tw']."' target='_blank'><i class='fab fa-twitter'></i></a></li>
                <li><a href='https://www.google.com/".$row['gp']."' target='_blank'><i class='fab fa-google-plus'></i></a></li>
                <li><a href='https://www.youtube.com/".$row['yt']."' target='_blank'><i class='fab fa-youtube'></i></a></li>
                <li><a href='https://www.linkedin.com/".$row['link']."' target='_blank'><i class='fab fa-linkedin'></i></a></li>
            </ul>";
    }

    function cat_menu(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"<li><a href='#'>".$row['cat_icon']." ".$row['cat_name']."</a></li>";
        endwhile;
    }

    function home_cat(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
        
        echo"<li>
        <a href='http://localhost/zenith/Development.php'>
        <center>
        ".$row['cat_icon']."    
        <h4>".$row['cat_name']."</h4>
        <p>2</p>
        </center>
        </a>
        </li>";

        endwhile;
    }

    function cart (){
        include("inc/db.php");
        echo"<div id='wrap'>
                <div id='crumb'>
                    <span><a href='index.php'>Home</a></span> <b>></b>
                    <span>My Cart</span>
                </div>
                <div id='cart'>
                    <table cellspacing='0'>
                        <tr>
                            <th id='cart_f'>Name</th>
                            <th>Instructor</th>
                            <th>Language</th>
                            <th>Lectures</th>
                            <th>Price</th>
                            </tr>
                            <tr>
                                <td id='cart_f'><img src='imgs/courses/1.jpg' />
                                <span><a href='#'>Social Networking Development in PHP with PDO</a></span>
                                <b><a href='#'><i class='fas fa-trash-alt'></i> Remove</a></b>
                                </td>
                                <td>Azaz Patel</td>
                                <td>English</td>
                                <td>100</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td id='cart_f'><img src='imgs/courses/1.jpg' />
                                <span><a href='#'>Social Networking Development in PHP with PDO</a></span>
                                <b><a href='#'><i class='fas fa-trash-alt'></i> Remove</a></b>
                                </td>
                                <td>Azaz Patel</td>
                                <td>English</td>
                                <td>100</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>
                                    <button><a href='index.php'>Keep Shopping</a></button>
                                    <button><a href='#'>Checkout</a></button>
                                </td>
                                <td></td><td></td>
                                <td style='text-align:right'>Amount Payable: </td>
                                <td>$120</td>
                            </tr>
                    </table>
             </div><br clear='all' />
             </div>";
    }

    function course_details(){
        include("inc/db.php");
        echo"<div id='crumb'>
                <span><a href='index.php'>Home</a></span> <b>></b>
                <span>My Cart</span>
            </div>
            <div id='course_left'>
                <img src='imgs/courses/5.jpg' />
                <div id='course_share'>
                <center>
                    <button id='fb'><a href='#'><i class='fab fa-facebook-f'></i> Share</a></button>
                    <button id='gp'><a href='#'><i class='fab fa-google-plus'></i> Share</a></button>
                    <button id='tw'><a href='#'><i class='fab fa-twitter'></i> Share</a></button>
                    <button id='w'><a href='#'><i class='fab fa-whatsapp'></i> Share</a></button>
                </center>
                </div>
            </div>
            </div>
            <div id='course_right'>
                <h2>NODE JS COURSE FOR BEGINNERS </h2>
                <table>
                    <tr>
                        <td>Instructor</td>
                        <td>Azaz Patel</td>
                    </tr>
                    <tr>
                        <td>Enroll By</td>
                        <td>9 Students</td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>Expert Level</td>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>Lectures</td>
                        <td>52</td>
                    </tr>
                </table>
                <div id='price'>
                    <h3>Price : $21 <span>70%</span> <b>70%</b> Saving $49 </h3>
                </div>
                <form>
                <center>
                    <button><i class='fas fa-shopping-cart'></i>Add To Cart</button>
                    <button><a href='#'><i class='fas fa-bolt'></i>Enroll Now</a></button>
                </center>
                </form>
            </div><br clear='all' />
            <div id='c_desc'>
                <h2>Course Details</h2>
                <p>
                This course is about How to Develop E Commerce Website in PHP with OOPS. In this course we use
                Visual Studio for coding and editing our script and code and Google Chrome as a Web Browser and 
                also we use WampServer as a Offline Server. We use PDO because in PDO we avoid SQL Injection and 
                give the extra security to our website. We will upload this Website using free Domain and free 
                Hosting. In this course the students will be provided all the practical videos. Also this course
                teaches some amazing features of PHP. 
                </p>
                <h2>What You Will Learn From This Course ?</h2>
                <p>At the end of this course you will be able to Develop any PHP Website</p>
                <h2>Pre-Requisites</h2>
                <p>Basic Knowledge of HTML5, CSS3, PHP</p>
                <h2>Instructor</h2>
                <img src='imgs/courses/4.jpg' />
                <p>Well Known Professional Web Designer And Web Developer Who Have 5 Years Extensive Knowledge In A Certain Field. I Also Have My Own YouTube Channel Known As (Azaz You-Tuber) Where I Am Teaching About Web Designing & Development. I Have Successfully Done A Wide Project Like E Commerce, E Learning, Corporate Identity, Charitable Trust, Portfolio, College And Many More. The Work I Have Done Is In High Quality, Fully Responsive And Tested On Wide Range Devices. I Take Great Care About My Each And Every Project That I Have Done. I Provide A Perfect Website With Client Requirements and I Am A Very Compatible And Familiar With HTML, CSS, JAVASCRIPT, Core PHP, Bootstrap And Ajax.</p>
                <div id='course_share'>
                <button id='fb'><a href='#'><i class='fab fa-facebook-f'></i></a></button>
                <button id='gp'><a href='#'><i class='fab fa-google-plus'></i></a></button>
                <button id='tw'><a href='#'><i class='fab fa-twitter'></i></a></button>
                <button id='w'><a href='#'><i class='fab fa-whatsapp'></i></a></button>  
                </div>
            </div>
            <div id='c_rel'>
                
            </div><br clear='all' />";
    }






?>