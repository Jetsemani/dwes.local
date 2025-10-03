<?php 
  require_once __DIR__ .'/inicio.part.php';
  require_once __DIR__ .'/navegacion.part.php';
?>

<!-- Principal Content Start -->
   <div id="contact">
   	  <div class="container">
   	    <div class="col-xs-12 col-sm-8 col-sm-push-2">
       	   <h1>CONTACT US</h1>
       	   <hr>
       	   <p>Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
	       <form class="form-horizontal">
	       	  <div class="form-group">
	       	  	<div class="col-xs-6">
	       	  	    <label class="label-control">First Name</label>
	       	  		<input class="form-control" type="text">
	       	  	</div>
	       	  	<div class="col-xs-6">
	       	  	    <label class="label-control">Last Name</label>
	       	  		<input class="form-control" type="text">
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Email</label>
	       	  		<input class="form-control" type="text">
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Subject</label>
	       	  		<input class="form-control" type="text">
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Message</label>
	       	  		<textarea class="form-control"></textarea>
	       	  		<button class="pull-right btn btn-lg sr-button">SEND</button>
	       	  	</div>
	       	  </div>
	       </form>
	    </div>   
   	  </div>
   </div>
<!-- Principal Content Start -->

<?php 
  require_once __DIR__ .'/fin.part.php';
?>