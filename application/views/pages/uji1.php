
<html>
	<head>
		<title>Pengujian 1 Modul ORM</title>
		<link rel="stylesheet" type="text/css" href="<?php echo url::base();?>css/jquery-ui.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo url::base();?>css/style.css" />
		<script type="text/javascript" src="<?php echo url::base();?>js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="<?php echo url::base();?>js/jquery-ui.js"></script>
		
		<script type="text/javascript">
			var fieldGenerated = false;
			function generateField(fields){
				var jsonResult = JSON.parse(fields);
				
				for(var key in jsonResult){
					if (jsonResult.hasOwnProperty(key)){
						var label = "<label for="+key+">"+key+"</label>";
						var input = "<input type=text name="+key+" id="+key+" class=text ui-widget-content ui-corner-all />";
						var lineBreak = "<br/>"
					    
						$("#create-form fieldset").append(label+input+lineBreak);
					}
				}

			}

			function activate(active){
				if (active){
					console.debug(active);
					$("#nav ul .side-menu a").removeClass("active-nav");
					$("#"+active).addClass("active-nav");
					$("#inner-wrapper h1").html("Object " + active);
					$("#main-menu").show();
					$("#list-entities").slideDown(500, "easeInOutCubic");
					fieldGenerated = false;
				}
			}

			$(
				function(){
					$("#main-menu").menu();	
					$("#main-menu").hide();
					// $("#list-entities").hide();
					var active = "<?php echo $active_class?>";
					activate(active);

					$( "#condition" ).hide();
					$( ".update-button" ).button();

					$("#nav ul .side-menu a").click(function(){
						$("#nav ul .side-menu a").removeClass("active-nav");
						$(this).addClass("active-nav");
						$("#inner-wrapper h1").html($(this).first().text());
						$("#main-menu").show();
						$("#list-entities").slideDown(500, "easeInOutCubic");
						fieldGenerated = false;
					});

					 $( "#dialog-form" ).dialog({
					      autoOpen: false,
					      height: 400,
					      width: 350,
					      modal: true,
					      buttons: {
					        Create: function() {
					        	// console.debug($("#dialog-form fieldset").serializeArray());
						          $.ajax({
										type: 'GET',
										url: '/uji/index.php/uji/save',
										async: false,
										data: "class="+$(".header-text .active-nav").text()+"&attributes="+JSON.stringify($("#dialog-form fieldset").serializeArray()), 	
										success: function(result){
											console.debug("success");
											$( "#message" ).html("success");
											$( "#dialog-message" ).dialog( "open" );
										},
										error: function (){
											console.debug("error");	
											$( "#message" ).html("error");
											$( "#dialog-message" ).dialog( "open" );
										}
									});
					        },
					        Cancel: function() {
					          $( this ).dialog( "close" );
					          location.reload();
					        }
					      },
					      close: function() {
					        location.reload();
					      }
					    });


					  
						
					  $( ".cond-opr" ).click(function(){
					     var operation = $( this ).html();
					     console.debug(operation);
					     $( "#condition" ).attr("title", $( "#condition" ).attr("title") + operation);
					  	 $( "#condition" ).dialog({
					      autoOpen: false,
					      height: 400,
					      width: 350,
					      modal: true,
					      buttons: {
					        Do: function() {
					        	
						          $.ajax({
										type: 'GET',
										url: '/uji/index.php/uji/'+operation,
										async: false,
										data: "class="+$(".header-text .active-nav").text()+"&"+$( "#condition-form" ).serialize(), 	
										success: function(result){
											console.debug(operation+" success");
											$( "#message" ).html(operation+" success");
											$( "#dialog-message" ).dialog( "open" );
											if (operation == "Delete")
									          	location.reload();
									        else if (operation == "Retrieve"){
									          $( "#condition-form" ).attr("action", '/uji/index.php/uji/'+operation);
								          	  $( "#condition-form" ).submit();
									          	// return false;e
									        }
										},
										error: function (){
											console.debug(operation+" error");	
											$( "#message" ).html(operation+" error");
											$( "#dialog-message" ).dialog( "open" );
										}
									});
						    
					        },
					        Cancel: function() {
					          $( this ).dialog( "close" );
					          
					        }
					      },
					      close: function() {
					      	location.reload();
					      }
					    });

						$( "#condition" ).dialog("open");
						
					  });

					  $( ".update-button" ).click(function(){
					 	var id = $( this ).attr("id").split("-")[1];
						var formId = "form-"+id;

						$.ajax({
								type: 'GET',
								url: '/uji/index.php/uji/update',
								async: false,
								data: "class="+$(".header-text .active-nav").text()+"&attributes="+JSON.stringify($("#"+formId).serializeArray()), 	
								success: function(result){
									console.debug("success");
									$( "#message" ).html("success");
									$( "#dialog-message" ).dialog( "open" );
								},
								error: function (){
									console.debug("error");	
									$( "#message" ).html("error");
									$( "#dialog-message" ).dialog( "open" );
								}
							});


					  });
					  // $( "#delete-form" ).dialog({
					  //     autoOpen: false,
					  //     height: 400,
					  //     width: 350,
					  //     modal: true,
					  //     buttons: {
					  //       Delete: function() {
						 //          $.ajax({
							// 			type: 'GET',
							// 			url: '/uji/index.php/uji/delete',
							// 			async: false,
							// 			data: "class="+$(".header-text .active-nav").text()+"&"+$( "#delete-condition-form" ).serialize(), 	
							// 			success: function(result){
							// 				console.debug("delete success");
							// 				$( "#message" ).html("delete success");
							// 				$( "#dialog-message" ).dialog( "open" );
							// 			},
							// 			error: function (){
							// 				console.debug("delete error");	
							// 				$( "#message" ).html("delete error");
							// 				$( "#dialog-message" ).dialog( "open" );
							// 			}
							// 		});
					  //       },
					  //       Cancel: function() {
					  //         $( this ).dialog( "close" );
					  //         location.reload();
					  //       }
					  //     },
					  //     close: function() {
					  //       location.reload();
					  //     }
					  //   });

					  // $( "#retrieve-form" ).dialog({
					  //     autoOpen: false,
					  //     height: 400,
					  //     width: 350,
					  //     modal: true,
					  //     buttons: {
					  //       Retrieve: function() {
						 //          $.ajax({
							// 			type: 'GET',
							// 			url: '/uji/index.php/uji/retrieve',
							// 			async: false,
							// 			data: "class="+$(".header-text .active-nav").text()+$( "#retrieve-condition-form" ).serialize(), 	
							// 			success: function(result){
							// 				console.debug("retrieve success");
							// 				$( "#message" ).html("retrieve success");
							// 				$( "#dialog-message" ).dialog( "open" );
							// 			},
							// 			error: function (){
							// 				console.debug("retrieve error");	
							// 				$( "#message" ).html("retrieve error");
							// 				$( "#dialog-message" ).dialog( "open" );
							// 			}
							// 		});
					  //       },
					  //       Cancel: function() {
					  //         $( this ).dialog( "close" );
					  //         location.reload();
					  //       }
					  //     },
					  //     close: function() {
					  //       location.reload();
					  //     }
					  //   });

					  $( "#dialog-message" ).dialog({
					      autoOpen: false,
					      modal: true,
					      buttons: {
					        OK: function() {
					          $( this ).dialog( "close" );
					          location.reload();
					        }
					      },
					      close: function() {
					        location.reload();
					      }
					    });

					 $("#main-menu a").click(function(){
					 	return false;
					 });
					 $("#create").click(function(){
					 	 if (! fieldGenerated){
						 	 $.ajax({
								type: 'GET',
								url: '/uji/index.php/uji/fields',
								async: false,
								data: "class="+$(".header-text .active-nav").text(), 	
								success: function(result){
									generateField(result);
									fieldGenerated = true;
								},
								error: function (){
									
								}
							});
					 	}
					 	$( "#dialog-form" ).dialog("open");

					 });

					 // $("#retrieve").click(function(){
					 // 	$( "#retrieve-form" ).dialog("open");

					 // });

					 // $("#delete").click(function(){
					 // 	$( "#delete-form" ).dialog("open");

					 // });

					$("#accordion").accordion({
						collapsible: true
					});

					$("#nav a").click(function(){
					 $.ajax({
							type: 'GET',
							url: '/uji/index.php/uji/index',
							async: false,
							data: "class="+$( this ).text(), 	
							success: function(result){

							},
							error: function (){
								
							}
						});
					});
				}

				
			)
			
		</script>
		
    </head>
    <body>
    	<div id="dialog-message">
    		<p id="message"></p>
    	</div>
    	<div id="dialog-form" title="Create new <?php echo $active_class;?>" >
		  <form id="create-form">
			  <fieldset>
			  </fieldset>
		  </form>
		</div>

		<div id="condition" title="Specify Condition for ">
			<form id="condition-form" method="GET">
				<fieldset>
					<label for="column">Column</label>
					</br>
					<input type="text" name="column" />
					</br>
					<label for="operator">Operator</label>
					</br>
					<input type="text" name="operator" />
					</br>
					<label for="value">Value</label>
					</br>
					<input type="text" name="value" />
					<input type="hidden" name="class" value="<?php echo $active_class;?>" />
				</fieldset>
			</form>
		</div>
<!-- 
		<div id="delete-form" title="Specify Delete Condition">
			<form id="delete-condition-form">
				<fieldset>
					<label for="column">Column</label>
					</br>
					<input type="text" name="column" />
					</br>
					<label for="operator">Operator</label>
					</br>
					<input type="text" name="operator" />
					</br>
					<label for="value">Value</label>
					</br>
					<input type="text" name="value" />
				</fieldset>
			</form>
		</div>


		<div id="retrieve-form" title="Specify Retrieve Condition">
			<form id="retrieve-condition-form">
				<fieldset>
					<label for="column">Column</label>
					</br>
					<input type="text" name="column" />
					</br>
					<label for="operator">Operator</label>
					</br>
					<input type="text" name="operator" />
					</br>
					<label for="value">Value</label>
					</br>
					<input type="text" name="value" />
				</fieldset>
			</form>
		</div>
 -->
    	<div id="header-block">
    		<nav id="nav">
			    <ul>
			        <li class="header-text title-text float-left no-border"><a href="#">Pengujian 1</a></li>
			        <li class="header-text float-right right-space side-menu"><a href="http://localhost/uji/index.php/uji?class=Mahasiswa" id="Mahasiswa">Mahasiswa</a></li>
			        <li class="header-text float-right side-menu"><a href="http://localhost/uji/index.php/uji?class=MataKuliah" id="MataKuliah">MataKuliah</a></li>
			        <li class="header-text float-right side-menu"><a href="http://localhost/uji/index.php/uji?class=Waktu" id="Waktu">Waktu</a></li>
			        <li class="header-text float-right side-menu"><a href="http://localhost/uji/index.php/uji?class=Dosen" id="Dosen">Dosen</a></li>
			        <li class="header-text float-right side-menu"><a href="http://localhost/uji/index.php/uji?class=Ruangan" id="Ruangan">Ruangan</a></li>
			    </ul>
			</nav>
    	</div>
    	
    	<ul id="main-menu">
    		<li><a id="create" href="">Create</a></li>
    		<li><a id="retrieve" class="cond-opr" href="">Retrieve</a></li>
    		<li><a id="delete" class="cond-opr" href="">Delete</a></li>
    	</ul>
    	<?php if ($active_class){?>
    	<div id="list-entities">
    		
    		<div id="inner-wrapper">
    			<h1></h1>
    			<div id="accordion">
					  <?php
	    				
		    				if ($objects)
		    				{
		    					foreach($objects as $object)
		    					{
		    			?>
			    					<h3><?php echo $object->get_primary_key_value();?></h3>
			    					<div>
			    						<form class="update-form" id="form-<?php echo $object->get_primary_key_value();?>" method="GET">
			    							<table>
				    						<?php
				    							$attributes = $object->get_object_attributes();
				    							foreach ($attributes as $attribute => $value)
				    							{
				    						?>
					    						<tr>
						    						<td><label for="<?php echo $attribute?>" class="object"><?php echo $attribute.': ';?></label></td>
						    						<td><input type="text" name="<?php echo $attribute?>" value="<?php print_r($value);?>" /></td>
					    						</tr>
				    						<?php 
				    							}
				    						?>
				    						</table>
			    						</form>
			    						<button class="update-button" id="button-<?php echo $object->get_primary_key_value();?>" data-role="button">update</button>
			    					</div>
						<?php
								}
							}
						?>
    			</div>
    			
    		</div>
    		<?php }?>
    		
    	</div>


    	
    </body>	
</html>