<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zenith | Home</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
       <?php 
        include("inc/header.php");
        ?>
        <div id='wrap'>
            <div id='crumb'>
                <span><a href ='index.php'>Home</a></span><b>></b>
                <span>My Cart</span>
              </div>
            <div id="dash">
                <h1>Instructor DashBoard</h1>
                <form method="post">
                    <div id ="c_form">
                        <input type="text" name="c_name" placeholder="Enter Coursename Here"/>
                        <button name="add_course">Create Course</button>
                  </div>

         </form><br clear="all"/><br><br><br><br><br>

                 <table cellpadding="0" cellspacing="0">
                        <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th>Course Type</th>
                                    <th>Course price</th>
                                    <th>Course Status</th>
                                    <th>Enrolled by</th>
                                    <th>Total earn</th>
                                    
                                    
                                    
                              
                         </tr>
                         <tr>
                          <td><a href="#"><img src="imgs/courses/5.jpg"/></a></td>   
                          <td>
                            <span> <a href="#"> Social networking website development in php with PDO</a></span><br/><br/>
                            <a href="#">Edit</a>
                            </td>
                          <td>Free</td>
                          <td>$100</td>
                          <td>Active</td>
                          <td>5</td>
                          <td>$500</td>
                         </tr>
                         <tr>
                          <td><a href="#"><img src="imgs/courses/5.jpg"/></a></td>   
                          <td>
                            <span> <a href="#"> Social networking website development in php with PDO</a></span><br/><br/>
                            <a href="#">Edit</a>
                            </td>
                          <td>Free</td>
                          <td>$100</td>
                          <td>Active</td>
                          <td>5</td>
                          <td>$500</td>
                         </tr>



                </table>
        </div>
            <?php
        include("inc/footer.php");
       ?>
    </body>
</html>