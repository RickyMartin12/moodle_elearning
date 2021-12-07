<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
		<div class="banner">
			<h2><a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Spa & Leisure</a> <i class="fa fa-angle-right"></i> <span>Badges</span></h2>
		</div>
		<div class="content-top">
			<div class="profile row">
				<div class="col-md-12">
					<div class="col-md-12 profile-bottom w3-row-padding tabs row">
						<div class="row">
							<div class="col-md-12">
								<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off"></i><i class="fas fa-chevron-down" id="spa_on"></i></font>
				                    <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE - Badges
			                    </h5>
			                </div>
			           </div>

			           <div id="spa_cont">
			              <div class="col-md-12">
			                 <div class="row">
				               <div class="col-md-12">
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off_level_1"></i><i class="fas fa-chevron-down" id="spa_on_level_1"></i></font> <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE Level 1 - Badges </h5>
				                </div>
				            </div>

				            <div id="spa_cont_level_1">
				            	<div class="row">
				            	 <div class="col-md-12">
					            	<div class="w3-panel w3-pale-red w3-display-container" id="padder">
									  
									  <h3>Badges!</h3>
									  <p id="marger">There are no badges available.</p>
									</div>
								</div>
								</div>
				            </div>

				            <div class="botter2"></div>


				          </div>

				          <div class="col-md-12">
			                 <div class="row">
				               <div class="col-md-12">
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off_level_2"></i><i class="fas fa-chevron-down" id="spa_on_level_2"></i></font> <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE Level 2 - Badges </h5>
				                </div>
				            </div>

				            <div id="spa_cont_level_2">
				            	<div class="row">
				            	 <div class="col-md-12">
				            	<div class="w3-panel w3-pale-red w3-display-container" id="padder">
								  
								  <h3>Badges!</h3>
								  <p id="marger">There are no badges available.</p>
								</div>
								</div>
								</div>
				            </div>

				            <div class="botter2"></div>


				          </div>

				          <div class="col-md-12">
			                 <div class="row">
				               <div class="col-md-12">
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off_level_3"></i><i class="fas fa-chevron-down" id="spa_on_level_3"></i></font> <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE Level 3 - Badges </h5>
				                </div>
				            </div>

				            <div id="spa_cont_level_3">
				            	<div class="row">
				            	 <div class="col-md-12">
				            	<div class="w3-panel w3-pale-red w3-display-container" id="padder">
								  
								  <h3>Badges!</h3>
								  <p id="marger">There are no badges available.</p>
								</div>
								</div>
								</div>
				            </div>

				            <div class="botter2"></div>


				          </div>
				        </div>



			       </div>
			    </div>
			</div>
		</div>





		</div>
		<div class="copy">
            <p> &copy; 2019 Concept Moodle. All Rights Reserved | Design by <a href="https://concept.shijigroup.com/en/" target="_blank">Concept S.A.</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>


</div>


<?php include '../footer/footer.php'; ?>

<script type="text/javascript">
	
	$("#spa_off").css('display','none');

    $("#spa_on").click(function () 
    {
	  		$("#spa_cont").slideUp("slow");
    		$("#spa_on").css('display', 'none');
    		$("#spa_off").css('display', 'block');
  	});

  	$("#spa_off").click(function () 
    {
	  		$("#spa_cont").slideDown("slow");
    		$("#spa_off").css('display', 'none');
    		$("#spa_on").css('display', 'block');
  	});

  	// SPA LEVEL 1


  	$("#spa_off_level_1").css('display','none');

  	$("#spa_on_level_1").click(function () 
    {
	  		$("#spa_cont_level_1").slideUp("slow");
    		$("#spa_on_level_1").css('display', 'none');
    		$("#spa_off_level_1").css('display', 'block');
  	});

  	$("#spa_off_level_1").click(function () 
    {
	  		$("#spa_cont_level_1").slideDown("slow");
    		$("#spa_off_level_1").css('display', 'none');
    		$("#spa_on_level_1").css('display', 'block');
  	});

  	$("#spa_off_level_2").css('display','none');

  	$("#spa_on_level_2").click(function () 
    {
	  		$("#spa_cont_level_2").slideUp("slow");
    		$("#spa_on_level_2").css('display', 'none');
    		$("#spa_off_level_2").css('display', 'block');
  	});

  	$("#spa_off_level_2").click(function () 
    {
	  		$("#spa_cont_level_2").slideDown("slow");
    		$("#spa_off_level_2").css('display', 'none');
    		$("#spa_on_level_2").css('display', 'block');
  	});

  	$("#spa_off_level_3").css('display','none');

  	$("#spa_on_level_3").click(function () 
    {
	  		$("#spa_cont_level_3").slideUp("slow");
    		$("#spa_on_level_3").css('display', 'none');
    		$("#spa_off_level_3").css('display', 'block');
  	});

  	$("#spa_off_level_3").click(function () 
    {
	  		$("#spa_cont_level_3").slideDown("slow");
    		$("#spa_off_level_3").css('display', 'none');
    		$("#spa_on_level_3").css('display', 'block');
  	});


</script>


