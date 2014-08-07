<?php
	$search = filter_var($_GET['search'],FILTER_SANITIZE_SPECIAL_CHARS);

	$mtime = microtime(); 
	$mtime = explode(" ",$mtime); 
	$mtime = $mtime[1] + $mtime[0]; 
	$starttime = $mtime; 
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
    
    	<!-- 
    		Made with love by @haydio
	   		http://hayd.io
	   	-->	
    
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>AppStore Artwork Grabber</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http:////netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            body {
  padding-top: 50px;
}
        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body>
        
        <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">AppStore Artwork Grabber</a>
    </div>
    <div class="collapse navbar-collapse">
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
  
  <div class="text-center">
    <h2>
    	<form action="" method="GET"> 
		<input name="search" type="text" value="<?php echo "$search"; ?>" size="15" /> 
		<input type="submit" value="Search"/>
	</form>
   </h2>
    <p class="lead">
	<?php
if(!empty($_GET['search'])){

<<<<<<< HEAD
    if (apc_exists($search)) {
    $data = apc_fetch($search);
    $apcUsed = Yes;
} else {
=======
>>>>>>> FETCH_HEAD
    $app_uri    = "http://itunes.apple.com/search?entity=software,iPadSoftware,macSoftware&term=" .urlencode($search);
    $data       = file_get_contents ($app_uri);
    apc_store($search, $data, 3600);
    
    $apcUsed = No;
}
    
    $json       = json_decode (trim($data));

    $resultNumber = 0;

    $resultCount = ($json->resultCount);
    
    echo "<table width='100%' border='0'>";

while ($i++ < $resultCount)
{

		echo "<tr>
			<td width='59px' height='59px'>";
			echo "<img src='";
			print($json->results[$resultNumber]->artworkUrl60);
			echo "' width='57px' height='57px' />";
			echo "</td>";
			echo "<td width='150px'><a href='";
			print($json->results[$resultNumber]->trackViewUrl);
			echo "'>";
			print($json->results[$resultNumber]->trackName);
			echo "</a></td>";
			echo "<td width='200px'><b><a href='";
			print($json->results[$resultNumber]->artworkUrl60);
			echo "' />Small Icon</a></b></td>";
			echo "<td width='200px'><b><a href='";
			print($json->results[$resultNumber]->artworkUrl512);
			echo "' />Large Icon</a></b></td>";
		echo "</tr>";

$resultNumber++;
    
}
echo "</table></br>";

   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $endtime = $mtime; 
   $totaltime = ($endtime - $starttime); 

echo "
<!-- 
~~~~***~~~~Diagnostics~~~~***~~~~~~
	Search Term: $search
	Search URL: $app_uri (If request was cached this will be blank)
	APC Used: $apcUsed
	Number of results: $resultCount
	Page creation time: $totaltime seconds
~~~~***~~~~Diagnostics~~~~***~~~~~~
-->";

}
?>
    </p>
  </div>
</div><!-- /.container -->
        
        <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
 
        });
        
        </script>
</body>
</html>
