<html>
	<head>
    	<title>Tambah Artikel</title>
    </head>
    <body>
    	<!--<form method="POST" action="<?php echo base_url()."crud/do_insert"; ?>"> -->
       <?php echo form_open_multipart('crud/do_insert')?>
        <table>
            <tr>
            	<td>Judul</td>
                <td><textarea name="judul"></textarea></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="author"/></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tgl"/></td>

            </tr>
            <tr>
            	<td>Isi</td>
                <td><textarea name="isi"></textarea></td>
            </tr>

            <tr>
                <td>Upload Gambar</td>
                <td><input type="file" name="userfile" size="20" /></td>
            </tr>
            <br /><br />
            <tr>
            	<td>
                </td>
                <td><input type="submit" name="btnSubmit" value="Simpan"/></td>
            </tr>
           
        </table>
        </form>
    </body>
</html>

