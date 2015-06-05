
<?php
  include 'header.php';
?>
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
		<section id="content" align = "center" style="margin-top:-30px;width:1100px;margin-left:232px;">
			 <div class="container" style="width:1100px;">
			  <div id="wrapper1" >
			<div class="first">
				<dl id="ticker-1">
					<!--<dt>News ticker</dt>-->
						<dd>A news ticker (sometimes referred to as a &quot;crawler&quot;) resides in the lower third of the television screen space on television news networks dedicated to presenting headlines or minor pieces of news.</dd>
	
					<!--<dt>Scoreboard style</dt>-->
						<dd>It may also refer to a long, thin scoreboard-style display seen around the front of some offices or public buildings.</dd>
	
					<!--<dt>WWW</dt>-->
						<dd>Since the growth in usage of the World Wide Web, news tickers have largely syndicated news posts from the websites of the broadcasting services which produce the broadcasts.</dd>
				</dl>
			</div>
			
		</div>
    </div>
    </section> <br/>
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
		<b>The Centre for Excellence in Robotics, Indian Institute of Technology Kharagpur, India</b>, is an umbrella body, under the aegis of which, all robotics-related activities of the Institute will be conducted and coordinated. This centre is the initiative of <b>Professor Partha Pratim Chakrabarti, the Director of IIT Kharagpur</b>.<br>
	     <br>The main emphasis of the centre is the design and development of intelligent and autonomous robots. The vision behind it is to promote and encourage student activities, research projects, and relevant courses related to this field. Besides the students, a large number of faculty members from various departments have joined this centre.<br/>
	    <br/> Finally Centre for Excellence in Robotics would like to thank <b>Sponsored Research and Industrial Consultancy,IIT - Kharagpur</b>, for providing all the necessary financial aid.<br/>  
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

	