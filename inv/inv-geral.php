<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Inventory</a> <i class="fa fa-angle-right"></i> <span>Overview</span>
					</h2>
			    </div>

	   <div class="modal fade" id="inv_1" role="dialog">
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
												<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="inv_off"></i><i class="fas fa-chevron-down" id="inv_on"></i></font>
				                                            <span class="fas fa-warehouse"></span>&nbsp;&nbsp;Inventory
			                                     </h5>
			                            </div>
			                    </div>

			                    <div id="inv_cont">
			                      <div class="col-md-12">


			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="inv_off_level_1"></i><i class="fas fa-chevron-down" id="inv_on_level_1"></i></font>
					                            <span class="fas fa-warehouse"></span>&nbsp;&nbsp;Inventory
				                            </h5>
			                    		</div>
			                    	</div>

			                    	<div id="inv_cont_level_1">
			                    		
			                    		<div class="col-md-12">

				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_1"></i><i class="fas fa-chevron-down" id="overview_on_level_1"></i></font><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview</h6>
													<div id="overview_cont_level_1">
					                                    <p>
					                                    	This Module is divided into three key sections, covering categories of the application. Each of these sections have videos that explain the software functionality available.

					                                    	


					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>


					                       

				                    		<div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="sup_off_level_1"></i><i class="fas fa-chevron-down" id="sup_on_level_1"></i></font><span class="fas fa-cart-plus"></span>&nbsp;&nbsp;Suppliers</h6>
													<div id="sup_cont_level_1">
					                                    <p>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(1);"><i class="fas fa-film"></i> Suppliers </button>
					                                    	<br>



					                                    	


					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="art_off_level_1"></i><i class="fas fa-chevron-down" id="art_on_level_1"></i></font><span class="far fa-clipboard"></span>&nbsp;&nbsp;Articles</h6>
													<div id="art_cont_level_1">
					                                    <p>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(2);"><i class="fas fa-film"></i> Overview of Articles </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(3);"><i class="fas fa-film"></i> Create, Modify & Delete Articles </button>
					                                    	
					                                    	

					                                	</p>
					                                </div>
												<br>
					           					</div>
					                       </div>

					                       <div class="row">
				                            	<div class="col-md-12">
													<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="tra_off_level_1"></i><i class="fas fa-chevron-down" id="tra_on_level_1"></i></font><span class="fas fa-dolly-flatbed"></span>&nbsp;&nbsp;Transactions</h6>
													<div id="tra_cont_level_1">
					                                    <p>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(4);"><i class="fas fa-film"></i> Overview of Transactions </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(5);"><i class="fas fa-film"></i> Inventory Count </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(6);"><i class="fas fa-file"></i> Inventory Supplier Order External Number </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(7);"><i class="fas fa-file"></i> Inventory Supplier External Number </button>
					                                    	<br>
					                                    	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="inv_model(8);"><i class="fas fa-file"></i> Inventory Supplier Minimum Order & Quantity </button>
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


	  	$("#art_off_level_1").css('display','none');

	  	$("#art_on_level_1").click(function () 
	    {
		  		$("#art_cont_level_1").slideUp("slow");
	    		$("#art_on_level_1").css('display', 'none');
	    		$("#art_off_level_1").css('display', 'block');
	  	});

	  	$("#art_off_level_1").click(function () 
	    {
		  		$("#art_cont_level_1").slideDown("slow");
	    		$("#art_off_level_1").css('display', 'none');
	    		$("#art_on_level_1").css('display', 'block');
	  	});

	  	$("#sup_off_level_1").css('display','none');

	  	$("#sup_on_level_1").click(function () 
	    {
		  		$("#sup_cont_level_1").slideUp("slow");
	    		$("#sup_on_level_1").css('display', 'none');
	    		$("#sup_off_level_1").css('display', 'block');
	  	});

	  	$("#sup_off_level_1").click(function () 
	    {
		  		$("#sup_cont_level_1").slideDown("slow");
	    		$("#sup_off_level_1").css('display', 'none');
	    		$("#sup_on_level_1").css('display', 'block');
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


	  	$("#tra_off_level_1").css('display','none');

	  	$("#tra_on_level_1").click(function () 
	    {
		  		$("#tra_cont_level_1").slideUp("slow");
	    		$("#tra_on_level_1").css('display', 'none');
	    		$("#tra_off_level_1").css('display', 'block');
	  	});

	  	$("#tra_off_level_1").click(function () 
	    {
		  		$("#tra_cont_level_1").slideDown("slow");
	    		$("#tra_off_level_1").css('display', 'none');
	    		$("#tra_on_level_1").css('display', 'block');
	  	});

	  	function inv_model(val) 
	  	{
	  		$(".info_act").css('display', 'block');

    		$(".video_act").css('display', 'block');

    		var inv_1 = $("#inv_1");

    		switch(val)
    		{
    			case 1:

    				$(".title_act").html('<i class="fas fa-film"></i> Suppliers ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Inventory functionality.<br><i class="fas fa-caret-right"></i> How to create, modify and delete a Supplier.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/inv_ven.mp4" type="video/mp4" controls></video>');

    			break;

    			case 2:

    				$(".title_act").html('<i class="fas fa-film"></i> Overview of Articles ');

  					$(".info_act").html('<strong>This video describes the Articles functionality.</strong> <br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/inv_art.mp4" type="video/mp4" controls></video>');

    			break;

    			case 3:

    				$(".title_act").html('<i class="fas fa-film"></i> Create, Modify & Delete Articles ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to create Articles.<br><i class="fas fa-caret-right"></i> How to modify, duplicate, delete and disable the existing Articles.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/inv_art_crud.m4v" type="video/mp4" controls></video>');

    			break;


    			case 4:

    				$(".title_act").html('<i class="fas fa-film"></i> Overview of Transactions ');

  					$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Transactions functionality.<br><i class="fas fa-caret-right"></i> How to order and purchase Articles.<br><i class="fas fa-caret-right"></i> How to transfer Articles between warehouses.<br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/inv_trans.m4v" type="video/mp4" controls></video>');

    			break;

    			case 5:

    				$(".title_act").html('<i class="fas fa-film"></i> Inventory Count ');

  					$(".info_act").html('<strong>This video describes the Inventory Count functionality. </strong><br>');

  					$(".video_act").html('<video class="embed-responsive-item img-responsive" source src="videos/level1/inv_trans_2.m4v" type="video/mp4" controls></video>');

    			break;


    			case 6:

    				$(".title_act").html('<i class="fas fa-file"></i> Inventory Supplier Order External Number ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/inv_sup.png" style="width:100%"><br><p>New field for Supplier Order External Number will be available under Transactions, then Supplier Order and create a new Order.</p></div></div>');

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

    				$(".title_act").html('<i class="fas fa-file"></i> Inventory Supplier External Number ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/inv_sup_ext.png" style="width:100%"><br><p>New field is available on Supplier and then New/Modify a Supplier. This will allow the users to enter their Supplier Number.</p></div></div>');

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

    				$(".title_act").html('<i class="fas fa-file"></i> Inventory Supplier Minimum Order & Quantity ');

  					$(".info_act").html('');

	  				$(".video_act").html('<div class="w3-content w3-section row" style="max-width:500px"><div class="mySlides row"><div class="col-xs-12"><img src="images/inv_sup_ext.png" style="width:100%"><br><p>New field is available on Supplier and then New/Modify a Supplier.</p></div></div>');

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




    		}

    		inv_1.modal('show');
	  	}







</script>