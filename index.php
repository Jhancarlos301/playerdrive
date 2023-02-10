<?php
// Get domain name
include("include/GetDomainURL.php");

// Auto Update Base Path
include("./include/base-path.php");

// get base path
include("./include/my_base_path.php");
$base_txt_file_path = "./include/my_base_path.txt";
$my_base_path = get_base_path($base_txt_file_path);
$basepath = "$my_base_path";

//Configuration
include("./include/config.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>URL to File-Playback & Downloading</title>
  
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://use.fontawesome.com/20ab91acc4.js"></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel="stylesheet" href="include/style.css">

<!-- remove-000webhost-Banner -->
<script src="include/remove-000webhost-Banner.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<section id="contact">
  
  <div class="contact-wrapper">
  <h1 class="section-header" style="font-size:25px;text-transform: none;">URL to File-Playback & Downloading</h1>
 
  <!-- Left contact page --> 
    
    <form id="contact-form" class="form-horizontal" role="form"  action="#" method="get">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="file_URL" placeholder="Enter File-URL" name="file_URL" value="<?php echo("$file_URL"); ?>" required>

        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="file_Name" placeholder="Enter File-Name" name="file_Name" value="<?php echo("$file_Name"); ?>" required>

        </div>
      </div>


<div class="form-group">
        <div class="col-sm-12">
<center>    
<select name="file_Format" id="file_Format" style="width: 9.5em;">
<?php
$file_Format = $_GET['file_Format'];

// $file_Format = "Not Available";


// Include 'all-formats.php' File Here
include("include/all-formats.php");


foreach ($All_Formats as $key => $format) {
    if ($format == $file_Format) {
        echo('<option selected="selected" value='.$format.'>'.$format.'</option>');
    } else {
        echo('<option value='.$format.'>'.$format.'</option>');
    }
}

?>
</select>
</center>
</div>
      </div>


      <button class="btn btn-primary send-button" id="submit" type="submit"  name="submit" value="SUBMIT"  onclick="scrollToBottom()">
        <div class="alt-send-button" style="width: 100%;">
          <i class="fa fa-paper-plane"></i><span class="send-text">SUBMITTED!</span>
        </div>
      
      </button>
      
    </form>
    
    
    
  <!-- Left contact page --> 
    
      <div class="direct-contact-container">
      <hr>

<br><br>
 <h1 class="section-header" style="font-size:25px;text-transform: none;">Preview</h1>
      
<iframe style="border: 1px solid ;" class="embed-responsive-item" src="<?php echo("$Playback_URL"); ?>" width="100%" height="auto" preload="metadata" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<script>
var iframe = document.getElementsByTagName('iframe')[0];
iframe.style.background = 'white';
iframe.contentWindow.document.body.style.backgroundColor = 'white';
// iframe.src = 'include/default-iframe-page.php';

</script>
  <br><br>

      <hr>

<style>
.hidden_input {
display :none;
}
.button {
 display: flex;
 height: 45px;
 padding: 0;
 background: #333333;
 border: 1px solid silver;
 outline: none;
 border-radius: 5px;
 overflow: hidden;
 font-family: "Quicksand", sans-serif;
 font-size: 16px;
 font-weight: 500;
 cursor: pointer;
 width: ;
}

.button:hover{
 background: #FF5555;
color: #fff;
}

.button:active {
 background: #555555;
}

.button__text,
.button__icon {
 display: inline-flex;
 align-items: center;
 padding: 0 10px;
 color: #fff;
 height: 100%;
}

.button__icon {
 font-size: 1.5em;
 background: rgba(0, 0, 0, 0.08);
}

</style>

 <h1 class="section-header" style="font-size:25px;text-transform: none;">Playback Link-</h1>

<center>
<form action="include/playback.php" method="get">
<input name="url" class="form-control hidden_input" 
 type="text" value="<?php echo("$file_URL"); ?>" readonly/>
<input name="name" class="form-control hidden_input" type="text" value="<?php echo("$file_Name"); ?>" readonly/>
<input name="format" class="form-control hidden_input" 
 type="text" value="<?php echo("$file_Format"); ?>" readonly/>
<button type="submit" class="button">
  <span class="button__text">Start Playback </span>
  <span class="button__icon"><i class="fa fa-play" style="color:#FF5555;"></i>
  </span>
</button>
</form>
<br>

      <hr>

<style>
.hidden_input {
display :none;
}
.button {
 display: flex;
 height: 45px;
 padding: 0;
 background: #333333;
 border: 1px solid silver;
 outline: none;
 border-radius: 5px;
 overflow: hidden;
 font-family: "Quicksand", sans-serif;
 font-size: 16px;
 font-weight: 500;
 cursor: pointer;
 width: ;
}

.button:hover{
 background: #FF5555;
color: #fff;
}

.button:active {
 background: #555555;
}

.button__text,
.button__icon {
 display: inline-flex;
 align-items: center;
 padding: 0 10px;
 color: #fff;
 height: 100%;
}

.button__icon {
 font-size: 1.5em;
 background: rgba(0, 0, 0, 0.08);
}

</style>

 <h1 class="section-header" style="font-size:25px;text-transform: none;">Download Link-</h1>


<form action="include/download.php" method="get">
<input name="url" class="form-control hidden_input" 
 type="text" value="<?php echo("$file_URL"); ?>" readonly/>
<input name="name" class="form-control hidden_input" type="text" value="<?php echo("$file_Name"); ?>" readonly/>
<input name="format" class="form-control hidden_input" 
 type="text" value="<?php echo("$file_Format"); ?>" readonly/>
<button onclick="ConfirmDownload()" type="submit" class="button">
  <span class="button__text">Start Download</span>
  <span class="button__icon"><i class="fa fa-download" style="color:#FF5555;"></i>
  </span>
</button>

<script type="text/javascript">
      function ConfirmDownload() {

var URL = prompt("You are downloading: <?php echo("$file_Name");?>", "<?php echo("$Download_URL");?>");
    
if (URL != null) {
   alert("Downloading..." );
   return true;
   }else {
    return false;
   }
}
</script>

</form>
<br>
      <hr>

<!--
        <ul class="contact-list">
        
          <li class="list-item"><i class="fa fa-marker fa-2x"><span class="contact-text place"></span></i></li>
          
          <li class="list-item"><i class="fa fa-youtube-play"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call"></a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email"></a></span></i></li>
          
        </ul>
-->
        <div class="copyright">&copy; TR Coder </div>

      </div>
    
  </div>
  
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script  src="include/script.js"></script>

</body>
</html>

