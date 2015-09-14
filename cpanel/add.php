<?php
header("Content-type: text/html; charset=utf-8");
session_start();

if(isset($_SESSION['admin_id'])){
	echo '<h1>电影</h1>';
	echo '<form action="savemovie.php" method="post" enctype="multipart/form-data" >
        	<label for="poster">Choose a photo:</label>
			<input type="file" name="poster" /><br />
        
        	<label for="name">Movie Name:</label>
            <input type="text" name="name" /><br />
            
            <label for="starring">Starring:</label>
            <input type"text" name ="starring"/><br />
			
			<label for="desc">Description:</label>
            <input type="text" name="desc"></input><br />
			
			<label for="type">Movie Type: </label>
			<select name="type">
  				<option value="comedy">喜剧</option>
				<option value="cartoon">动画</option>
  				<option value="actioner">动作</option>
  				<option value="fiction">科幻</option>
  				<option value="horror">恐怖</option>
				<option value="literary">文艺</option>
  				<option value="affection">爱情</option>
			</select><br />
			
			<label for="releasedate">Release Date:</label>
            <input type="date" name="releasedate" /><br />
            
			<label for="xglink">Xigua Link:</label>
            <input style="width:800px" type="text" name="xglink" /><br />
			
            <label for="jjlink">JJvod Link:</label>
            <input style="width:800px" type="text" name="jjlink" /><br />
                        
            <label for="thunderlink">Thunder Link:</label>
            <input style="width:800px" type="text" name="thunderlink" /><br />
            
            <input type="submit" name="submit" value="Submit" />
	</form>';
	
	echo '<h1>电视剧</h1>';
	echo '<form action="saveshow.php" method="post" enctype="multipart/form-data" >
        	<label for="poster">Choose a photo:</label>
			<input type="file" name="poster" /><br />
        
        	<label for="name">Show Name:</label>
            <input type="text" name="name" /><br />
            
            <label for="starring">Starring:</label>
            <input type"text" name ="starring"/><br />
			
			<label for="desc">Description:</label>
            <input type="text" name="desc"></input><br />
            
            <input type="submit" name="submit" value="Submit" />
	</form>';
	
	echo '<h1>集数</h1>';
	echo '<form action="saveseries.php" method="post" enctype="multipart/form-data" >
        	<label for="showid">剧名: </label>
			<input type="text" name="showid" /><br />
        
        	<label for="seriesid">集数:</label>
            <input type="text" name="seriesid" /><br />
            
            <label for="xglink">Xigua Link:</label>
            <input style="width:800px" type="text" name="xglink" /><br />
			
            <label for="jjlink">JJvod Link:</label>
            <input style="width:800px" type="text" name="jjlink" /><br />
                        
            <label for="thunderlink">Thunder Link:</label>
            <input style="width:800px" type="text" name="thunderlink" /><br />
            
            <input type="submit" name="submit" value="Submit" />
	</form>';
}else{header('location:adminlogin.html');};
?>


