<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
		<div class="banner">
			<h2><a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Point of Sale Solutions</a> <i class="fa fa-angle-right"></i> <span>Badges</span></h2>
		</div>
		<div class="content-top">
			<div class="profile row">
				<div class="col-md-12">
					<div class="col-md-12 profile-bottom w3-row-padding tabs row">
						<div class="row">
							<div class="col-md-12">
								<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off"></i><i class="fas fa-chevron-down" id="pos_on"></i></font>
				                    <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions - Badges
			                    </h5>
			                </div>
			           </div>

			           <div id="pos_cont">
			              <div class="col-md-12">
			                 <div class="row">
				               <div class="col-md-12">
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off_level_1"></i><i class="fas fa-chevron-down" id="pos_on_level_1"></i></font> <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions Level 1 - Badges </h5>
				                </div>
				            </div>

				            <div id="pos_cont_level_1">
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
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off_level_2"></i><i class="fas fa-chevron-down" id="pos_on_level_2"></i></font> <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions Level 2 - Badges </h5>
				                </div>
				            </div>

				            <div id="pos_cont_level_2">
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
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off_level_3"></i><i class="fas fa-chevron-down" id="pos_on_level_3"></i></font> <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions Level 3 - Badges </h5>
				                </div>
				            </div>

				            <div id="pos_cont_level_3">
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
	
	$("#pos_off").css('display','none');

    $("#pos_on").click(function () 
    {
	  		$("#pos_cont").slideUp("slow");
    		$("#pos_on").css('display', 'none');
    		$("#pos_off").css('display', 'block');
  	});

  	$("#pos_off").click(function () 
    {
	  		$("#pos_cont").slideDown("slow");
    		$("#pos_off").css('display', 'none');
    		$("#pos_on").css('display', 'block');
  	});

  	// SPA LEVEL 1


  	$("#pos_off_level_1").css('display','none');

  	$("#pos_on_level_1").click(function () 
    {
	  		$("#pos_cont_level_1").slideUp("slow");
    		$("#pos_on_level_1").css('display', 'none');
    		$("#pos_off_level_1").css('display', 'block');
  	});

  	$("#pos_off_level_1").click(function () 
    {
	  		$("#pos_cont_level_1").slideDown("slow");
    		$("#pos_off_level_1").css('display', 'none');
    		$("#pos_on_level_1").css('display', 'block');
  	});

  	$("#pos_off_level_2").css('display','none');

  	$("#pos_on_level_2").click(function () 
    {
	  		$("#pos_cont_level_2").slideUp("slow");
    		$("#pos_on_level_2").css('display', 'none');
    		$("#pos_off_level_2").css('display', 'block');
  	});

  	$("#pos_off_level_2").click(function () 
    {
	  		$("#pos_cont_level_2").slideDown("slow");
    		$("#pos_off_level_2").css('display', 'none');
    		$("#pos_on_level_2").css('display', 'block');
  	});

  	$("#pos_off_level_3").css('display','none');

  	$("#pos_on_level_3").click(function () 
    {
	  		$("#pos_cont_level_3").slideUp("slow");
    		$("#pos_on_level_3").css('display', 'none');
    		$("#pos_off_level_3").css('display', 'block');
  	});

  	$("#pos_off_level_3").click(function () 
    {
	  		$("#pos_cont_level_3").slideDown("slow");
    		$("#pos_off_level_3").css('display', 'none');
    		$("#pos_on_level_3").css('display', 'block');
  	});


</script>


