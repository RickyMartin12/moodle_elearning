<?php include '../header/header.php'; ?>

<style>


#comp_video .modal-header, #comp_video .modal-footer, #loc_video .modal-header, #loc_video .modal-footer, #sta_video .modal-header, #sta_video .modal-footer, #sta_ass_video .modal-header, #sta_ass_video .modal-footer, #act_sub_gru .modal-header, #act_sub_gru .modal-footer, #sea_time_video .modal-header, #sea_time_video .modal-footer, #act_video .modal-header, #act_video .modal-footer, #spa_2 .modal-header, #spa_2 .modal-footer, #spa_3 .modal-header, #spa_3 .modal-footer{
    background: #ddd;
}

</style>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Main Activities</a> <i class="fa fa-angle-right"></i> <a href="#">Spa & Leisure</a> <i class="fa fa-angle-right"></i> <span>Overview</span>
					</h2>
			    </div>


			    <div class="modal fade" id="ipad_1" role="dialog">
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




			    <div class="modal fade" id="spa_3" role="dialog">
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
										<div class="embed-responsive embed-responsive-16by9" id="video_act">
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

			    <div class="modal fade" id="spa_2" role="dialog">
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
										<div class="embed-responsive embed-responsive-16by9 video_act">
										</div>
									</div>
									<div class="col-xs-12 col-md-12">
										<div id="supp_on">
											<div class="row row-feature-ct2">
												<div class="col-md-offset-3 col-md-6 col-xs-12 w3-row-padding">
													<div class="w3-content w3-display-container">
														<div class="w3-display-container mySlides2">
														<img class="image_espacos" src="spa_images/level2/time_line.png" style="width:100%;">
														<div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
															Time Line only for today
														</div>
														<br>
														<br>
														<div class="w3-content w3-display-container">
															<p style="text-align: justify;"> 
																On Spa Agenda, the time line in yellow is available for the current day only.
															</p>
															</div>
														</div>
														<div class="w3-display-container mySlides2"><img class="image_espacos" src="spa_images/level2/Directly_Check_Out.png" style="width:100%;">
															<div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">Directly Check Out</div>
															<br>
															<br>
															<div class="w3-content w3-display-container">
																<p style="text-align: justify;"> 
																	New functionality available, now it’s possible to Check Out without Check In first.
																</p>
															</div>
														</div>
														<div class="w3-display-container mySlides2">
														<img class="image_espacos" src="spa_images/level2/Booking_Notes_improvements.png" style="width:100%;">
														<div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
															Booking Notes improvements
														</div>
														<br>
														<br>
														<div class="w3-content w3-display-container">
															<p style="text-align: justify;"> 
																New functionality is now available for Booking Notes, it allows the users to edit or add notes without modify a booking.
															</p>
															</div>
														</div>
														<div class="w3-display-container mySlides2">
														<img class="image_espacos" src="spa_images/level2/Booking_Notes_improvements_2.png" style="width:100%;">
														<div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
															Booking Notes improvements
														</div>
														<br>
														<br>
														<div class="w3-content w3-display-container">
															<p style="text-align: justify;"> 
																New functionality is now available for Booking Notes, it allows the users to edit or add notes without modify a booking.
															</p>
															</div>
														</div>

														<div class="w3-display-container mySlides2">
														<img class="image_espacos" src="spa_images/level2/Agenda_List_Enhancements.png" style="width:100%;">
														<div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
															Agenda List Enhancements
														</div>
														<br>
														<br>
														<div class="w3-content w3-display-container">
															<p style="text-align: justify;"> 
																<strong>New functionalities are available on Agenda List (List View), such as:</strong>
																<br>
																<i class="fas fa-caret-right"></i> Users are now able to filter by profile gender, to Check or Uncheck all bookings.
																<br>
																<i class="fas fa-caret-right"></i> First and Last Name fields are now working as filters, if a name is typed will filter all the results based on the name.
															</p>
															</div>
														</div>

														<div class="w3-display-container mySlides2">
														<img class="image_espacos" src="spa_images/level2/Cut_Paste_Drag_Drop_Enhancements.png" style="width:100%;">
														<div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
															Cut & Paste / Drag & Drop Enhancements
														</div>
														<br>
														<br>
														<div class="w3-content w3-display-container">
															<p style="text-align: justify;"> 
																New functionality is now available, when a booking is Drag & Dropped / Cut & Paste and the staff or room isn’t available a message will display to search for alternatives
															</p>
															</div>
														</div>

														<div class="w3-display-container mySlides2">
														<img class="image_espacos" src="spa_images/level2/Cut_Paste_Drag_Drop_Enhancements_2.png" style="width:100%;">
														<div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
															Cut & Paste / Drag & Drop Enhancements
														</div>
														<br>
														<br>
														<div class="w3-content w3-display-container">
															<p style="text-align: justify;"> 
																A new window with all the alternatives will be displayed.
															</p>
															</div>
														</div>

														<button class="w3-button w3-display-left w3-black" onclick="plusDivs2(-1)">&#10094;</button>
														<button class="w3-button w3-display-right w3-black" onclick="plusDivs2(1)">&#10095;</button>
													</div>
												</div>
											</div>
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

			    <div class="modal fade" id="act_video" role="dialog">
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
										<div class="embed-responsive embed-responsive-16by9 video_act">
										</div>
									</div>
									<div class="col-xs-12 col-md-12">
										<div id="supp_on2">
											<div class="row row-feature-ct2"><div class="col-md-offset-3 col-md-6 col-xs-12 w3-row-padding"><div class="w3-content w3-display-container"><div class="w3-display-container mySlides"><img class="image_espacos" src="spa_images/img1.png" style="width:100%;"><div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">Increase the size of the dropdown boxes on the application to appear more items</div><br><br><div class="w3-content w3-display-container"><p style="text-align: justify;"> New Parameter added on Spa Application Parameters, "Drop Down Rows Count", it will show the number of results on the drop downs boxes based on this parameter.</p></div></div><div class="w3-display-container mySlides"><img class="image_espacos" src="spa_images/img2.png" style="width:100%;"><div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">Staff Grade Sorting functionality</div><br><br><div class="w3-content w3-display-container"><p style="text-align: justify;"> New Parameter added on Spa Application Parameters, "Agenda Staff Grade based on", it order the staff grade on the Agenda based on All Activities (Average) or Group/Sub Group.</p></div></div><button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button><button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button></div></div></div>
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
												<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off"></i><i class="fas fa-chevron-down" id="spa_on"></i></font>
				                                            <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE
			                                     </h5>
			                            </div>
			                          </div>

			                            <div id="spa_cont">
			                              <div class="col-md-12">
			                              	<div class="row">
				                            	<div class="col-md-12">

				                            		<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off_level_1"></i><i class="fas fa-chevron-down" id="spa_on_level_1"></i></font>
					                                            <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE Level 1
				                                     </h5>
				                                </div>
				                               </div>

			                            		

			                            		<div id="spa_cont_level_1">
			                            			<div class="col-md-12">
			                            			  <div class="row">
			                            				<div class="col-md-12">

				                            				<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_1"></i><i class="fas fa-chevron-down" id="overview_on_level_1"></i></font>
					                                            <span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview
				                                     		</h6>

				                                     		<div id="overview_cont_level_1">
				                                     			<p>This Module is divided into five key sections, covering the Settings category of the SPA & LEISURE application. Each of these sections have videos that explain the software functionality available.</p>
				                                     		</div>


				                                     		<br>
				           
				                                     	</div>
				                                     </div>

				                                     <div class="row">

				                                     	<div class="col-md-12">

				                            				<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="str_off_level_1"></i><i class="fas fa-chevron-down" id="str_on_level_1"></i></font>
					                                            <span class="fas fa-book"></span>&nbsp;&nbsp;Structure
				                                     		</h6>

				                                     		<div id="str_cont_level_1">
				                                     			
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" id="complex_video"><i class="fas fa-film"></i> Complex </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" id="location_video"><i class="fas fa-film"></i> Location </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" id="staff_video"><i class="fas fa-film"></i> Staff </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" id="staff_ass_video"><i class="fas fa-film"></i> Staff Assignment </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" id="act_sub_grupos_video"><i class="fas fa-film"></i> Activity Groups and Sub Groups </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" id="season_time_video"><i class="fas fa-film"></i> Seasons & Complex Time </button>
				                                     			<div class="botter2"></div>

 																
 																
 																
 																
 																


 																<div id="videos_str">




 																</div>
				                                     		</div>
				                                     	</div>
				                                     </div>
				                                     <div class="row">
				                                     	<div class="col-md-12">

				                                     		<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="act_off_level_1"></i><i class="fas fa-chevron-down" id="act_on_level_1"></i></font><span class="fas fa-tasks"></span>&nbsp;&nbsp;Activities</h6>

				                                     		<div id="act_cont_level_1">

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="actModal(1);"><i class="fas fa-film"></i> Overfiew </button>
				                                     			<br>

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="actModal(2);"><i class="fas fa-film"></i> Standard </button>
				                                     			<br>

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="actModal(3);"><i class="fas fa-film"></i> Multi-Level </button>
				                                     			<br>

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="actModal(4);"><i class="fas fa-film"></i> Scheduled </button>
				                                     			<br>

				                                     			<div id="modal_act">

				                                     				


				                                     			</div>


				                                     			<div class="botter2"></div>

				                                     		</div>
				                                     	</div>
				                                     </div>
				                                     <div class="row">
				                                     	<div class="col-md-12">

				                                     		<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="blk_off_level_1"></i><i class="fas fa-chevron-down" id="blk_on_level_1"></i></font><span class="fas fa-list-alt"></span>&nbsp;&nbsp;Others & Block Types</h6>

				                                     		<div id="blk_cont_level_1">

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="blkModal(1);"><i class="fas fa-film"></i> Others & Block Types </button>
				                                     			<br>

				                                     			

				                                     			<div id="modal_act">

				                                     				


				                                     			</div>





				                                     			


				                                     			<div class="botter2"></div>

				                                     		</div>
				                                     	</div>
				                                     </div>
				                                     <div class="row">
				                                     	<div class="col-md-12">

				                                     		<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="add_off_level_1"></i><i class="fas fa-chevron-down" id="add_on_level_1"></i></font><span class="fas fa-book"></span>&nbsp;&nbsp;Additional</h6>

				                                     		<div id="add_cont_level_1">

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="addModal(1);"><i class="fas fa-film"></i> Equipament </button>
				                                     			<br>

				                                     			<div class="botter2"></div>

				                                     		</div>
				                                     	</div>
				                                     </div>
				                                     <div class="row">
				                                     	<div class="col-md-12">

				                                     		<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pac_off_level_1"></i><i class="fas fa-chevron-down" id="pac_on_level_1"></i></font><span class="fas fa-archive"></span>&nbsp;&nbsp;Package</h6>

				                                     		<div id="pac_cont_level_1">

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pacModal(1);"><i class="fas fa-film"></i> Package </button>
				                                     			<br>

				                                     			<div class="botter2"></div>

				                                     		</div>
				                                     	</div>
				                                     </div>
				                                     <div class="row">

				                                     	<div class="col-md-12">

				                                     		<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="sup_off_level_1"></i><i class="fas fa-chevron-down" id="sup_on_level_1"></i></font><span class="fas fa-user-cog"></span>&nbsp;&nbsp;Support</h6>

				                                     		<div id="sup_cont_level_1">

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="supModal(1);"><i class="fa fa-file"></i> Package </button>
				                                     			<br>

				                                     			<div class="botter2"></div>

				                                     		</div>
				                                     	</div>
				                                     </div>

			                            			

			                            			

			                            			

			                            			

			                            			

			                            			

			                            			
			                            			</div>
			                            		</div>
			                            	</div>





			                            	<div class="col-md-12">
			                            		<div class="botter2"></div>
			                            		<div class="row">
					                            	<div class="col-md-12">

					                            		<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off_level_2"></i><i class="fas fa-chevron-down" id="spa_on_level_2"></i></font>
						                                            <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE Level 2
					                                     </h5>
					                                </div>
					                             </div>

			                            		

			                            		<div id="spa_cont_level_2">
			                            			<div class="col-md-12">
			                            				<div class="row">
			                            				<div class="col-md-12">

				                            				<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_2"></i><i class="fas fa-chevron-down" id="overview_on_level_2"></i></font>
					                                            <span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview
				                                     		</h6>

				                                     		<div id="overview_cont_level_2">
				                                     			<p>This Module is divided into five key sections, covering the Settings category of the SPA & LEISURE application. Each of these sections have videos that explain the software functionality available.</p>
				                                     		</div>


				                                     		<br>
				           
				                                     	</div>
				                                     </div>
				                                     <div class="row">
				                                     	<div class="col-md-12">

				                            				<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pro_off_level_2"></i><i class="fas fa-chevron-down" id="pro_on_level_2"></i></font>
					                                            <span class="fa fa-user"></span>&nbsp;&nbsp;Profile
				                                     		</h6>

				                                     		<div id="pro_cont_level_2">
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="proModal(1);"><i class="fas fa-film"></i> Search </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="proModal(2);"><i class="fas fa-film"></i> Create & Modify </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="proModal(3);"><i class="fas fa-film"></i> Activity & Sales History </button>
				                                     			<br>
				                                     		</div>


				                                     		<br>
				           
				                                     	</div>
				                                     </div>

				                                     <div class="row">
				                                     	<div class="col-md-12">

				                            				<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="ag_off_level_2"></i><i class="fas fa-chevron-down" id="ag_on_level_2"></i></font>
					                                            <span class="far fa-clipboard"></span>&nbsp;&nbsp;Agenda
				                                     		</h6>

				                                     		<div id="ag_cont_level_2">
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(1);"><i class="fas fa-film"></i>  Overview of Agenda </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(2);"><i class="fas fa-film"></i>  Standard Reservations for a new Profile </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(3);"><i class="fas fa-film"></i>  Standard Reservations for an existing Profile </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(4);"><i class="fas fa-film"></i>   Cancel a Reservation </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(5);"><i class="fas fa-film"></i>   Drag & Drop, Cut & Paste </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(6);"><i class="fas fa-film"></i>   Confirm Check-In </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(7);"><i class="fas fa-film"></i>   Send a Confirmation Email </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(8);"><i class="fas fa-film"></i>   Features </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(9);"><i class="fas fa-film"></i>   Concurrent Reservation </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(10);"><i class="fas fa-film"></i>  Add-In Reservation </button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(11);"><i class="fas fa-film"></i>  Turnaway </button>
				                                     			<br>

				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(12);"><i class="fa fa-file"></i>  Time Line only for today</button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(12);"><i class="fa fa-file"></i>  Directly Check Out</button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(12);"><i class="fa fa-file"></i>  Booking Notes improvements</button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(12);"><i class="fa fa-file"></i>  Agenda List Enhancements</button>
				                                     			<br>
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agModal(12);"><i class="fa fa-file"></i>  Cut & Paste / Drag & Drop Enhancements</button>
				                                     			<br>

				                                     		</div>


				                                     		<br>
				           
				                                     	</div>
				                                     </div>

				                                     	<div class="botter2"></div>



			                            			

			                            			
			                            			</div>
			                            		</div>
			                            	</div>

			                            	<div class="col-md-12">
			                            		<div class="botter2"></div>
			                            	<div class="row">
				                            	<div class="col-md-12">

				                            		<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="spa_off_level_3"></i><i class="fas fa-chevron-down" id="spa_on_level_3"></i></font>
					                                            <span class="fas fa-spa"></span>&nbsp;&nbsp;SPA & LEISURE Level 3
				                                     </h5>
				                                </div>
			                            	</div>

			                            		

			                            		<div id="spa_cont_level_3">
			                            			<div class="col-md-12">

			                            				<div class="row">
			                            					<div class="col-md-12">

				                            				<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="overview_off_level_3"></i><i class="fas fa-chevron-down" id="overview_on_level_3"></i></font>
					                                            <span class="fas fa-file-alt"></span>&nbsp;&nbsp;Overview
				                                     		</h6>

				                                     		<div id="overview_cont_level_3">
				                                     			<p>This Module covers some more functions about the functionality of Agenda such as the Agenda List, the Multibookings and the Package Bookings.</p>
				                                     		</div>


				                                     		<br>
				           
				                                     	</div>
				                                     </div>

				                                     <div class="row">
				                                     	<div class="col-md-12">
				                                     		<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="ag_off_level_3"></i><i class="fas fa-chevron-down" id="ag_on_level_3"></i></font>
					                                            <span class="fas fa-clipboard"></span>&nbsp;&nbsp;Agenda List
				                                     		</h6>

				                                     		<div id="ag_cont_level_3">
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agListModal(1);"><i class="fa fa-film"></i>  Agenda List</button>
				                                     		</div>
				                                     	</div>
				                                     </div>

				                                     <div class="row">
				                                     	<div class="col-md-12">
				                                     		<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="ag_list_off_level_3"></i><i class="fas fa-chevron-down" id="ag_list_on_level_3"></i></font>
					                                            <span class="fa fa-book"></span>&nbsp;&nbsp;Multibook
				                                     		</h6>

				                                     		<div id="ag_list_count_level_3">
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="agListMultiBookModal(1);"><i class="fa fa-film"></i>  Multibook</button>
				                                     		</div>
				                                     	</div>
				                                     </div>

				                                     <div class="row">
				                                     	<div class="col-md-12">
				                                     			<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="pk_off_level_3"></i><i class="fas fa-chevron-down" id="pk_on_level_3"></i></font>
					                                            <span class="fas fa-box"></span>&nbsp;&nbsp;Package Bookings
				                                     		</h6>

				                                     		<div id="pk_cont_level_3">
				                                     			<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="pckgBookModal(1);"><i class="fa fa-film"></i>  Package Bookings</button>
				                                     		</div>
				                                     	</div>
				                                     	</div>
				                                     </div>


			                            			

			                            			
			                            			
			                            			

			                            			
			                            			</div>




			                            			<div class="row">
					                            	<div class="col-md-12">

					                            		<div class="botter2"></div>

					                            		<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="ipad_off"></i><i class="fas fa-chevron-down" id="ipad_on"></i></font>
						                                            <span class="fas fa-tablet-alt"></span>&nbsp;&nbsp; iPad
					                                     </h5>
					                                </div>
					                             </div>

					                             <div id="ipad_cont">
					                             	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="ipadModal(1);"><i class="fa fa-film"></i>  Package Bookings</button>
					                             	<br>
					                             	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="ipadModal(2);"><i class="fa fa-film"></i>  Package Bookings</button>
					                             	<br>
					                             	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="ipadModal(3);"><i class="fa fa-film"></i>  Package Bookings</button>
					                             	<br>
					                             	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="ipadModal(4);"><i class="fa fa-film"></i>  Package Bookings</button>
					                             	<br>
					                             	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="ipadModal(5);"><i class="fa fa-film"></i>  Package Bookings</button>
					                             	<br>
					                             	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="ipadModal(6);"><i class="fa fa-film"></i>  Package Bookings</button>
					                             	<br>
					                             	<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="ipadModal(7);"><i class="fa fa-film"></i>  Package Bookings</button>

				                                    <br>
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

	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
	  showDivs(slideIndex += n);
	}

	function showDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  if (n > x.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = x.length}
	  for (i = 0; i < x.length; i++) {
	     x[i].style.display = "none";  
	  }
	  x[slideIndex-1].style.display = "block";  
	}

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





	var slideIndex2 = 1;
	showDivs2(slideIndex2);

	function plusDivs2(n) {
	  showDivs2(slideIndex2 += n);
	}

	function showDivs2(n) {
	  var i;
	  var x = document.getElementsByClassName("mySlides2");
	  if (n > x.length) {slideIndex2 = 1}    
	  if (n < 1) {slideIndex2 = x.length}
	  for (i = 0; i < x.length; i++) {
	     x[i].style.display = "none";  
	  }
	  x[slideIndex2-1].style.display = "block";  
	}

	var myIndex2 = 0;
	carousel2();

	function carousel2() {
	  var i;
	  var x = document.getElementsByClassName("mySlides2");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  myIndex2++;
	  if (myIndex2 > x.length) {myIndex2 = 1}    
	  x[myIndex2-1].style.display = "block";  
	  setTimeout(carousel2, 2000); 
	}

	$("#supp").css('display', 'none');
	
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

	  	$("#str_off_level_1").css('display','none');

	  	$("#str_on_level_1").click(function () 
	    {
		  		$("#str_cont_level_1").slideUp("slow");
	    		$("#str_on_level_1").css('display', 'none');
	    		$("#str_off_level_1").css('display', 'block');
	  	});

	  	$("#str_off_level_1").click(function () 
	    {
		  		$("#str_cont_level_1").slideDown("slow");
	    		$("#str_off_level_1").css('display', 'none');
	    		$("#str_on_level_1").css('display', 'block');
	  	});

	  	$("#act_off_level_1").css('display','none');

	  	$("#act_on_level_1").click(function () 
	    {
		  		$("#act_cont_level_1").slideUp("slow");
	    		$("#act_on_level_1").css('display', 'none');
	    		$("#act_off_level_1").css('display', 'block');
	  	});

	  	$("#act_off_level_1").click(function () 
	    {
		  		$("#act_cont_level_1").slideDown("slow");
	    		$("#act_off_level_1").css('display', 'none');
	    		$("#act_on_level_1").css('display', 'block');
	  	});

	  	$("#blk_off_level_1").css('display','none');

	  	$("#blk_on_level_1").click(function () 
	    {
		  		$("#blk_cont_level_1").slideUp("slow");
	    		$("#blk_on_level_1").css('display', 'none');
	    		$("#blk_off_level_1").css('display', 'block');
	  	});

	  	$("#blk_off_level_1").click(function () 
	    {
		  		$("#blk_cont_level_1").slideDown("slow");
	    		$("#blk_off_level_1").css('display', 'none');
	    		$("#blk_on_level_1").css('display', 'block');
	  	});

	  	$("#add_off_level_1").css('display','none');

	  	$("#add_on_level_1").click(function () 
	    {
		  		$("#add_cont_level_1").slideUp("slow");
	    		$("#add_on_level_1").css('display', 'none');
	    		$("#add_off_level_1").css('display', 'block');
	  	});

	  	$("#add_off_level_1").click(function () 
	    {
		  		$("#add_cont_level_1").slideDown("slow");
	    		$("#add_off_level_1").css('display', 'none');
	    		$("#add_on_level_1").css('display', 'block');
	  	});

	  	$("#pac_off_level_1").css('display','none');

	  	$("#pac_on_level_1").click(function () 
	    {
		  		$("#pac_cont_level_1").slideUp("slow");
	    		$("#pac_on_level_1").css('display', 'none');
	    		$("#pac_off_level_1").css('display', 'block');
	  	});

	  	$("#pac_off_level_1").click(function () 
	    {
		  		$("#pac_cont_level_1").slideDown("slow");
	    		$("#pac_off_level_1").css('display', 'none');
	    		$("#pac_on_level_1").css('display', 'block');
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

	  	//

	  	$("#pk_off_level_3").css('display','none');

	  	$("#pk_on_level_3").click(function () 
	    {
		  		$("#pk_cont_level_3").slideUp("slow");
	    		$("#pk_on_level_3").css('display', 'none');
	    		$("#pk_off_level_3").css('display', 'block');
	  	});

	  	$("#pk_off_level_3").click(function () 
	    {
		  		$("#pk_cont_level_3").slideDown("slow");
	    		$("#pk_off_level_3").css('display', 'none');
	    		$("#pk_on_level_3").css('display', 'block');
	  	});

	  	




  	// SPA LEVEL 2


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

	  	// pro_cont_level_2

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

	  	$("#ag_off_level_2").css('display','none');

	  	$("#ag_on_level_2").click(function () 
	    {
		  		$("#ag_cont_level_2").slideUp("slow");
	    		$("#ag_on_level_2").css('display', 'none');
	    		$("#ag_off_level_2").css('display', 'block');
	  	});

	  	$("#ag_off_level_2").click(function () 
	    {
		  		$("#ag_cont_level_2").slideDown("slow");
	    		$("#ag_off_level_2").css('display', 'none');
	    		$("#ag_on_level_2").css('display', 'block');
	  	});

  	// SPA LEVEL 3


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

	  	

	  	$("#ag_off_level_3").css('display','none');

	  	$("#ag_on_level_3").click(function () 
	    {
		  		$("#ag_cont_level_3").slideUp("slow");
	    		$("#ag_on_level_3").css('display', 'none');
	    		$("#ag_off_level_3").css('display', 'block');
	  	});

	  	$("#ag_off_level_3").click(function () 
	    {
		  		$("#ag_cont_level_3").slideDown("slow");
	    		$("#ag_off_level_3").css('display', 'none');
	    		$("#ag_on_level_3").css('display', 'block');
	  	});

	  	//ag_list_off_level_3

	  	$("#ag_list_off_level_3").css('display','none');

	  	$("#ag_list_on_level_3").click(function () 
	    {
		  		$("#ag_list_count_level_3").slideUp("slow");
	    		$("#ag_list_on_level_3").css('display', 'none');
	    		$("#ag_list_off_level_3").css('display', 'block');
	  	});

	  	$("#ag_list_off_level_3").click(function () 
	    {
		  		$("#ag_list_count_level_3").slideDown("slow");
	    		$("#ag_list_off_level_3").css('display', 'none');
	    		$("#ag_list_on_level_3").css('display', 'block');
	  	});


	 $("#ipad_off").css('display','none');

  	$("#ipad_on").click(function () 
    {
	  		$("#ipad_cont").slideUp("slow");
    		$("#ipad_on").css('display', 'none');
    		$("#ipad_off").css('display', 'block');
  	});

  	$("#ipad_off").click(function () 
    {
	  		$("#ipad_cont").slideDown("slow");
    		$("#ipad_off").css('display', 'none');
    		$("#ipad_on").css('display', 'block');
  	});



  	// Videos do SPA Level 1

  	$("#complex_video").click(function()
  	{
  		$("#videos_str").html('');

  		$("#videos_str").html('<div class="modal fade" id="comp_video" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><i class="fas fa-film"></i> Complex </h4></div><div class="modal-body"><div class="row"><div class="col-xs-12 col-md-12"><p><strong>This video covers the following topics:</strong><br><i class="fas fa-caret-right"></i> An overview of the Settings functionality in the SPA & Leisure Application.<br><i class="fas fa-caret-right"></i> How to create a new Complex.</p><br></div></div><div class="row"><div class="col-xs-12 col-md-12"><div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" source src="spa_images/videos/level1/Overview_complex.mp4" type="video/mp4" controls></video></div></div></div></div><div class="modal-footer"><p style="text-align:center; margin:0;"><img src="/moodle/images/cs.png" class="logo-nav" style="width:68px;"></p><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button></div></div></div></div>');

  		$("#comp_video").modal('show');

  	});

  	$("#location_video").click(function()
  	{
  		$("#videos_str").html('');

  		$("#videos_str").html('<div class="modal fade" id="loc_video" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><i class="fas fa-film"></i> Location </h4></div><div class="modal-body"><div class="row"><div class="col-xs-12 col-md-12"><p><strong>This video describes how to create, modify and remove Locations.</strong><br><br></div></div><div class="row"><div class="col-xs-12 col-md-12"><div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" source src="spa_images/videos/level1/Location.mp4" type="video/mp4" controls></video></div></div></div></div><div class="modal-footer"><p style="text-align:center; margin:0;"><img src="/moodle/images/cs.png" class="logo-nav" style="width:68px;"></p><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button></div></div></div></div>');

  		$("#loc_video").modal('show');

  	});

  	$("#staff_video").click(function()
  	{
  		$("#videos_str").html('');

  		$("#videos_str").html('<div class="modal fade" id="sta_video" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><i class="fas fa-film"></i> Staff </h4></div><div class="modal-body"><div class="row"><div class="col-xs-12 col-md-12"><p><strong>This video describes how to create new Staff, modify and delete the existing ones.</strong><br><br></div></div><div class="row"><div class="col-xs-12 col-md-12"><div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" source src="spa_images/videos/level1/stuff.mp4" type="video/mp4" controls></video></div></div></div></div><div class="modal-footer"><p style="text-align:center; margin:0;"><img src="/moodle/images/cs.png" class="logo-nav" style="width:68px;"></p><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button></div></div></div></div>');

  		$("#sta_video").modal('show');




  	});


  	$("#staff_ass_video").click(function()
  	{
  		$("#videos_str").html('');

  		$("#videos_str").html('<div class="modal fade" id="sta_ass_video" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><i class="fas fa-film"></i> Staff Assignment </h4></div><div class="modal-body"><div class="row"><div class="col-xs-12 col-md-12"><p><strong>This video describes how to assign working time and activities to a specific staff.</strong><br><br></div></div><div class="row"><div class="col-xs-12 col-md-12"><div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" source src="spa_images/videos/level1/stuff2.mp4" type="video/mp4" controls></video></div></div></div></div><div class="modal-footer"><p style="text-align:center; margin:0;"><img src="/moodle/images/cs.png" class="logo-nav" style="width:68px;"></p><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button></div></div></div></div>');

  		$("#sta_ass_video").modal('show');

  	});

  	$("#act_sub_grupos_video").click(function()
  	{
  		$("#videos_str").html('');

  		$("#videos_str").html('<div class="modal fade" id="act_sub_gru" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><i class="fas fa-film"></i> Activity Groups and Sub Groups </h4></div><div class="modal-body"><div class="row"><div class="col-xs-12 col-md-12"><p><strong>This video describes how to create Activity Groups and Sub Groups.</strong><br><br></div></div><div class="row"><div class="col-xs-12 col-md-12"><div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" source src="spa_images/videos/level1/spa_groups.mp4" type="video/mp4" controls></video></div></div></div></div><div class="modal-footer"><p style="text-align:center; margin:0;"><img src="/moodle/images/cs.png" class="logo-nav" style="width:68px;"></p><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button></div></div></div></div>');

  		$("#act_sub_gru").modal('show');
  	});


  	$("#season_time_video").click(function()
  	{
  		$("#videos_str").html('');

  		$("#videos_str").html('<div class="modal fade" id="sea_time_video" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><i class="fas fa-film"></i> Seasons & Complex Time </h4></div><div class="modal-body"><div class="row"><div class="col-xs-12 col-md-12"><p><strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to create new Seasons.<br><i class="fas fa-caret-right"></i> How to define a Complex Opening Time.</p><br></div></div><div class="row"><div class="col-xs-12 col-md-12"><div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" source src="spa_images/videos/level1/complex_spa.mp4" type="video/mp4" controls></video></div></div></div></div><div class="modal-footer"><p style="text-align:center; margin:0;"><img src="/moodle/images/cs.png" class="logo-nav" style="width:68px;"></p><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button></div></div></div></div>');

  		$("#sea_time_video").modal('show');
  	});

  	function actModal(val) 
  	{
  		$(".info_act").css('display','block');

  		$(".video_act").css('display','block');

  		switch(val)
  		{
  			case 1:

  			var act_video = $("#act_video");

  			$(".title_act").html('<i class="fas fa-film"></i> Overview ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of how to create an Activity.<br><i class="fas fa-caret-right"></i> The difference between the three different Activity Types: Standard, Multi-Level and Scheduled.');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level1/spa_activity.mp4" type="video/mp4" controls></video>');

  			$("#supp_on2").css('display','none');




  			act_video.modal('show');


	  		break;

	  		case 2:


	  		var act_video = $("#act_video");

	  		$(".title_act").html('<i class="fas fa-film"></i> Standard ');

  			$(".info_act").html('<strong>This video describes how to create a Standard Activity. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level1/spa_standard.mp4" type="video/mp4" controls></video>');

  			$("#supp_on2").css('display','none');


  			act_video.modal('show');


	  		break;

	  		case 3:


	  		var act_video = $("#act_video");

	  		$(".title_act").html('<i class="fas fa-film"></i> Multi-Level ');

  			$(".info_act").html('<strong>This video describes how to create a Multi-Level Activity. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level1/spa_multilevel.mp4" type="video/mp4" controls></video>');

  			$("#supp_on2").css('display','none');


  			act_video.modal('show');


	  		break;

	  		case 4:


	  		var act_video = $("#act_video");

	  		$(".title_act").html('<i class="fas fa-film"></i> Scheduled ');

  			$(".info_act").html('<strong>This video describes how to create a Scheduled Activity. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level1/spa_schedule.mp4" type="video/mp4" controls></video>');

  			$("#supp_on2").css('display','none');


  			act_video.modal('show');


	  		break;
  		}
  		
  	}

  	function blkModal(val) 
  	{
  		$(".info_act").css('display','block');

  		$(".video_act").css('display','block');


  		switch(val)
  		{
  			case 1:

  			var act_video = $("#act_video");

  			$(".title_act").html('<i class="fas fa-film"></i> Others & Block Types ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to create, modify and delete Cancellation References.<br><i class="fas fa-caret-right"></i> How to create Turnaway Reasons.<br><i class="fas fa-caret-right"></i> An overview of the Question References and the Request Override References.<br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level1/spa_otherblock.mp4" type="video/mp4" controls></video>');

  			$("#supp_on2").css('display','none');




  			act_video.modal('show');


	  		break;
	  	}
  		
  	}

  	function addModal(val) 
  	{
  		$(".info_act").css('display','block');

  		$(".video_act").css('display','block');


  		switch(val)
  		{
  			case 1:

  			var act_video = $("#act_video");

  			$(".title_act").html('<i class="fas fa-film"></i> Equipment ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to add Equipment.<br><i class="fas fa-caret-right"></i> How to link the Equipment with specific activities.<br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level1/spa_equipament.mp4" type="video/mp4" controls></video>');

  			$("#supp_on2").css('display','none');




  			act_video.modal('show');


	  		break;
	  	}
  	}

  	function pacModal(val) {

  		$(".info_act").css('display','block');

  		$(".video_act").css('display','block');


  		switch(val)
  		{
  			case 1:

  			var act_video = $("#act_video");

  			$(".title_act").html('<i class="fas fa-film"></i> Package ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to create a Package for activities.<br><i class="fas fa-caret-right"></i> How to add services to a Package and define Alternatives.<br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level1/spa_package.mp4" type="video/mp4" controls></video>');

  			$("#supp_on2").css('display','none');




  			act_video.modal('show');


	  		break;
	  	}
  	}




  	function supModal(val) {
  		switch(val)
  		{
  			case 1:

  			var act_video = $("#act_video");

  			$("#supp_on2").css('display', 'block');

  			$(".title_act").html('<i class="fas fa-file"></i> Support ');

  			$(".info_act").css('display','none');

  			$(".video_act").css('display','none');

  			act_video.modal('show');


	  		break;
	  	}
  	}

  	function proModal(val) {

  		$(".video_act").css('display', 'block');

  		$(".info_act").css('display', 'block');


  		switch(val)
  		{

  			

  			case 1:

  			var spa_2 = $("#spa_2");

  			$(".title_act").html('<i class="fas fa-film"></i> Search ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> An overview of the Profile functionality.<br><i class="fas fa-caret-right"></i> How to (advanced) search for the existing Profiles.<br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_profiles.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');




  			spa_2.modal('show');

  			break;

  			case 2:

  			var spa_2 = $("#spa_2");

  			$(".title_act").html('<i class="fas fa-film"></i> Create & Modify ');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to create a new Profile.<br><i class="fas fa-caret-right"></i> How to modify the existing Profiles.<br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_profiles_modify.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');

  			spa_2.modal('show');

  			break;

  			case 3:

  			var spa_2 = $("#spa_2");

  			$(".title_act").html('<i class="fas fa-film"></i> Activity & Sales History ');

  			$(".info_act").html('<strong>This video describes how to view the Activity and the Sales History of a Profile. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_profile_history.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');

  			spa_2.modal('show');

  			break;
  		}
  	}

  	function agModal(val) {
  		var spa_2 = $("#spa_2");

  			$(".info_act").css('display','block');



  			$(".video_act").css('display','block');

  		switch(val)
  		{
  			case 1:

  			$(".title_act").html('<i class="fas fa-film"></i> Overview of Agenda ');

  			$(".info_act").html('<strong>This video describes the Agenda functionality.</strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_ag_overview.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');


  			break;

  			case 2:

  			$(".title_act").html('<i class="fas fa-film"></i> Standard Reservations for a new Profile');

  			$(".info_act").html('<strong>This video describes how to create Standard Reservations for a new Profile.</strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_ag_stand_services.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');


  			break;

  			case 3:

  			$(".title_act").html('<i class="fas fa-film"></i> Standard Reservations for an existing Profile');

  			$(".info_act").html('<strong>This video describes how to create Standard Reservations for an existing Profile.</strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_ag_stand_services_exists.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');


  			break;

  			case 4:

  			$(".title_act").html('<i class="fas fa-film"></i> Cancel a Reservation');

  			$(".info_act").html('<strong>This video describes how to cancel a Reservation. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_agency_cancel_book.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');


  			break;

  			case 5:

  			$(".title_act").html('<i class="fas fa-film"></i> Cancel a Reservation');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to use the "Drag & Drop" and "Cut & Paste" functionalities for Blocks.<br><i class="fas fa-caret-right"></i> How to create, modify and delete Blocks.<br><i class="fas fa-caret-right"></i> How to paste multiple Blocks.<br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_agency_drag_drop.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');


  			break;

  			case 6:

  			$(".title_act").html('<i class="fas fa-film"></i> Confirm Check-In');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to confirm a Reservation.<br><i class="fas fa-caret-right"></i> How to confirm a Check-In Booking. <br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/ag_confirm.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');


  			break;

  			case 7:

  			$(".title_act").html('<i class="fas fa-film"></i> Send a Confirmation Email');

  			$(".info_act").html('<strong>This video describes how to send the booking itinerary confirmations by email. </strong><br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_ag_confirm_email.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');


  			break;

  			case 8:

  			$(".title_act").html('<i class="fas fa-film"></i> Features');

  			$(".info_act").html('<strong>This video covers the following topics: </strong><br><i class="fas fa-caret-right"></i> How to modify a Booking.<br><i class="fas fa-caret-right"></i> How to modify Staff in a Booking. <br><i class="fas fa-caret-right"></i> How to modify Time and Date in a Booking. <br><i class="fas fa-caret-right"></i> How to swap two Bookings (Swap with...). <br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa-agency_features.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');

  			break;

  			case 9:

  			$(".title_act").html('<i class="fas fa-film"></i> Concurrent Reservation');

  			$(".info_act").html('This video describes how to create a reservation with the Concurrent functionality. <br><i class="fas fa-caret-right"></i> (This procedure happens when two therapists are with one client at the same time and room.) <br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_agency_current.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');

  			break;

  			case 10:

  			$(".title_act").html('<i class="fas fa-film"></i> Add-In Reservation');

  			$(".info_act").html('This video describes how to add a new Reservation to an existing one. <br><i class="fas fa-caret-right"></i> (This procedure happens when two activities are taking place at the same time and room with the same therapist.) <br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_agency_add_booking.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');

  			break;

  			case 11:

  			

  			$(".title_act").html('<i class="fas fa-film"></i> Turnaway');

  			$(".info_act").html('This video describes how to use the Turnaway functionality. <br>');

  			$(".video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level2/spa_agency_tunaway.mp4" type="video/mp4" controls></video>');

  			$("#supp_on").css('display','none');

  			break;


  			case 12:

  			$(".title_act").html('<i class="fas fa-file"></i> Time Line & Check Out & Booking & Drap Drop Agenda');

  			$(".info_act").css('display','none');

  			$(".video_act").css('display','none');

  			$("#supp_on").css('display','block');


  			break;
  			



  		}

  		spa_2.modal('show');
  		
  	}




  	function agListModal(val) {

  		$(".title_act").css('display', 'block');

  		$(".info_act").css('display', 'block');


  		var spa_3 = $("#spa_3");
  		switch(val)
  		{
  			case 1:

  				$(".title_act").html('<i class="fas fa-film"></i> Agenda List');

  				$(".info_act").html('This video describes the Agenda List (or alternatively F5). <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/spa_agenda_list.mp4" type="video/mp4" controls></video>');

  			break;
  		}

  		spa_3.modal('show');


  	}

  	function agListMultiBookModal(val) {
  		var spa_3 = $("#spa_3");
  		switch(val)
  		{
  			case 1:

  				$(".title_act").html('<i class="fas fa-film"></i> Multibook');

  				$(".info_act").html('This video describes how to create multiple reservations (or alternatively F7) for a Profile. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/spa_multibook.mp4" type="video/mp4" controls></video>');

  			break;
  		}

  		spa_3.modal('show');


  	}

  	function pckgBookModal(val) {
  		var spa_3 = $("#spa_3");
  		switch(val)
  		{
  			case 1:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;
  		}

  		spa_3.modal('show');


  	}


  	function pckgBookModal(val) {
  		var ipadModal = $("#ipadModal");
  		switch(val)
  		{
  			case 1:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;

  			case 2:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;

  			case 3:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;

  			case 4:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;

  			case 5:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;

  			case 6:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;

  			case 7:

  				$(".title_act").html('<i class="fas fa-film"></i> Package Reservation');

  				$(".info_act").html('This video describes how to book a Package. <br>');

  				$("#video_act").html('<video class="embed-responsive-item" source src="spa_images/videos/level3/package_reservation.mp4" type="video/mp4" controls></video>');

  			break;
  		}

  		ipadModal.modal('show');


  	}



  	
	





</script>
