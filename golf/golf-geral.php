<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Golf Management</a> <i class="fa fa-angle-right"></i> <span>Overview</span>
					</h2>
			    </div>

	   <div class="modal fade" id="golf_1" role="dialog">
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
												<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_off"></i><i class="fas fa-chevron-down" id="golf_on"></i></font>
				                                            <span class="fas fa-golf-ball"></span>&nbsp;&nbsp;Golf Management
			                                     </h5>
			                            </div>
			                    </div>

			                    <div id="golf_cont">
			                      <div class="col-md-12">


			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_off_level_1"></i><i class="fas fa-chevron-down" id="golf_on_level_1"></i></font>
					                            <span class="fas fa-golf-ball"></span>&nbsp;&nbsp;GOLF Reservations Level 1
				                            </h5>
			                    		</div>
			                    	</div>

			                    	<div id="golf_cont_level_1">


			                    		<div class="col-md-12">

				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_1"></i><i class="fas fa-chevron-down" id="overview_on_level_1"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview</h6>
													<div id="overview_cont_level_1">
					                                    <p>
					                                    	This Module is divided into three key sections, covering the Profile, the Tee-Sheet and the Single Reservations categories of the GOLF application. Each of these sections have videos that explain the software functionality available. 

					                                    	


					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pro_off_level_1"></i><i class="fas fa-chevron-down" id="pro_on_level_1"></i></font><span class="fa fa-user"></span>&nbsp;&nbsp;Profile</h6>
													<div id="pro_cont_level_1">


					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(1);"><i class="fas fa-film"></i> Profile Search </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(2);"><i class="fas fa-film"></i> Create a Search </button>
					                                    <br>


					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="sh_off_level_1"></i><i class="fas fa-chevron-down" id="sh_on_level_1"></i></font><span class="fas fa-table"></span>&nbsp;&nbsp;Tee-Sheet</h6>
													<div id="sh_cont_level_1">


					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(3);"><i class="fas fa-film"></i> Overview of Tee-Sheet </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(4);"><i class="fa fa-file"></i> Golf Booking Search (Guest Form) & Search by Group Name </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(5);"><i class="fa fa-file"></i> Date Selection in Golf Tee-Sheet </button>
					                                    <br>


					                                </div>
												<br>
					           					</div>
					                       </div>



					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="res_off_level_1"></i><i class="fas fa-chevron-down" id="res_on_level_1"></i></font><span class="fas fa-book"></span>&nbsp;&nbsp;Single Reservations</h6>
													<div id="res_cont_level_1">
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(6);"><i class="fas fa-film"></i> Reservation for an existing Profile </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(7);"><i class="fas fa-film"></i>  Reservation for a new Profile </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(8);"><i class="fas fa-film"></i> Details </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(9);"><i class="fas fa-film"></i> Modify, Move & Cancel </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(10);"><i class="fas fa-film"></i> Member Search - Member Guests </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(11);"><i class="fas fa-film"></i> Overview of Options </button>
					                                    <br>


					                                </div>
												<br>
					           					</div>
					                       </div>






					                    </div>
			                    		
			                    		

			                    	</div>

			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_off_level_2"></i><i class="fas fa-chevron-down" id="golf_on_level_2"></i></font>
					                            <span class="fas fa-golf-ball"></span>&nbsp;&nbsp;Golf Management - Level 2
				                            </h5>
			                    		</div>
			                    	</div>

			                    	<div id="golf_cont_level_2">

			                    		<div class="col-md-12">

				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_2"></i><i class="fas fa-chevron-down" id="overview_on_level_2"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview</h6>
													<div id="overview_cont_level_2">
					                                    <p>
					                                    	This Module is divided into three key sections, covering the Reservations (including the Group Bookings, the Packages and the Tournament/Shotgun Bookings), the Communications and the Reports categories of the GOLF application. Each of these sections have videos that explain the software functionality available. 

					                                    	


					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="gru_book_off_level_2"></i><i class="fas fa-chevron-down" id="gru_book_on_level_2"></i></font><span class="fas fa-book"></span>&nbsp;&nbsp; Reservations - Group Bookings</h6>
													<div id="gru_book_cont_level_2">
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(12);"><i class="fas fa-film"></i> Multiple Bookings </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(13);"><i class="fas fa-film"></i> Group Booking  </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(14);"><i class="fas fa-film"></i> Modify & Cancel </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(15);"><i class="fas fa-film"></i> Change Names </button>
					                                    <br>


					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_pck_off_level_2"></i><i class="fas fa-chevron-down" id="golf_pck_on_level_2"></i></font><span class="fas fa-golf-ball"></span>&nbsp;&nbsp; Reservations - Golf Packages</h6>
													<div id="golf_pck_cont_level_2">
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(16);"><i class="fas fa-film"></i> Package </button>
					                                    <br>
					                                    


					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_res_tou_off_level_2"></i><i class="fas fa-chevron-down" id="golf_res_tou_on_level_2"></i></font><span class="fas fa-bookmark"></span>&nbsp;&nbsp; Reservations - Tournament/Shotgun Bookings</h6>
													<div id="golf_res_tou_cont_level_2">
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(17);"><i class="fas fa-film"></i> Shotgun Setup </button>
					                                    <br>
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(18);"><i class="fas fa-film"></i> Shotgun Bookings </button>
					                                    <br>
					                                    


					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="com_tou_off_level_2"></i><i class="fas fa-chevron-down" id="com_tou_on_level_2"></i></font><span class="far fa-comments"></span>&nbsp;&nbsp; Communications</h6>
													<div id="com_tou_cont_level_2">
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(19);"><i class="fas fa-film"></i> Communications </button>
					                                    <br>
					                                    
					                                    


					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="golf_rep_off_level_2"></i><i class="fas fa-chevron-down" id="golf_rep_on_level_2"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp; Golf Reports</h6>
													<div id="golf_rep_cont_level_2">
					                                    <i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="golf_model(20);"><i class="fas fa-film"></i> Reports </button>
					                                    <br>
					                                    
					                                    


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



	  	$("#sh_off_level_1").css('display','none');

	  	$("#sh_on_level_1").click(function () 
	    {
		  		$("#sh_cont_level_1").slideUp("slow");
	    		$("#sh_on_level_1").css('display', 'none');
	    		$("#sh_off_level_1").css('display', 'block');
	  	});

	  	$("#sh_off_level_1").click(function () 
	    {
		  		$("#sh_cont_level_1").slideDown("slow");
	    		$("#sh_off_level_1").css('display', 'none');
	    		$("#sh_on_level_1").css('display', 'block');
	  	});

	  	$("#res_off_level_1").css('display','none');

	  	$("#res_on_level_1").click(function () 
	    {
		  		$("#res_cont_level_1").slideUp("slow");
	    		$("#res_on_level_1").css('display', 'none');
	    		$("#res_off_level_1").css('display', 'block');
	  	});

	  	$("#res_off_level_1").click(function () 
	    {
		  		$("#res_cont_level_1").slideDown("slow");
	    		$("#res_off_level_1").css('display', 'none');
	    		$("#res_on_level_1").css('display', 'block');
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

  		$("#overview_off_level_2").css('display','none');

	  	$("#overview_on_level_2").click(function () 
	    {
		  		$("#overview_cont_level_2").slideUp("slow");
	    		$("#overview_on_level_2").css('display', 'none');
	    		$("#overview_off_level_2").css('display', 'block');
	  	});

	  	$("#overview_off_level_2").click(function () 
	    {
		  		$("#overview_cont_level_2").slideDown("slow");
	    		$("#overview_off_level_2").css('display', 'none');
	    		$("#overview_on_level_2").css('display', 'block');
	  	});

	  	$("#gru_book_off_level_2").css('display','none');

	  	$("#gru_book_on_level_2").click(function () 
	    {
		  		$("#gru_book_cont_level_2").slideUp("slow");
	    		$("#gru_book_on_level_2").css('display', 'none');
	    		$("#gru_book_off_level_2").css('display', 'block');
	  	});

	  	$("#gru_book_off_level_2").click(function () 
	    {
		  		$("#gru_book_cont_level_2").slideDown("slow");
	    		$("#gru_book_off_level_2").css('display', 'none');
	    		$("#gru_book_on_level_2").css('display', 'block');
	  	});


	  	// golf_pck

	  	$("#golf_pck_off_level_2").css('display','none');

	  	$("#golf_pck_on_level_2").click(function () 
	    {
		  		$("#golf_pck_cont_level_2").slideUp("slow");
	    		$("#golf_pck_on_level_2").css('display', 'none');
	    		$("#golf_pck_off_level_2").css('display', 'block');
	  	});

	  	$("#golf_pck_off_level_2").click(function () 
	    {
		  		$("#golf_pck_cont_level_2").slideDown("slow");
	    		$("#golf_pck_off_level_2").css('display', 'none');
	    		$("#golf_pck_on_level_2").css('display', 'block');
	  	});


	  	$("#golf_res_tou_off_level_2").css('display','none');

	  	$("#golf_res_tou_on_level_2").click(function () 
	    {
		  		$("#golf_res_tou_cont_level_2").slideUp("slow");
	    		$("#golf_res_tou_on_level_2").css('display', 'none');
	    		$("#golf_res_tou_off_level_2").css('display', 'block');
	  	});

	  	$("#golf_res_tou_off_level_2").click(function () 
	    {
		  		$("#golf_res_tou_cont_level_2").slideDown("slow");
	    		$("#golf_res_tou_off_level_2").css('display', 'none');
	    		$("#golf_res_tou_on_level_2").css('display', 'block');
	  	});



	  	$("#com_tou_off_level_2").css('display','none');

	      $("#com_tou_on_level_2").click(function () 
	      {
	          $("#com_tou_cont_level_2").slideUp("slow");
	          $("#com_tou_on_level_2").css('display', 'none');
	          $("#com_tou_off_level_2").css('display', 'block');
	      });

	      $("#com_tou_off_level_2").click(function () 
	      {
	          $("#com_tou_cont_level_2").slideDown("slow");
	          $("#com_tou_off_level_2").css('display', 'none');
	          $("#com_tou_on_level_2").css('display', 'block');
	      });


	$("#golf_rep_off_level_2").css('display','none');

      $("#golf_rep_on_level_2").click(function () 
      {
          $("#golf_rep_cont_level_2").slideUp("slow");
          $("#golf_rep_on_level_2").css('display', 'none');
          $("#golf_rep_off_level_2").css('display', 'block');
      });

      $("#golf_rep_off_level_2").click(function () 
      {
          $("#golf_rep_cont_level_2").slideDown("slow");
          $("#golf_rep_off_level_2").css('display', 'none');
          $("#golf_rep_on_level_2").css('display', 'block');
      });








	  	

	  	function golf_model(val) 
	  	{
	  		$(".info_act").css('display', 'block');

    		$(".video_act").css('display', 'block');

    		var golf_1 = $("#golf_1");

    		switch(val)
    		{

    			case 1:

    				$(".title_act").html('<i class="fas fa-film"></i> Profile Search ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Golf software functionalities.<br><i class="fas fa-caret-right"></i> How to search a Profile.<br><i class="fas fa-caret-right"></i> How to export the Profile List.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_profile_search.mp4" type="video/mp4" controls></video>');

    			break;


    			case 2:

    				$(".title_act").html('<i class="fas fa-film"></i> Create a Profile ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to create a Profile in the Golf Application.<br><i class="fas fa-caret-right"></i> How to view and modify the information of Profiles.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_create_profile.mp4" type="video/mp4" controls></video>');

    			break;

    			case 3:

    				$(".title_act").html('<i class="fas fa-film"></i> Overview of Tee-Sheet ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Tee-sheet functionality.<br><i class="fas fa-caret-right"></i> How to change courses and dates.<br><i class="fas fa-caret-right"></i> How to create daily notes.<br><i class="fas fa-caret-right"></i> Show the different views (List View / 7 Day).<br><i class="fas fa-caret-right"></i> How to select 9,18 or combine 18 holes (9x).<br><i class="fas fa-caret-right"></i> How to customize the Tee-sheet (Show Status Bar, Show Booking Details Box, Display AM/PM Time Format).<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_sheet.mp4" type="video/mp4" controls></video>');


    			break;

    			case 4:

    				$(".title_act").html('<i class="fas fa-file"></i> Golf Booking Search (Guest Form) & Search by Group Name ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/golf_booking.png" style="width:100%"><br><p>New fields are available on booking search.</p><p>On Tee-Sheet screen go to Search.</p><p>These new fields will allow the users to search by Group Name and Guest Of.</p></div></div>');

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

    				$(".title_act").html('<i class="fas fa-file"></i> Date Selection in Golf Tee-Sheet ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/golf_sheet.png" style="width:100%"><br><p>On Tee -Sheet is now available a date selection.</p></div></div>');

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

    				$(".title_act").html('<i class="fas fa-film"></i> Reservation for an existing Profile ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to make a simple single reservation.<br><i class="fas fa-caret-right"></i> How to add or remove Rental Items on reservation.<br><i class="fas fa-caret-right"></i> How to add reservation notes.<br><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_reserve.mp4" type="video/mp4" controls></video>');

    			break;

    			case 7:

    				$(".title_act").html('<i class="fas fa-film"></i> Reservation for a new Profile ');

  					$(".info_act").html('<strong>This video describes the Booking Details of the Profile. </strong><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_reserve_profile.mp4" type="video/mp4" controls></video>');

    			break;

    			case 8:

    				$(".title_act").html('<i class="fas fa-film"></i> Details ');

  					$(".info_act").html('<strong>This video describes the Booking Details of the Profile. </strong><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_detials.mp4" type="video/mp4" controls></video>');

    			break;

    			case 9:

    				$(".title_act").html('<i class="fas fa-film"></i> Modify, Move & Cancel ');

  					$(".info_act").html('<strong>This video describes how to modify, move and cancel a booking. </strong><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_modify_move_cancel.mp4" type="video/mp4" controls></video>');

    			break;

    			case 10:

    				$(".title_act").html('<i class="fas fa-film"></i> Member Search - Member Guests ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to make member bookings using the Member searching functionality.<br><i class="fas fa-caret-right"></i> How to make bookings using the "Guest of" functionality.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_member_guest.mp4" type="video/mp4" controls></video>');

    			break;

    			case 11:

    				$(".title_act").html('<i class="fas fa-film"></i> Overview of Options ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> Use of the Overview area (Bookings, Rentals and Selected).<br><i class="fas fa-caret-right"></i> How to view Booking Change Log.<br><i class="fas fa-caret-right"></i> How to Generate Confirmations, SMS and Email.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/golf_edit.mp4" type="video/mp4" controls></video>');

    			break;


    			case 12:

    				$(".title_act").html('<i class="fas fa-film"></i> Multiple Bookings ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to make a multiple booking for the same day.<br><i class="fas fa-caret-right"></i> The difference between multiple reservations and group booking.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_multiple_edit.mp4" type="video/mp4" controls></video>');

    			break;

    			case 12:

    				$(".title_act").html('<i class="fas fa-film"></i> Group Booking ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to make aHow to build up a group reservation using multiple Profile Types.<br><i class="fas fa-caret-right"></i>How to generate confirmations for the group bookings.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_booking_edit.mp4" type="video/mp4" controls></video>');

    			break;
    			

    			case 13:

    				$(".title_act").html('<i class="fas fa-film"></i> Modify & Cancel ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to modify and cancel group reservations.<br><i class="fas fa-caret-right"></i>How to amend groups using the Rebuild Group functionality.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_modify_cancel.mp4" type="video/mp4" controls></video>');

    			break;

    			case 14:

    				$(".title_act").html('<i class="fas fa-film"></i> Change Names ');

  					$(".info_act").html('<strong>This video describes: </strong><br><i class="fas fa-caret-right"></i> How to use the "Change Names" functionality for groups.<br><i class="fas fa-caret-right"></i>How to show the booking details.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_change_names.mp4" type="video/mp4" controls></video>');



    			break;


    			case 15:

    				$(".title_act").html('<i class="fas fa-film"></i> Packages ');

  					$(".info_act").html('<strong>This video describes: </strong><br><i class="fas fa-caret-right"></i> How to book and cancel Golf Packages.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_package.mp4" type="video/mp4" controls></video>');



    			break;


    			case 16:

    				$(".title_act").html('<i class="fas fa-film"></i> Shotgun Setup ');

  					$(".info_act").html('<strong>This video describes the Shotgun setup process. More specifically it covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to create, modify, load and save Shotgun configurations.<br><i class="fas fa-caret-right"></i> How to distribute players for the holes.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_shotgun.mp4" type="video/mp4" controls></video>');


    			break;

    			case 17:

    				$(".title_act").html('<i class="fas fa-film"></i> Shotgun Bookings ');

  					$(".info_act").html('<strong>This video describes how to process a Shotgun booking. </strong><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_shotgun_booking.mp4" type="video/mp4" controls></video>');


    			break;

    			case 18:

    				$(".title_act").html('<i class="fas fa-film"></i> Shotgun Bookings ');

  					$(".info_act").html('<strong>This video describes how to process a Shotgun booking. </strong><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_shotgun_booking.mp4" type="video/mp4" controls></video>');


    			break;

    			case 19:

    				$(".title_act").html('<i class="fas fa-film"></i> Communications ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to use the "Communications" functionality.<br><i class="fas fa-caret-right"></i> How to generate confirmations sending by SMS or Email. <br><i class="fas fa-caret-right"></i> How to generate cancellations for multiple reservations. <br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_comunications.mp4" type="video/mp4" controls></video>');


    			break;

    			case 20:

    				$(".title_act").html('<i class="fas fa-film"></i> Reports ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Golf Reports.<br><i class="fas fa-caret-right"></i> View and print Golf Reports. <br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/golf_reports.mp4" type="video/mp4" controls></video>');


    			break;




    		}

    		golf_1.modal('show');
	  	}







</script>