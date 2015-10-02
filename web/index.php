
<?php
  include 'header.php';
?>
	<link rel="image_src" href="http://www.cferobotics.iitkgp.ac.in/logo.jpg" />
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
	<div id="sliderFrame">
           <div id="slider">
            <img style="width:1000px;repeat:no-repeat" src="img/slides/s1.jpg"  alt="IIT-Kharagpur" />
            <!-- <img style="width:1000px;repeat:no-repeat" src="img/slides/2.jpg" alt="The Team!"  /> -->
            <!-- <img style="width:1000px;repeat:no-repeat" src="img/slides/3.jpg" alt="The Bot!"  /> -->
            </div>
        </div> 
	<!-- end slider -->
			</div>
		</div>
	</div>	
	

	</section>
	 <!-- <br/> -->
		<center><section id="content" style="margin-top:-30px;width:1100px;text-align:center">
			 <div class="container" style="width:1100px;">
			  <div id="wrapper1" >
			<div class="first">
				<dl id="ticker-1">
					<!--<dt>News ticker</dt>-->
						<dd>Kharagpur Robosoccer Student's Group won Bronze medal in FIRA Roboworld Cup held in Dajeon, South Korea.</dd>
	
			    		<dd>Technology Robotix Society organized a Guest Lecture by Sri Krishna, Development Manager, iRobot with the help of Prof. P.L. Narsimhan, TVS Motors Chair Professor, Industrial & Systems Engineering on 27 August 2015.</dd>
	
				</dl>
			</div>
			
		</div>
    </div>
    </section></center> <br/>
    <br/>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>A</span>bout <span>U</span>s </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container" style="text-align:justify">
		<p class="lead">
		<b>The Centre for Excellence in Robotics, Indian Institute of Technology Kharagpur, India</b>, is an umbrella body, under the aegis of which, all robotics-related activities of the Institute will be conducted and coordinated.<br>
	     <br>The main emphasis of the centre is the design and development of intelligent and autonomous robots and work on research problems and innovative projects that extend the state of the art in robotics. The vision behind it is to promote and encourage student activities, research projects, and relevant courses related to this field. Besides the students, a large number of faculty members from various departments are part of this centre.<br/>
	    <br/> Centre for Excellence in Robotics received its first funding of &#8377;5 Crores from <b>IIT Kharagpur</b> in 2015. <br/>  
		</p>	
		
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
		</section>
		<!-- end divider -->
</div>
<br/>
<br/>

<?php
	include 'footer.php';
?>
</body>
</html>
	<script src="js/slider.js"></script>
	<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                var _scroll = {
                    delay: 1000,
                    easing: 'linear',
                    items: 1,
                    duration: 0.07,
                    timeoutDuration: 0,
                    pauseOnHover: 'immediate'
                };
                $('#ticker-1').carouFredSel({
                    width: 950,
                    align: false,
                    items: {
                        width: 'variable',
                        height: 35,
                        visible: 1
                    },
                    scroll: _scroll
                });

                $('#ticker-2').carouFredSel({
                    width: 950,
                    align: false,
                    circular: false,
                    items: {
                        width: 'variable',
                        height: 35,
                        visible: 2
                    },
                    scroll: _scroll
                });

                //  set carousels to be 100% wide
                $('.caroufredsel_wrapper').css('width', '100%');

                //  set a large width on the last DD so the ticker won't show the first item at the end
                $('#ticker-2 dd:last').width(2000);
            });
        </script>

	
