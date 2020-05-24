    <?php    
        
    include "connection.php";    
        
    if(isset($_POST['id'])){    
    $sql = "delete from registration where id = '".$_POST['id']."'";    
    $result = mysql_query($sql);    
    }    
        
    $sql = "select * from registration";    
    $result = mysql_query($sql);    
    ?>    
    <html>    
        <body>    
            <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
                <tr>    
                        
                    <td>Event Name</td>    
                    <td>Name of Participant</td>    
                    <td>Location</td>    
                    <td>Description</td>       
                    <td colspan = "2">Action</td>    
                </tr>    
            </table>    
        </body>    
    </html>    
    <?php    
        
    while($row = mysql_fetch_object($result)){    
        
        
    ?>  
        <tr>  
            <td>  
                <?php echo $row->id;?>  
            </td>  
            <td>  
                <?php echo $row->fname;?>  
            </td>  
            <td>  
                <?php echo $row->mname;?>  
            </td>  
            <td>  
                <?php echo $row->lname;?>  
            </td>  
            <td>  
                <?php echo $row->pwd;?>  
            </td>  
            <td>  
                <?php echo $row->cnf;?>  
            </td>  
            <td>  
                <?php echo $row->mail;?>  
            </td>  
            <td>  
                <?php echo $row->number;?>  
            </td>  
            <td>G  
                <?php echo $row->sex;?>  
            </td>  
            <td>  
                <?php echo $row->address;?>  
            </td>  
            <td>  
                <?php echo $row->code;?>  
            </td>  
            <td>  
                <?php echo $row->city;?>  
            </td>  
            <td>  
                <?php echo $row->country;?>  
            </td>  
            <td>  
                <?php echo $row->skills;?>  
            </td>  
            <td>  
                <?php echo $row->attach_file;?>  
            </td>  
            <td> <a href="listing.php?id =     
                <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
            </a> | <a href="index.php?id =     
                <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
            </a> </td>  
            <tr>  
                <? php } ?>  
