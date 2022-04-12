<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
		<div class="banner">
			<h2><a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Inventory</a> <i class="fa fa-angle-right"></i> <span>Badges</span></h2>
		</div>
		<div class="content-top">
			<div class="profile row">
				<div class="col-md-12">
					<div class="col-md-12 profile-bottom w3-row-padding tabs row">
						<div class="row">
							<div class="col-md-12">
								<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="inv_off"></i><i class="fas fa-chevron-down" id="inv_on"></i></font>
				                    <span class="fas fa-warehouse"></span>&nbsp;&nbsp;Inventory - Badges
			                    </h5>
			                </div>
			           </div>

			           <div id="inv_cont">
			              <div class="col-md-12">
			                 <div class="row">
				               <div class="col-md-12">
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="inv_off_level_1"></i><i class="fas fa-chevron-down" id="inv_on_level_1"></i></font> <span class="fas fa-warehouse"></span>&nbsp;&nbsp;Inventory - Badges </h5>
				                </div>
				            </div>

				            <div id="inv_cont_level_1">
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
	
	$("#inv_off").css('display','none');

    $("#inv_on").click(function () 
    {
	  		$("#inv_cont").slideUp("slow");
    		$("#inv_on").css('display', 'none');
    		$("#inv_off").css('display', 'block');
  	});

  	$("#inv_off").click(function () 
    {
	  		$("#inv_cont").slideDown("slow");
    		$("#inv_off").css('display', 'none');
    		$("#inv_on").css('display', 'block');
  	});

  	// SPA LEVEL 1


  	$("#inv_off_level_1").css('display','none');

  	$("#inv_on_level_1").click(function () 
    {
	  		$("#inv_cont_level_1").slideUp("slow");
    		$("#inv_on_level_1").css('display', 'none');
    		$("#inv_off_level_1").css('display', 'block');
  	});

  	$("#inv_off_level_1").click(function () 
    {
	  		$("#inv_cont_level_1").slideDown("slow");
    		$("#inv_off_level_1").css('display', 'none');
    		$("#inv_on_level_1").css('display', 'block');
  	});

  	


</script>


