<?php include '../header/header.php'; ?>



<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
		<div class="banner">
			<h2><a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Point of Sale Solutions</a> <i class="fa fa-angle-right"></i> <span>Overview</span></h2>
		</div>

		<div class="modal fade" id="pos_1" role="dialog">
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
												<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off"></i><i class="fas fa-chevron-down" id="pos_on"></i></font>
				                                            <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions
			                                     </h5>
			                            </div>
			                    </div>

			                    <div id="pos_cont">
			                      <div class="col-md-12">


			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off_level_1"></i><i class="fas fa-chevron-down" id="pos_on_level_1"></i></font>
					                            <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions Level 1
				                            </h5>
			                    		</div>
			                    	</div>

			                    	<div id="pos_cont_level_1">
			                    		<div class="col-md-12">
				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_1"></i><i class="fas fa-chevron-down" id="overview_on_level_1"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview</h6>
													<div id="overview_cont_level_1">
					                                    <p>
					                                    	This Module is divided into four key sections, covering categories of the application. Each of these sections have videos that explain the software functionality available.

					                                    	<br>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(1);"><i class="fas fa-film"></i> Overview of pos </button>


					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="expr_off_level_1"></i><i class="fas fa-chevron-down" id="expr_on_level_1"></i></font><span class="fas fa-tag"></span>&nbsp;&nbsp;Express Sale</h6>
													<div id="expr_cont_level_1">
					                                    <p>
					                                    	
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(2);"><i class="fas fa-film"></i> Express Sale </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(3);"><i class="fas fa-film"></i> Tips & Commissions </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(4);"><i class="fa fa-file"></i> Discounts Enhancements </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(5);"><i class="fa fa-file"></i> Givex Interface </button>
					                                    	<br>




					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pro_off_level_2"></i><i class="fas fa-chevron-down" id="pro_on_level_2"></i></font><span class="fa fa-user"></span>&nbsp;&nbsp;Profile Sales</h6>
													<div id="pro_cont_level_2">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(6);"><i class="fas fa-film"></i> Profile Sales </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="jornal_off_level_2"></i><i class="fas fa-chevron-down" id="jornal_on_level_2"></i></font><span class="far fa-newspaper"></span>&nbsp;&nbsp;Journal</h6>
													<div id="jornal_cont_level_2">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(7);"><i class="fas fa-film"></i> Journal </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="che_off_level_2"></i><i class="fas fa-chevron-down" id="che_on_level_2"></i></font><span class="fas fa-check-circle"></span>&nbsp;&nbsp;SPA Check-Out</h6>
													<div id="che_cont_level_2">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(8);"><i class="fas fa-film"></i> SPA Check-Out </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>






					                    </div>
			                    	</div>

			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off_level_2"></i><i class="fas fa-chevron-down" id="pos_on_level_2"></i></font>
					                            <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions Level 2
				                            </h5>
			                    		</div>
			                    	</div>

			                    	<div id="pos_cont_level_2">

			                    		<div class="col-md-12">
				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_2"></i><i class="fas fa-chevron-down" id="overview_on_level_2"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview</h6>
													<div id="overview_cont_level_2">
					                                    <p>
					                                    	This Module is divided into three key sections, covering categories of the application. In each section there is a video that explain the software functionality available.
					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="card_off_level_2"></i><i class="fas fa-chevron-down" id="card_on_level_2"></i></font><span class="fas fa-vr-cardboard"></span>&nbsp;&nbsp;Gift Cards</h6>
													<div id="card_cont_level_2">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(9);"><i class="fas fa-film"></i> Gift Cards </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pro_ac_off_level_2"></i><i class="fas fa-chevron-down" id="pro_ac_on_level_2"></i></font><span class="fas fa-vr-cardboard"></span>&nbsp;&nbsp;Profile Accounts</h6>
													<div id="pro_ac_cont_level_2">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(10);"><i class="fas fa-film"></i> Profile Accounts </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="rep_off_level_2"></i><i class="fas fa-chevron-down" id="rep_on_level_2"></i></font><span class="fas fa-file-signature"></span>&nbsp;&nbsp;Reports</h6>
													<div id="rep_cout_level_2">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(11);"><i class="fas fa-film"></i> POS Reports </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                      </div>





			                    	</div>

			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pos_off_level_3"></i><i class="fas fa-chevron-down" id="pos_on_level_3"></i></font>
					                            <span class="fa fa-credit-card"></span>&nbsp;&nbsp;Point of Sale Solutions Level 3
				                            </h5>
			                    		</div>
			                    	</div>

			                    	<div id="pos_cont_level_3">

			                    		<div class="col-md-12">

			                    			<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_3"></i><i class="fas fa-chevron-down" id="overview_on_level_3"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview</h6>
													<div id="overview_cont_level_3">
					                                    <p>
					                                    	This Module is divided into three key sections, covering the Configurations Area of how to set up specific functionalities of the application. Each of these sections have videos that explain the software functionality available.
					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="com_off_level_3"></i><i class="fas fa-chevron-down" id="com_on_level_3"></i></font><span class="fas fa-cogs"></span>&nbsp;&nbsp;Commission Setup</h6>
													<div id="com_cont_level_3">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(12);"><i class="fas fa-film"></i> Commission Setup </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="gif_off_level_3"></i><i class="fas fa-chevron-down" id="gif_on_level_3"></i></font><span class="fas fa-cogs"></span>&nbsp;&nbsp;Gift Card Setup</h6>
													<div id="gif_cont_level_3">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(13);"><i class="fas fa-film"></i> Overview of Gift Card </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(14);"><i class="fas fa-film"></i> Value Based On Gift Card Setup </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(15);"><i class="fas fa-film"></i> Activity & Retail </button>
					                                    	<br>
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="sales_off_level_3"></i><i class="fas fa-chevron-down" id="sales_on_level_3"></i></font><span class="fas fa-tags"></span>&nbsp;&nbsp;Fast Track Sales Setup</h6>
													<div id="sales_cont_level_3">
					                                    <p>

					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pos_model(16);"><i class="fas fa-film"></i> Fast Track Sales Setup </button>
					                                    	<br>
					                                    	

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

  	// POS LEVEL 1


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

	  	$("#expr_off_level_1").css('display','none');

	  	$("#expr_on_level_1").click(function () 
	    {
		  		$("#expr_cont_level_1").slideUp("slow");
	    		$("#expr_on_level_1").css('display', 'none');
	    		$("#expr_off_level_1").css('display', 'block');
	  	});

	  	$("#expr_off_level_1").click(function () 
	    {
		  		$("#expr_cont_level_1").slideDown("slow");
	    		$("#expr_off_level_1").css('display', 'none');
	    		$("#expr_on_level_1").css('display', 'block');
	  	});



	// POS LEVEL 2

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

    	$("#pro_off_level_2").css('display','none');

	    $("#pro_on_level_2").click(function () 
	      {
	          $("#pro_cont_level_2").slideUp("slow");
	          $("#pro_on_level_2").css('display', 'none');
	          $("#pro_off_level_2").css('display', 'block');
	      });

      	$("#pro_off_level_2").click(function () 
	      {
	          $("#pro_cont_level_2").slideDown("slow");
	          $("#pro_off_level_2").css('display', 'none');
	          $("#pro_on_level_2").css('display', 'block');
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


      	$("#pro_off_level_2").css('display','none');

	    $("#pro_on_level_2").click(function () 
	      {
	          $("#pro_cont_level_2").slideUp("slow");
	          $("#pro_on_level_2").css('display', 'none');
	          $("#pro_off_level_2").css('display', 'block');
	      });

      	$("#pro_off_level_2").click(function () 
	      {
	          $("#pro_cont_level_2").slideDown("slow");
	          $("#pro_off_level_2").css('display', 'none');
	          $("#pro_on_level_2").css('display', 'block');
	      });

      	$("#jornal_off_level_2").css('display','none');

      $("#jornal_on_level_2").click(function () 
        {
            $("#jornal_cont_level_2").slideUp("slow");
            $("#jornal_on_level_2").css('display', 'none');
            $("#jornal_off_level_2").css('display', 'block');
        });

        $("#jornal_off_level_2").click(function () 
        {
            $("#jornal_cont_level_2").slideDown("slow");
            $("#jornal_off_level_2").css('display', 'none');
            $("#jornal_on_level_2").css('display', 'block');
        });

        $("#che_off_level_2").css('display','none');

      $("#che_on_level_2").click(function () 
        {
            $("#che_cont_level_2").slideUp("slow");
            $("#che_on_level_2").css('display', 'none');
            $("#che_off_level_2").css('display', 'block');
        });

        $("#che_off_level_2").click(function () 
        {
            $("#che_cont_level_2").slideDown("slow");
            $("#che_off_level_2").css('display', 'none');
            $("#che_on_level_2").css('display', 'block');
        });

        $("#card_off_level_2").css('display','none');

      	$("#card_on_level_2").click(function () 
        {
            $("#card_cont_level_2").slideUp("slow");
            $("#card_on_level_2").css('display', 'none');
            $("#card_off_level_2").css('display', 'block');
        });

        $("#card_off_level_2").click(function () 
        {
            $("#card_cont_level_2").slideDown("slow");
            $("#card_off_level_2").css('display', 'none');
            $("#card_on_level_2").css('display', 'block');
        });

        $("#pro_ac_off_level_2").css('display','none');

      	$("#pro_ac_on_level_2").click(function () 
        {
            $("#pro_ac_cont_level_2").slideUp("slow");
            $("#pro_ac_on_level_2").css('display', 'none');
            $("#pro_ac_off_level_2").css('display', 'block');
        });

        $("#pro_ac_off_level_2").click(function () 
        {
            $("#pro_ac_cont_level_2").slideDown("slow");
            $("#pro_ac_off_level_2").css('display', 'none');
            $("#pro_ac_on_level_2").css('display', 'block');
        });

        $("#rep_off_level_2").css('display','none');

      	$("#rep_on_level_2").click(function () 
        {
            $("#rep_cout_level_2").slideUp("slow");
            $("#rep_on_level_2").css('display', 'none');
            $("#rep_off_level_2").css('display', 'block');
        });

        $("#rep_off_level_2").click(function () 
        {
            $("#rep_cout_level_2").slideDown("slow");
            $("#rep_off_level_2").css('display', 'none');
            $("#rep_on_level_2").css('display', 'block');
        });



    // POS LEVEL 3


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

    	$("#overview_off_level_3").css('display','none');

		  	$("#overview_on_level_3").click(function () 
		    {
			  		$("#overview_cont_level_3").slideUp("slow");
		    		$("#overview_on_level_3").css('display', 'none');
		    		$("#overview_off_level_3").css('display', 'block');
		  	});

		  	$("#overview_off_level_3").click(function () 
		    {
			  		$("#overview_cont_level_3").slideDown("slow");
		    		$("#overview_off_level_3").css('display', 'none');
		    		$("#overview_on_level_3").css('display', 'block');
		  	});

		  	// com_cout_level_3

		  	$("#com_off_level_3").css('display','none');

		  	$("#com_on_level_3").click(function () 
		    {
			  		$("#com_cont_level_3").slideUp("slow");
		    		$("#com_on_level_3").css('display', 'none');
		    		$("#com_off_level_3").css('display', 'block');
		  	});

		  	$("#com_off_level_3").click(function () 
		    {
			  		$("#com_cont_level_3").slideDown("slow");
		    		$("#com_off_level_3").css('display', 'none');
		    		$("#com_on_level_3").css('display', 'block');
		  	});

		  	$("#gif_off_level_3").css('display','none');

		  	$("#gif_on_level_3").click(function () 
		    {
			  		$("#gif_cont_level_3").slideUp("slow");
		    		$("#gif_on_level_3").css('display', 'none');
		    		$("#gif_off_level_3").css('display', 'block');
		  	});

		  	$("#gif_off_level_3").click(function () 
		    {
			  		$("#gif_cont_level_3").slideDown("slow");
		    		$("#gif_off_level_3").css('display', 'none');
		    		$("#gif_on_level_3").css('display', 'block');
		  	});

		  	// sales_on_level_3


		  	$("#sales_off_level_3").css('display','none');

		  	$("#sales_on_level_3").click(function () 
		    {
			  		$("#sales_cont_level_3").slideUp("slow");
		    		$("#sales_on_level_3").css('display', 'none');
		    		$("#sales_off_level_3").css('display', 'block');
		  	});

		  	$("#sales_off_level_3").click(function () 
		    {
			  		$("#sales_cont_level_3").slideDown("slow");
		    		$("#sales_off_level_3").css('display', 'none');
		    		$("#sales_on_level_3").css('display', 'block');
		  	});




    function pos_model(val)
    {
    	$(".info_act").css('display', 'block');

    	$(".video_act").css('display', 'block');

    	var pos_1 = $("#pos_1");

    	switch(val)
    	{
    		case 1:

    			$(".title_act").html('<i class="fas fa-film"></i> Overview of POS ');

  				$(".info_act").html('<strong>This video describes the Point of Sale functionality. </strong><br>');

  				$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/pos_overview.mp4" type="video/mp4" controls></video>');

    		break;

    		case 2:

    			$(".title_act").html('<i class="fas fa-film"></i> Express Sale ');

  				$(".info_act").html('<strong>TThis video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to perform an Express Sale.<br><i class="fas fa-caret-right"></i> How to add items to a check.<br><i class="fas fa-caret-right"></i> How to apply a discount to individual items.<br><i class="fas fa-caret-right"></i> How to select and split Payment Methods.<br>');

  				$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/pos_expr.m4v" type="video/mp4" controls></video>');

    		break;

    		case 3:

    			$(".title_act").html('<i class="fas fa-film"></i> Tips & Commissions ');

  				$(".info_act").html('<strong>This video describes how to use the Tips and the Commissions in the Express Sale process. </strong><br>');

  				$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/pos_com.mp4" type="video/mp4" controls></video>');

    		break;

    		case 4:



    			$(".title_act").html('<i class="fas fa-film"></i> Discounts Enhancements ');

  				$(".info_act").html('<strong>This new functionality allows the users to apply a discount on the entire bill (discount can be set by percentage, value or set a new price for the item). Add one item on the bill and then click on Discount. </strong><br>');

  				$(".video_act").html('<div class="w3-content w3-section" style="max-width:500px"><img class="mySlides" src="images/level1/pos_dis1.png" style="width:100%"><img class="mySlides" src="images/level1/pos_dis2.png" style="width:100%"></div>');


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

    			$(".title_act").html('<i class="fas fa-film"></i> Givex Interface ');

  				$(".info_act").html('');

  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/pos_int.png" style="width:100%"><br><p>Search the Givex Item and double click to add it.</p></div></div><div class="mySlides row"><div class="col-xs-12"><img src="images/level1/pos_int2.png" style="width:100%"><br><p>Set the price for your Givex Card.</p></div></div>');

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

    		$(".title_act").html('<i class="fas fa-film"></i> Profile Sales ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Profile Sales.<br><i class="fas fa-caret-right"></i> How to perform a Profile Sale.<br><i class="fas fa-caret-right"></i> How to check Profile Last Sales.<br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/pos_profile_script.mp4" type="video/mp4" controls></video>');



    		break;

    		case 7:

    		$(".title_act").html('<i class="fas fa-film"></i> Journal ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to "View or Void" the sales.<br><i class="fas fa-caret-right"></i> How to void an entire check with Void reasons.<br><i class="fas fa-caret-right"></i> How to reprint documents using the "Re-Ticket".<br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/POS_JournalEdit.mp4" type="video/mp4" controls></video>');



    		break;

    		case 8:

    		$(".title_act").html('<i class="fas fa-film"></i> SPA Check-Out ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to process a SPA Check-Out reservation.<br><i class="fas fa-caret-right"></i> How to add items to the Point of Sale.<br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/POS_SPA_CheckoutEdit.mp4" type="video/mp4" controls></video>');



    		break;

    		case 9:

    		$(".title_act").html('<i class="fas fa-film"></i> Gift Cards ');

  			$(".info_act").html('<strong>This video describes how to sell and redeem a Gift Card. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/pos_gifs.mp4" type="video/mp4" controls></video>');

    		break;

    		case 10:

    		$(".title_act").html('<i class="fas fa-film"></i> Profile Accounts ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Accounts of a Profile.<br><i class="fas fa-caret-right"></i> How to process an Advanced Payment.<br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/pos_profile.mp4" type="video/mp4" controls></video>');

    		break;

    		case 11:

    		$(".title_act").html('<i class="fas fa-film"></i> POS Reports ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the POS Reports.<br><i class="fas fa-caret-right"></i> How to print Bank Reports.<br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level2/pos_report.mp4" type="video/mp4" controls></video>');

    		break;

    		case 12:

    		$(".title_act").html('<i class="fas fa-film"></i> Commission Setup ');

  			$(".info_act").html('<strong>This video covers the followirng topics: </strong><br><i class="fas fa-caret-right"></i> An overview of how to set up the Commissions.<br><i class="fas fa-caret-right"></i> How to define SPA Staff and Application Users eligible for commission and/or tip.<br><i class="fas fa-caret-right"></i> How to assign a commission to a specific Staff.<br><i class="fas fa-caret-right"></i> How to set up Commission Rules.<br><i class="fas fa-caret-right"></i> How to duplicate setup Staff Commissions.<br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level3/pos_setup_comission.mp4" type="video/mp4" controls></video>');

    		break;

    		case 13:

    		$(".title_act").html('<i class="fas fa-film"></i> Overview of Gift Card ');

  			$(".info_act").html('<strong>This video describes the GIft Card functionality. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level3/pos_config.mp4" type="video/mp4" controls></video>');

    		break;

    		case 14:

    		$(".title_act").html('<i class="fas fa-film"></i> Value Based On Gift Card Setup ');

  			$(".info_act").html('<strong>This video describes how to set up "Value Only" Gift Cards. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level3/pos_config_gift.mp4" type="video/mp4" controls></video>');

    		break;

    		case 15:

    		$(".title_act").html('<i class="fas fa-film"></i> Activity & Retail ');

  			$(".info_act").html('<strong>This video describes how to set up an "Activity & Retail" Gift Card. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level3/pos_config_activity_retail.mp4" type="video/mp4" controls></video>');

    		break;

    		case 16:

    		$(".title_act").html('<i class="fas fa-film"></i> Fast Track Sales Setup ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to set up Fast Track Sales.<br><i class="fas fa-caret-right"></i> How to define and remove articles available for Fast Tracks Sales.<br>');

  			$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level3/pos_config_fast_track.mp4" type="video/mp4" controls></video>');

    		break;
    	}

    	pos_1.modal('show');


    }


</script>






