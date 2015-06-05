<?php
 include 'header.php';
?>

<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2>Robot as a Social Assistant</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<br/>
<div style="width:80%;margin-left:10%;font-size:18px;text-align: justify;">
This project is to develop a robotic framework with potential benefits in providing 

assistance to elderly people or having cognitive disorder. For creating a robot that can 

interact socially in our daily lives, the robot should be featured with some capabilities 

that may cut off some of our human efforts. These capabilities have been listed in form of 

the two sub-projects below. <br/><br/>
<b>Generation of an Indoor Map using Vision-based approach (Indoor SLAM)</b><br/>
A key functionality to be endowed to a robot is obstacle-free maneuvering in an 

environment. This functionality known as Simultaneous Localization and Mapping 

(SLAM), should be bestowed with some spatially consistent models, which will solve 

concurrently the localization and mapping problems. For this purpose, vision-based 

approach has been adopted, as it is capable of providing robust scene description. This 

approach uses both stereo-vision-based as well as monocular vision-based approaches 

to provide real time dense metric maps of natural 3D point landmarks of an indoor 

environment. The approach takes into account vision-based motion estimation, 

odometry, and pose estimation in analyzing Extended Kalman Filtering as well as Rao 

Blackwellized particle filter for vision-based SLAM.<br/><br/>
<b>Efficient object pick-up and grasping using Vision based feedback</b><br/>
This project is to develop a sensor aided parallel jaw gripper for grasping novel objects, 

whose 3-D model is not available. This gripper is aided with strain gauge pressure 

sensors to control the gripping force for different objects. This project involves vision 

based pose estimation for arm positioning, detection of possible grasp points, and finally 

the grasp execution. Vision-based gripping has been proved to be elusive especially in 

cluttered and uncontrolled environment. Solution to make the robot-grasping domain 

independent, is to employ some active learning algorithms. These active algorithms shall 

intelligently select actions, and reduce the number of examples avoiding separate training 

and execution phases. This will reduce the volume of the learning data set and at the 

same time resulting in higher autonomy.
	 <br><br>
	 	 <b>Faculty Involved:</b><br>
	 Jayanta Mukhopadhyay (PI) <br>
	 Alok kanti Deb<br>
K.S Rao
	 
</div>
<br/>
<br/>
<?php
 include 'footer.php';
?>