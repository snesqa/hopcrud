.<h1>HOP Delete category</h1>
<h3 class="title">Delete category</h3>
<p>CRUD demonstration for final exam by Snezana Ilic</p>

<?php 
	$pageTitle = "delete category";
    //include 'includes/header.php';
    //include 'includes/menu.php'; 
	require_once 'conn.php';
?>
	<div class="contact-wrapper">
		<?php	
			if(!isset($_POST['submitdelete'])){ 
		?>
		<h2>Delete category</h2>
			<form action="" method="post">
			<select name="cid">
				<option>Category name</option>
			<?php
			$sql = "SELECT cat_id, cat_type FROM wp2_category";
			$stmt = $link->prepare($sql);
			$stmt->execute();
			$stmt->bind_result($cid, $cattype);
			while ($stmt->fetch()) {
				echo '	<option value="'.$cid.'">'.$cattype.'</option>'.PHP_EOL;
			}
		?>
		</select><br>
			<input type="submit" name="submitdelete" value="Delete category">
		</form>
		</div>

		<?php 
			}else{ 
		
	$cid = filter_input(INPUT_POST, 'cid') or die(mysql_error());
			$sql = "DELETE FROM wp2_category WHERE cat_id =?";
			$stmt = $link->prepare($sql);
			$stmt->bind_param('i', $cid);
			$stmt->execute();

			//echo 'Project deleted , affected rows: '.$stmt->affected_rows ;	
		?>
		<h2>Delete category</h2>
		<form action="" method="post">
		<select name="cid">
			<option>Category name</option>
		<?php
			$sql = "SELECT cat_id, cat_type FROM wp2_category";
			$stmt = $link->prepare($sql);
			$stmt->execute();
			$stmt->bind_result($cid, $cattype);
			while ($stmt->fetch()) {
				echo '	<option value="'.$cid.'">'.$cattype.'</option>'.PHP_EOL;
			}

			?>

		</select><br>
			<input type="submit" name="submitdelete" value="Delete category">
		</form>
		

		<?php 
			}
		?>
			
			
			

