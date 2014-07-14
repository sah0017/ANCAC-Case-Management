<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 800px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
                
	</style>
</head>

<body>
	<div class="welcome">
            <h1>Case</h1>
            <h2> Abused <?php echo Form::submit('Edit'); ?>
              Information <?php echo Form::submit('Edit'); ?>
              Workers <?php echo Form::submit('Edit'); ?></h2>
            <h2>Accused <?php echo Form::submit('Edit'); ?>
                Relative of abused<?php echo Form::select('Ralationships', array(
                'Father' => array('natural' => 'ratural','adopted' => 'adopted'),
                 'Mother' => array('natural' => 'natural'),
            ));?> </h2>
               
            
	</div>
    
</body>
</html>
