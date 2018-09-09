<!DOCTYPE html>   
<html>   
<head>   
<title>Upload Foto</title>   
</head>   
<body>   
    <h2>Upload Foto</h2>  
    <?php echo form_open_multipart('foto/upload'); ?>  
    <table>  
        <tr>  
            <td><input type="file" name="foto" /></td> 
        </tr>  
        <tr>  
            <td><input type="submit" name="upload" value="upload"></td>  
        </tr>  
    </table>  
    <?php echo form_close(); ?>    
</body>   
</html>   