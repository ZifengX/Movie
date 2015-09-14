<?php
	$connect= new PDO('mysql:host=localhost; dbname=movie','','');
	$connect->query("set names utf8");
	$sql = "SELECT movieid, poster, name,starring,description FROM movie WHERE type = 'literary' ORDER BY movieid DESC LIMIT 4";
	$result = $connect->query($sql);
	
	echo '<div class="panel panel-default">';
  	echo '<div class="panel-heading">文艺片</div>';
  	echo '<div class="panel-body">';
	foreach ($result as $row){	
           		echo '<div class="col-lg-3 col-sm-6">';
                	echo '<table class="table table-bordered well">';
                		echo '<tr>';
                        	echo'<td rowspan="4" style="width:45%">';
								echo'<img src="images/posters/'.$row['poster'].'" class="img-rounded" alt="'.$row['name'].'" />';
							echo'</td>';
                        	echo'<td colspan="2">'.$row['name'].'</td>';
                    	echo '</tr>';
                    	echo '<tr>';
                        	echo '<td colspan="2">'.$row['starring'].'</td>';
                    	echo '</tr>';
                    	echo '<tr>';
                        	echo '<td colspan="2">'.$row['description'].'</td>';
                    	echo '</tr>';
                    	echo '<tr>';
						echo '<td class="text-center">
							  <a href="movie.php?movie='.$row['movieid'].'" class="btn btn-xs btn-info" target="_blank">在线观看/下载</a>
							 </td>';
                    	echo '</tr>';
                	echo '</table>';
            	echo '</div>';
			}
			
							  echo '</div>';
echo '</div>';
			
			$connect = null;
			?>