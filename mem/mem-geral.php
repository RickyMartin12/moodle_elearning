<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Membership Marketing</a> <i class="fa fa-angle-right"></i> <span>Overview</span>
					</h2>
			    </div>

	   <div class="modal fade" id="mem_1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title_act"></h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <p class="info_act"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <div class="video_act">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <p style="text-align:center; margin:0;">
                  <img src="/moodle/images/cs.png" class="logo-nav" style="width:68px;">
                </p>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  <i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font>
                </button>
              </div>
            </div>
          </div>
        </div>

			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">

								<div class="row">
										<div class="col-md-12">
												<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="mem_off"></i><i class="fas fa-chevron-down" id="mem_on"></i></font>
				                                            <span class="fab fa-markdown"></span>&nbsp;&nbsp;Membership Marketing
			                                     </h5>
			                            </div>
			                    </div>

			                    <div id="mem_cont">
			                      <div class="col-md-12">


			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="mem_off_level_1"></i><i class="fas fa-chevron-down" id="mem_on_level_1"></i></font>
					                            <span class="fab fa-markdown"></span>&nbsp;&nbsp;Membership
				                            </h5>
			                    		</div>
			                    	</div>

			                    	<div id="mem_cont_level_1">
			                    		
			                    		<div class="col-md-12">

				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_1"></i><i class="fas fa-chevron-down" id="overview_on_level_1"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview</h6>
													<div id="overview_cont_level_1">
					                                    <p>
					                                    	This Module is divided into four key sections, covering specific categories of the application. Each of these sections have videos that explain the software functionality available.

					                                    	


					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                       

				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pro_off_level_1"></i><i class="fas fa-chevron-down" id="pro_on_level_1"></i></font><span class="fa fa-user"></span>&nbsp;&nbsp;Profiles</h6>
													<div id="pro_cont_level_1">
					                                    <p>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(1);"><i class="fas fa-film"></i> Profiles </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(2);"><i class="fas fa-film"></i> Billing </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(3);"><i class="fas fa-file"></i> Profile Changelog </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(4);"><i class="fas fa-file"></i> Membership Additional Fees </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(5);"><i class="fas fa-file"></i> Automatic Debits </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(6);"><i class="fas fa-file"></i> Membership Discounts </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(7);"><i class="fas fa-file"></i> Membership Debits Update </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(8);"><i class="fas fa-file"></i> Enable Debits for Family Member’s and Associates </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(9);"><i class="fas fa-file"></i> CRM Activities in Membership </button>
					                                    	<br>


					                                    	


					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pro_aut_off_level_1"></i><i class="fas fa-chevron-down" id="pro_aut_on_level_1"></i></font><span class="fas fa-chalkboard-teacher"></span>&nbsp;&nbsp;Automatic Procedures</h6>
													<div id="pro_aut_cont_level_1">
					                                    <p>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(10);"><i class="fas fa-film"></i> Automatic Procedures </button>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="mem_vis_off_level_1"></i><i class="fas fa-chevron-down" id="mem_vis_on_level_1"></i></font><span class="fa fa-user"></span>&nbsp;&nbsp;Member Visits</h6>
													<div id="mem_vis_cont_level_1">
					                                    <p>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(11);"><i class="fas fa-film"></i> Member Visits </button>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="rep_off_level_1"></i><i class="fas fa-chevron-down" id="rep_on_level_1"></i></font><span class="fa fa-user"></span>&nbsp;&nbsp;Reports</h6>
													<div id="rep_cont_level_1">
					                                    <p>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="mem_model(12);"><i class="fas fa-film"></i> Membership Reports </button>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>









					                     

			                    	</div>

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
	

	$("#mem_off").css('display','none');

    $("#mem_on").click(function () 
    {
	  		$("#mem_cont").slideUp("slow");
    		$("#mem_on").css('display', 'none');
    		$("#mem_off").css('display', 'block');
  	});

  	$("#mem_off").click(function () 
    {
	  		$("#mem_cont").slideDown("slow");
    		$("#mem_off").css('display', 'none');
    		$("#mem_on").css('display', 'block');
  	});

  	$("#mem_off_level_1").css('display','none');

    $("#mem_on_level_1").click(function () 
    {
	  		$("#mem_cont_level_1").slideUp("slow");
    		$("#mem_on_level_1").css('display', 'none');
    		$("#mem_off_level_1").css('display', 'block');
  	});

  	$("#mem_off_level_1").click(function () 
    {
	  		$("#mem_cont_level_1").slideDown("slow");
    		$("#mem_off_level_1").css('display', 'none');
    		$("#mem_on_level_1").css('display', 'block');
  	});


  		$("#overview_off_level_1").css('display','none');

	  	$("#overview_on_level_1").click(function () 
	    {
		  		$("#overview_cont_level_1").slideUp("slow");
	    		$("#overview_on_level_1").css('display', 'none');
	    		$("#overview_off_level_1").css('display', 'block');
	  	});

	  	$("#overview_off_level_1").click(function () 
	    {
		  		$("#overview_cont_level_1").slideDown("slow");
	    		$("#overview_off_level_1").css('display', 'none');
	    		$("#overview_on_level_1").css('display', 'block');
	  	});


	  	$("#pro_aut_off_level_1").css('display','none');

	  	$("#pro_aut_on_level_1").click(function () 
	    {
		  		$("#pro_aut_cont_level_1").slideUp("slow");
	    		$("#pro_aut_on_level_1").css('display', 'none');
	    		$("#pro_aut_off_level_1").css('display', 'block');
	  	});

	  	$("#pro_aut_off_level_1").click(function () 
	    {
		  		$("#pro_aut_cont_level_1").slideDown("slow");
	    		$("#pro_aut_off_level_1").css('display', 'none');
	    		$("#pro_aut_on_level_1").css('display', 'block');
	  	});

	  	$("#pro_off_level_1").css('display','none');

	  	$("#pro_on_level_1").click(function () 
	    {
		  		$("#pro_cont_level_1").slideUp("slow");
	    		$("#pro_on_level_1").css('display', 'none');
	    		$("#pro_off_level_1").css('display', 'block');
	  	});

	  	$("#pro_off_level_1").click(function () 
	    {
		  		$("#pro_cont_level_1").slideDown("slow");
	    		$("#pro_off_level_1").css('display', 'none');
	    		$("#pro_on_level_1").css('display', 'block');
	  	});

	  	$("#rep_off_level_1").css('display','none');

	  	$("#rep_on_level_1").click(function () 
	    {
		  		$("#rep_cont_level_1").slideUp("slow");
	    		$("#rep_on_level_1").css('display', 'none');
	    		$("#rep_off_level_1").css('display', 'block');
	  	});

	  	$("#rep_off_level_1").click(function () 
	    {
		  		$("#rep_cont_level_1").slideDown("slow");
	    		$("#rep_off_level_1").css('display', 'none');
	    		$("#rep_on_level_1").css('display', 'block');
	  	});


	  	$("#mem_vis_off_level_1").css('display','none');

	  	$("#mem_vis_on_level_1").click(function () 
	    {
		  		$("#mem_vis_cont_level_1").slideUp("slow");
	    		$("#mem_vis_on_level_1").css('display', 'none');
	    		$("#mem_vis_off_level_1").css('display', 'block');
	  	});

	  	$("#mem_vis_off_level_1").click(function () 
	    {
		  		$("#mem_vis_cont_level_1").slideDown("slow");
	    		$("#mem_vis_off_level_1").css('display', 'none');
	    		$("#mem_vis_on_level_1").css('display', 'block');
	  	});

	  	function mem_model(val) 
	  	{
	  		$(".info_act").css('display', 'block');

    		$(".video_act").css('display', 'block');

    		var mem_1 = $("#mem_1");

    		switch(val)
    		{
    			case 1:

    				$(".title_act").html('<i class="fas fa-film"></i> Profiles ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Membership Module.<br><i class="fas fa-caret-right"></i> An overview of the Profiles functionality.<br><i class="fas fa-caret-right"></i> How to search for an existing Profile using the Search and the Advanced Search.<br><i class="fas fa-caret-right"></i> How to use the Profile Options.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/mem_profile.mp4" type="video/mp4" controls></video>');

    			break;

    			case 2:

    				$(".title_act").html('<i class="fas fa-film"></i> Billing ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to generate Invoices, Credit Notes and Receipts.<br><i class="fas fa-caret-right"></i> How to reprint documents.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/mem_billings.mp4" type="video/mp4" controls></video>');

    			break;

    			case 3:

    				$(".title_act").html('<i class="fas fa-file"></i> Profile Changelog ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_prof_1.png" style="width:100%"><br><p>On Member’s profile on the top will be displayed a new option called <strong>Changelog.</strong></p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_prof_2.png" style="width:100%"><br><p>Profile Changelog will show all the changes performed on this specific profile.</p><p>All changes will be shown in bold.</p></div></div>');

	  				var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}

    			break;

    			case 4:

    				$(".title_act").html('<i class="fas fa-file"></i> Membership Additional Fees ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_add_fees_1.png" style="width:100%"><br><p>This will be available on Membership configuration, on <strong>Additional Debits Configuration</strong> tab under the section <strong>Extra Fee Configuration.</strong></p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_add_fees_2.png" style="width:100%"><br><p>This new functionality will can add an extra fee based on the <strong> Profile Sub-Type </strong> and a specific <strong> Method of Payment</strong>.</p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_add_fees_3.png" style="width:100%"><br><p>When a debit it’s created/generated the extra fee will be automatically added based on the previous configuration.</p></div></div>');

	  				var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}

    			break;

    			case 5:

    				$(".title_act").html('<i class="fas fa-file"></i> Automatic Debits ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_aut_debits_1.png" style="width:100%"><br><p>This will be available on Membership configuration, on <strong>Additional Debits </strong> Configuration tab under the section <strong> New Profile Debits</strong>.</p><p>Users will have the ability choose either if they would like to create debits or not for new profiles.</p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_aut_debits_2.png" style="width:100%"><br><p>After the profile creation, will show a window to create the debits for the new profile.</p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_aut_debits_3.png" style="width:100%"><br><p>On the profile section under the <strong>Debits</strong> section will be shown the debits automatically created.</p></div></div>');

	  				var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}

    			break;


    			case 6:

    				$(".title_act").html('<i class="fas fa-file"></i> Membership Discounts ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_disc_1.png" style="width:100%"><br><p>On Member’s profile is available a new functionality under the tab <strong>Member Discounts</strong>.</p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_disc_2.png" style="width:100%"><br><p>On Membership configuration under Configurations tab is a new option available <strong> Member Discounts</strong>.</p><p><strong>Discounts can be applied by Client Type, Warehouse Family and a specific article.</strong></p></div></div>');

	  				var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}

    			break;


    			case 7:

    				$(".title_act").html('<i class="fas fa-file"></i> Membership Debits Update ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_deb_upd_1.png" style="width:100%"><br><p>On Membership configuration under Configurations tab is a new option available <strong>Additional Debits Configuration.</strong></p><p>On <strong>Update Debits</strong> section users, will be able to choose two options, either <strong>Ask</strong> or <strong>No</strong>, when the Sub-Type is changed.</p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_deb_upd2.png" style="width:100%"><br><p>When a profile sub-type is changed a prompt, window will ask if it’s to update the debits or not.</p></div></div>');

	  				var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}

    			break;


    			case 8:

    				$(".title_act").html('<i class="fas fa-file"></i> Enable Debits for Family Member’s and Associates ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_ena.png" style="width:100%"><br><p>On Member profile screen under Family Members is available a new column containing a check box that will enable who pay the debits.</p></div></div>');

	  				var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}

    			break;

    			case 9:

    				$(".title_act").html('<i class="fas fa-file"></i> CRM Activities in Membership ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/mem_crm.png" style="width:100%"><br><p>On Member’s profile, under Activity History we have the new tab CRM that will allow the users to see all the CRM Activities under the profile selected.</p></div></div>');

	  				var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}

    			break;

    			case 10:

    				$(".title_act").html('<i class="fas fa-film"></i> Automatic Procedures ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Automatic Procedures.<br><i class="fas fa-caret-right"></i> How to generate Automatic Procedures.<br><i class="fas fa-caret-right"></i> How to add debits to the Profiles according to the Profile Types.<br><i class="fas fa-caret-right"></i> How to generate Profile invoices from the debits.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/mem_aut_pro.mp4" type="video/mp4" controls></video>');



    			break;

    			case 11:

    				$(".title_act").html('<i class="fas fa-film"></i> Visits ');

  					$(".info_act").html('<strong>This video describes how to search for Member Visits. </strong><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/mem_vis.mp4" type="video/mp4" controls></video>');



    			break;


    			case 12:

    				$(".title_act").html('<i class="fas fa-film"></i> Membership Reports ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Membership Reports.<br><i class="fas fa-caret-right"></i> How to print a Profile Count Report.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/mem_vis.mp4" type="video/mp4" controls></video>');



    			break;



    		}

    		mem_1.modal('show');
	  	}







</script>