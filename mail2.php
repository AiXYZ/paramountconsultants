<?php
error_reporting('all'); 
                
                           $u_name=$_POST['name'];
						   //echo $u_name;die;
                           $email=$_POST['email'];
                           $Phone=$_POST['mobile'];
                           $Message=$_POST['consult'];
                           $message = '
                        <html>
                        <head>
                          <title> Message</title>
                        </head>
                        <body>
                          <p><h3> Message</h3></p>
                          <table border="1">
                            <tr>
                              <td>Name:</td><td>'.$u_name.'
                            </tr>
                            <tr>
                              <td>Email:</td><td>'.$email.'
                            </tr>
                            <tr>
                              <td>Mobile:</td><td>'.$Phone.'
                            </tr>
                            <tr>
                              <td>Massage:</td><td>'.$Message.'
                            </tr>
                          </table>
                        </body>
                        </html>
                        ';
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                           if(mail("info@paramountconsultants.net","Message for subscriber",$message,$headers)){
                                header("Location:index.php?msg=1");
                           }else{
                                  header("Location:index.php?msg=0");
                           }
                           
                        
                    
                ?>

