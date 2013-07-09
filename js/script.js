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
										type: 'POST',
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
			