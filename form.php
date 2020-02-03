<?=$message?>
<form action="" name="frm_users" method="post"  enctype="multipart/form-data">			
    <table class="table">
     <tr>
         <td>First Name</td>
         <td>
            <input type="text" name="first_name" id="first_name"  value="">
         </td>
     </tr>
     <tr>
         <td>Last Name</td>
         <td>
            <input type="text" name="last_name" id="last_name"  value="">
         </td>
     </tr>
     <tr> 
         <td align="right"></td>
         <td>
         <input type="hidden" name="cmd" value="add_uuid">
            <input type="submit" name="btn_submit" id="btn_submit" value="submit">
         </td>     
     </tr>
    </table>
</form>