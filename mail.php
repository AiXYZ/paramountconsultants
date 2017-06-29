<?php
error_reporting('all'); 
                
                           $u_name=$_POST['contact_name'];
						   //echo $u_name;die;
                           $email=$_POST['contact_email'];
                           $Phone=$_POST['contact_phone'];
                           $Message=$_POST['message'];
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
                                header("Location:contact_us.php?msg=1");
                           }else{
                                  header("Location:contact_us.php?msg=0");
                           }
                           
                          
                    
                ?>

