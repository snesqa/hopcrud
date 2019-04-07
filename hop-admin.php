<h1>HOP Theme Options</h1>
<h3 class="title">Manage Options</h3>
<p>CRUD demonstration for final exam by Snezana Ilic</p>

<table>
			<thead>
				<tr>
					<th colspan="2">Category</th>
				</tr>
			</thead>	

				<?php
					require_once 'conn.php';
					$stmt = $link->prepare("SELECT cat_id, cat_type FROM wp2_category;");
					$stmt->execute();
					$stmt->bind_result($catid, $cattype);
					while($stmt->fetch()) {
					echo '<tr class="alt" >
					<td td colspan="2">'.$cattype.'</td>
					</tr>';
					}
				?>
			</table>
