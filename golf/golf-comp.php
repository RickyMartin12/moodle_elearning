<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
		<div class="banner">
			<h2><a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Golf Management</a> <i class="fa fa-angle-right"></i> <span>Competencies</span></h2>
		</div>
		<div class="content-top">
			<div class="profile row">
				<div class="col-md-12">
					<div class="col-md-12 profile-bottom w3-row-padding tabs row">
						<div class="row">
							<div class="col-md-12">
								<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_off"></i><i class="fas fa-chevron-down" id="golf_on"></i></font>
				                    <span class="fas fa-golf-ball"></span>&nbsp;&nbsp;Golf Management
			                    </h5>
			                </div>
			           </div>

			           <div id="golf_cont">
			              <div class="col-md-12">
			                 <div class="row">
				               <div class="col-md-12">
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_off_level_1"></i><i class="fas fa-chevron-down" id="golf_on_level_1"></i></font> <span class="fas fa-golf-ball"></span>&nbsp;&nbsp;Golf Management Level 1 - Competencies </h5>
				                </div>
				            </div>

				            <div id="golf_cont_level_1">
				            	<div class="row">
				            	<div class="col-md-12">
				            	<div class="w3-panel w3-pale-blue w3-display-container" id="padder">
								  <h3>Competencies!</h3>
								  <p id="marger">No competencies have been linked to this course.</p>
								</div>
								</div>
								</div>
				            </div>

				            <div class="row">
				               <div class="col-md-12">
									<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_off_level_2"></i><i class="fas fa-chevron-down" id="golf_on_level_2"></i></font> <span class="fas fa-golf-ball"></span>&nbsp;&nbsp;Golf Management Level 2 - Competencies </h5>
				                </div>
				            </div>

				            <div id="golf_cont_level_2">
					            <div class="row">
					            <div class="col-md-12">
					            <div class="w3-panel w3-pale-blue w3-display-container" id="padder">
									  <h3>Competencies!</h3>
									  <p id="marger">No competencies have been linked to this course.</p>
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
	
	$("#golf_off").css('display','none');

    $("#golf_on").click(function () 
    {
	  		$("#golf_cont").slideUp("slow");
    		$("#golf_on").css('display', 'none');
    		$("#golf_off").css('display', 'block');
  	});

  	$("#golf_off").click(function () 
    {
	  		$("#golf_cont").slideDown("slow");
    		$("#golf_off").css('display', 'none');
    		$("#golf_on").css('display', 'block');
  	});

  	// SPA LEVEL 1


  	$("#golf_off_level_1").css('display','none');

  	$("#golf_on_level_1").click(function () 
    {
	  		$("#golf_cont_level_1").slideUp("slow");
    		$("#golf_on_level_1").css('display', 'none');
    		$("#golf_off_level_1").css('display', 'block');
  	});

  	$("#golf_off_level_1").click(function () 
    {
	  		$("#golf_cont_level_1").slideDown("slow");
    		$("#golf_off_level_1").css('display', 'none');
    		$("#golf_on_level_1").css('display', 'block');
  	});


  	$("#golf_off_level_2").css('display','none');

  	$("#golf_on_level_2").click(function () 
    {
	  		$("#golf_cont_level_2").slideUp("slow");
    		$("#golf_on_level_2").css('display', 'none');
    		$("#golf_off_level_2").css('display', 'block');
  	});

  	$("#golf_off_level_2").click(function () 
    {
	  		$("#golf_cont_level_2").slideDown("slow");
    		$("#golf_off_level_2").css('display', 'none');
    		$("#golf_on_level_2").css('display', 'block');
  	});



</script>


