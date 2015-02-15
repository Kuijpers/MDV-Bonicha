<?php
				$receiver_topmessage_mail = nl2br($MAIL['receiver_message']);


// HTML MAIL MET PLATTE TEKST WANNEER HTML NIET LEESBAAR IS

				$mail = new PHPMailer();

				// Geef aan dat het een HTML mail betreft
				$mail->IsHTML(true);

				$mail->From = $email; 
				$mail->FromName = $name;

				$mail->AddAddress($user_email, $user_name);
				//$mail->AddAddress("info@domein2.nl");
				//$mail->AddCC("info@domein3.nl", "Naam van ontvanger 3");
				//$mail->AddBCC("info@domein4.nl", "Naam van ontvanger 4");

				$mail->Subject = $subject;

				// HTML body
				$mail->Body = "
					<table>
						<tr>
							<th colspan='3' align='left'>
								$receiver_topmessage_mail
							</th>
						</tr>
                		<tr>
                        	<td>
                            	$MAIL[registration]
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$regnr
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	$MAIL[send]
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$date $time
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	$MAIL[ip]
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$ip
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	$MAIL[name]
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$name
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	$MAIL[phone]
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$phone
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	$MAIL[email]
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$email
                            </td>
                        </tr>                        
                		<tr>
                        	<td>
                            	$MAIL[message]
                            </td>
                            <td>
                            	:	
                            </td>
                        </tr>
                        <tr>
                        	<th colspan='3' align='left'>
                            	$comment_mail
                            </th>
                        </tr>
                	</table> 

				";
				//PLAIN TEKST
				
    			$text_body .= "The following information was send to you. \n \n";
				$text_body .= "Registration number : $regnr \n";
    			$text_body .= "Name : $name \n";
    			$text_body .= "Phone : $phone \n";
    			$text_body .= "Email : $email \n";
    			$text_body .= "Comment : $comment \n\n";

				// Alternatieve body
				$mail->AltBody = $text_body;

				$mail->WordWrap = 50;

				if(!$mail->Send()){
					echo "Er ging iets mis tijdens het versturen, namelijk:";
					echo $mail->ErrorInfo;
					}
					
?>