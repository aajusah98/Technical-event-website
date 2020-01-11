<body>
  <?php
  include "header.php";

  ?>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/img.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>AAYAM<br></strong> do as other can't do</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Fest starts in</p>
          </div>
        </div>
      </div>
    </div>
    <section class=" ftco-destination">
    	<div class="container-lg">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4"><strong>Events</strong> Posters</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="single-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/slid1.jpg);">

		    					</a>

		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/slid2.jpg);">

		    					</a>

		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/slid3.jpg);">
		    					</a>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/roborace.jpg);">

		    					</a>

		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cricket.jpg);">

		    					</a>

		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/racing.jpg);">

		    					</a>

		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class=" bg-light" id="events">
    	<div class="container" id="0">
    		<div class="row justify-content-start mb-5 pb-3">
             <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4"><strong>Book Your</strong>  Faviourate Event</h2>
          </div>
        </div>
    		<div class="row" id="technical" >
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row" >
                <div class="col-md-12">
                  <div id="get_events"></div>
                      <?php
                      $event_query = "SELECT * FROM event_type";
                      $run_query1 = mysqli_query($con,$event_query);
                      if(mysqli_num_rows($run_query1) > 0){
                        while($row = mysqli_fetch_array($run_query1)){
                        $type_id = $row["type_id"];
                        $type_title= $row["type_title"];
                        echo "
                        <div class='card'>
                        <div class='card-header' id='$type_id'>
                               <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
                               </div>
                               <div id='menu$type_id' class='collapse'>
                               <div class='card-body'>
                                 <div class='row'>";
                                 $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
                                 $run_query2 = mysqli_query($con,$type_query);
                                 if(mysqli_num_rows($run_query2) > 0){

                                 while($row = mysqli_fetch_array($run_query2)){
                                   $newtype_id    = $row['type_id'];
                                   $event_id   = $row['event_id'];
                                   $event_title = $row['event_title'];
                                   $type_title = $row['type_title'];
                                   $event_price = $row['event_price'];
                                   $img_link = $row['img_link'];

                                   if($newtype_id==$type_id){

                                   ?>
                                   <div class='col-md-6 col-lg-3 ftco-animate'>
                                   <div class='destination'>
                                     <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url("./images/<?php echo $img_link; ?>");'>
                                       <div class='d-flex justify-content-center align-items-center'>
                                       </div>
                                     </a>
                                     <div class='text p-3'>
                                       <h3><a href='#'><?php echo $event_title; ?></a></h3>
                                       <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
                                         <?php echo $event_price; ?>
                                         <span>RS</span>
                                       </p>
                                       <p>Far far away, behind the word mountains, far from the countries</p>
                                       <hr>
                                       <p class='bottom-area d-flex'>
                                         <span><i class='icon-map-o'></i> AAYAM</span>
                                         <span class='ml-auto'><a href='register.php'>Book</a></span>
                                       </p>
                                     </div>
                                   </div>
                                 </div>
                                 <?php
                                   }

                                 }
                                 }
                              echo"
                              </div>
                               </div>
                             </div>
                             </div>
                             ";
                        }

                      }
                      ?>

                  </div>
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class=" ftco-destination">
      <div class="container">
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EEEQ-e9LsdI"></iframe>
</div>
</div>
</div>
</section>
