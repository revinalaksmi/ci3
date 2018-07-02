<div class="container">
	<div class="py-5 text-center">
		<?php 
+          if($this->session->userdata('level') == 0){
+            echo "<font color='yellow'>".$this->session->userdata('username')."</font>";
+          }else if ($this->session->userdata('level') == 1) {
+            echo "<font color='blue'>".$this->session->userdata('username')."</font>";
+          }else{
+            echo "<font color='white'>".$this->session->userdata('username')."</font>";
+          }
+          ?>

		<h2>as <?php echo $user->level?></h2>

	</div>
</div>