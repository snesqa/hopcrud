<h1>HOP create catogory</h1>
<h3 class="title">create new category</h3>
<p>CRUD demonstration for final exam by Snezana Ilic</p>
 <meta charset="utf8">
<?php 

	$pageTitle = "Create category";
	require_once 'conn.php';
	//$form_submit === FALSE; 
?>
	
	<?php if(!isset($_POST['submitcreate'])){ ?>
	<form action="" method="post">
		<h2>Create category</h2>
		Category name* <br>
		<input type="text" name="cat_type" value="create"><br>
		<br>
		<input type="submit" name="submitcreate" value="Add new gategory">
	</form>

<?php
}else{ 
 	require_once 'conn.php'; // establish db connection
	//$cattype = "hej";
	$cattype = filter_input(INPUT_POST, 'cat_type') or die(' fejl i table cat_type');

	$sql = 'INSERT INTO wp2_category ( cat_type ) VALUES ( ? )';

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('s', $cattype);
	$stmt->execute();

//header('location:hop-admin-create.php');
	//echo 'inserted resource name '.$cattype.' as id:'.($stmt->insert_id); // id for inserted record
	
	
	$pageTitle = "Create category";
	require_once 'conn.php';
	
?>
	<h2>Create category</h2>
	
	<form action="" method="post">
		Category name* <br>
		<input type="text" name="cat_type" value="">
		<br>
		<input type="submit" name="submitcreate" value="Add new category">
	</form>
<?php
}
	
 ?>
