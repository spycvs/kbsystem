<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 800px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
#my_camera{
 width: 400px;
 height: 400px;
 border: 1px solid black;
}
</style>
</head>
<body>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>TAKE PHOTO</h2>
    </div>
    <div class="modal-body">
    <br>
    <div class="brgy-cert">
    <!-- camera -->
    <div id="my_camera"></div>
    </div>

<br>
<div class="brgy-cert">

    <!-- take picture -->
</div>
    </div>
    <div class="modal-footer">

    <div class="brgy-cert">
         
          <input type="button" class="delete-btn" onClick="takepic()" value="CAPTURE">
                
    </div>
    </div>
  </div>

</div>
<script type="text/javascript" src="../js/webcam.min.js"></script>
<!-- webcam -->
<script language="JavaScript">

 // Configure a few settings and attach camera
 Webcam.set({
  width: 320,
  height: 240,
  image_format: 'jpeg',
  jpeg_quality: 90
 });
 Webcam.attach( '#my_camera' );

function takepic() {
 // get picture and save image data
 Webcam.snap( function(data_uri) {
  
 document.getElementById('pic').innerHTML = '' + '<img id="snapshot" value="abc" src="' + data_uri + '">';
 document.getElementById('abc').value="abcd";
 modal.style.display = "none";
} );
}

function savepicture() {
 // get picture and save image data
  var data_uri = document.getElementById('snapshot').src;
  Webcam.upload( data_uri, 'add.php', function(code, text) {
  
 });
}

function updatepicture() {
 // get picture and save image data
 
  var data_uri = document.getElementById('snapshot').src;
  Webcam.upload( data_uri, 'update.php', function(code, text) {
  
 });
}
 
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var cancel = document.getElementById("cancel");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
cancel.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
