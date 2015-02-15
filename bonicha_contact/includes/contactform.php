   <div id="contact">   
<form action="?m=c" method="post" enctype="application/x-www-form-urlencoded" name="contact_page">    
      <fieldset>
      	<legend>
        		<?php echo $CONTACT['form'];?>
        </legend>
        <table>
        	<tr>
            	<th colspan="3">
            		<?php echo $CONTACT['all fields'];?>
                </th>
            </tr>	
        	<tr>
            	<td>
                	<?php echo $CONTACT['stable'];?>	
                </td>
                <td>
                	:
                </td>
                <td>
                	<input name="naam" type="text" size="50" />
                </td>
            </tr>	
        	<tr>
            	<td>
                	<?php echo $CONTACT['email'];?>	
                </td>
                <td>
                	:
                </td>
                <td>
                	<input name="email" type="text" size="50" />
                </td>
            </tr>	
        	<tr>
            	<td>
                	<?php echo $CONTACT['subject'];?>	
                </td>
                <td>
                	:
                </td>
                <td>
                	<input name="subject" type="text" size="50" />
                </td>
            </tr>
            <tr>
            	<td valign="top">
                	<?php echo $CONTACT['message'];?>
                </td>
                <td valign="top">
                	:
                </td>
            	<td>
                	<textarea name="message" cols="38" rows="5"></textarea>
                </td>
            </tr>
            <tr>
            	<th colspan="2">&nbsp;
                	
                </th>
                <td>
                	<input class= "button" name="reset" type="reset" value="Reset" />
                    &nbsp;
                	<input class= "button" name="submit" type="submit" value="Verstuur" />
                </td>
            </tr>
            
            
        </table>
      </fieldset>  
</form>
   </div>