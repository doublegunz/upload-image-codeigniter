<!DOCTYPE html>   
<html>   
<head>   
    <title> Tampil Foto</title>   
</head>   
<body>   

    <H3>Daftar Foto</H3> 
    <p> [<a href="<?php echo base_url(); ?>index.php/foto/add">Upload</a>] </p>
    <br>
    <table border=1 width=80% cellpadding=2 cellspacing=0>  
    <tr bgcolor=silver align=center>  
        <td>No</td>  
        <td>Foto</td> 
    </tr>  
    <?php if ($jumlah > 0) {
        $no = 1;
        foreach ($foto as $row) { ?>  
            <tr align=center>  
                <td><?php echo $no; ?></td>  
                <td> <img src="<?php echo base_url($row['nama']) ?>" height="80"></td>  
            </tr>  
            <?php 
            $no++;

        }

    } else { ?>  
        <tr align='center'>  
        <td colspan=7>Data kosong</td>  
        </tr>  
    <?php 
} ?>  

    </table>  
    <p>Jumlah data : <?php echo $jumlah; ?></p>  
    </body>   
</html>   