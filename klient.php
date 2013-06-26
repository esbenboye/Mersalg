<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/javascript.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/css.css" rel="stylesheet" media="screen">
<title>Fizk inc. Mersalg</title>
<script type="text/javascript">
</script>
</head>
<body>
<div class="container container-narrow">
	<div class="row">
		<div class="page-header">
  			<h1>EsbenBoye inc.<small> Mersalgsskema</small></h1>
		</div>
		<div class="input-prepend input-append">
			<input class="span3" type="text" placeholder="Indtast initialer" id="initialer">
          	<span class="add-on btn" id="initialer_lock"><i class="icon-lock"></i></span>
          	<input type="hidden" name="initialer" id="hidden_initialer">
			
		</div>
		
		<hr>
		
		<div class="row">          
			
				<div class="lead">
					<span class="span2">Permissions:</span>
					<span id="permission" class="span2">-</span>
                  <div class="btn-group span2">
						<a href="#" id="sub_perm" class="btn btn-danger disabled"><i class="icon-minus"></i></a>
						<a href="#" id="add_perm" class="btn btn-success disabled"><i class="icon-plus"></i></a>
					</div>
				</div>
			
		</div>
		<div class="row">
				<div class="lead">
					<span class="span2">Salg:</span> 
					<span id="salg" class="span2">-</span>
					<div class="btn-group span2">
						<a href="#" id="sub_salg" class="btn btn-danger disabled"><i class="icon-minus"></i></a>
						<a href="#" id="add_salg" class="btn btn-success disabled"><i class="icon-plus"></i></a>
					</div>
				</div>
			
		</div>
		<hr>
		<div class="row-fluid" style="">
			<div class="span3"><strong>Dato</strong></div>
			<div class="span3"><strong>Permissions</strong></div>
			<div class="span2"><strong>Salg</strong></div>
		</div>
		
		<div id="stats"></div>
		
		<p id="debug"></p>
	</div>
</div>
</body>
</html>