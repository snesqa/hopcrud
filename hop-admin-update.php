<h1>HOP update catogory</h1>
<h3 class="title">Update category</h3>
<p>CRUD demonstration for final exam by Snezana Ilic</p>

<?php 
	$pageTitle = "Create category";
    //include 'includes/header.php';
    //include 'includes/menu.php'; 
	require_once ('conn.php');
?>
<h2>Update Category</h2>
<?php
if(isset($_POST['submitUpdate'])){
	

$catid = filter_input(INPUT_POST, 'catid', FILTER_VALIDATE_INT) or die(' fejl her i catid');
$cattype = filter_input(INPUT_POST, 'cattype', FILTER_SANITIZE_STRING) or die('cattype');


$sql = "UPDATE wp2_category SET cat_type=? where cat_id=?";

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('si', $cattype, $catid);
	

	if($stmt->execute()){
		echo 'updated' ;
	}else{
		echo 'not working yet';
	}
	
	//echo 'inserted '.$pname.' as id:'.($stmt->insert_id); // id for inserted record
	//echo 'Your username is '.$email.' go to <a href="index.php">login</a>'
	//header("location: index.php?signup=true");
?>
	
<form action="" method="post">
	<select name="catid" onchange="window.location=<?php require_once(get_template_directory() . '/inc/templates/hop-admin-update.php' ); ?>?catid='+this.value">
		<!-- +this.value / + is concatinate, this is element(select), value of that element-  -->
	<option value="">Category name</option>
<?php
	$sql = 'SELECT cat_id, cat_type FROM wp2_category';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($catid, $cattype);
		while ($stmt->fetch()) {
			$category = ($catid==(int)$_GET['catid'])?'selected=selected':'';//select selected pname, it selects the current value in dropdown to be shown and not the default value 
			echo '<option value="'.$catid.'" '.$category.'>'.$cattype.'</option>';
		}
	?>
		</select><br>
	<?php 
		if(isset($_GET['catid'])){
			$ProjectID = (int)$_GET['catid'];
			$Project = $link->prepare("SELECT cat_id, cat_type 
										FROM wp2_category WHERE cat_id = ?");
			if($Project===false)//check if statement is true
				echo 'Problem with statement';
			$Project->bind_param('i', $ProjectID);
			$Project->execute();
			$Project->bind_result($CategoryName);
			$results = $Project->fetch();
		}

	?>
	Category name : <input type="text" name="cattype" value="<?php echo $CategoryName;?>">
	
	<input type="submit" name="submitUpdate" value="Instant Update">
	</form>
<?php
}else{
?>
<form action="" method="post">
	<select name="catid" onchange="window.location=<?php require_once(get_template_directory() . '/inc/templates/hop-admin-update.php' ); ?>?catid='+this.value"><!-- +this.value / + is concatinate, this is element(select), value of that element-  -->
	<option value="">Category name</option>
<?php
	$sql = 'SELECT cat_id, cat_type FROM wp2_category';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($catid, $cattype);
		while ($stmt->fetch()) {
			$category = ($catid==(int)$_GET['catid'])?'selected=selected':'';//select selected pname, it selects the current value in dropdown to be shown and not the default value 
			echo '<option value="'.$catid.'" '.$category.'>'.$cattype.'</option>';
		}
	?>
		</select><br>
	<?php 
		if(isset($_GET['catid'])){
			$ProjectID = (int)$_GET['catid'];
			$Project = $link->prepare("SELECT cat_id, cat_type 
										FROM wp2_category WHERE cat_id = ?");
			if($Project===false)//check if statement is true
				echo 'Problem with statement';
			$Project->bind_param('i', $ProjectID);
			$Project->execute();
			$Project->bind_result($CategoryName);
			$results = $Project->fetch();
		}

	?>
	Category name : <input type="text" name="cattype" value="<?php echo $CategoryName;?>">
	
	<input type="submit" name="submitUpdate" value="Instant Update">
	</form>
<?php
}
?>
	
