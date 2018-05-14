
<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <style type="text/css">
    	select.input-sm{
    		line-height: 20px;
    	}
    </style>
    
    </head>
    <body>
        <div class="container">
        <h1>Data Booking</h1>
        <?php echo "<h2>".$this->session->flashdata('pesan')."</h2>" ?>
        <table id="example" class="table table-hover">
             <thread>
	            	<th >ID</th>
	                <th >Category</th>
	                <th >Description</th>
	                <th >Action</th>
	      		</thread>
       			<tbody>
        			<?php foreach($result as $d){ ?>
          			<tr>
          				<td><?php echo $d['id']; ?></td>
		               <td><?php echo $d['id_ktg']; ?></td>
		               <td><?php echo $d['deskripsi']; ?></td>
                 		<td>
                  			<p><a href="<?php echo base_url()."kategori/do_preview/".$d['id']; ?>">Preview</a></p>
                			<p><a href="<?php echo base_url()."kategori/do_delete/".$d['id']; ?>">Delete</a>
               			</td>
           			</tr>
       			</tbody> <?php } ?>
        </table>
    </div>
    </body>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
</html>