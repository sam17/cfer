<?php
 include 'header.php';
?>

<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
					<h2>User Emotion Classification from Keyboard Keystroke</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<br/>
<div style="width:80%;margin-left:10%;font-size:18px;text-align: justify;">
This project aims to develop a system capable of classifying user emotion (1. Happiness, 

2. Disgust, 3. Anger, 4. Fear, 5. Sadness, 6. Surprise and 7. Neutral.) based on timing 

data and relative position data of consecutive keystrokes (while typing on a keyboard). A 

classifier (Artificial Neural Network) will be used to classify emotions. 

The developed Artificial Neural network will have 11 inputs and 7 outputs. For training; 

data will be collected from users and reference emotion (the actual emotion the user is in 

at the time of typing) will be found out by automated facial recognition.

To collect data, the users will be asked to type in a group chat type setup, where different 

audio (music) visual (pictures) stimuli will be used to incite different emotions. Two 

types of data collection will be adopted, as stated below. <br/>
<ul>
<li>Typing data from keyboard – key press time stamps and position data of 

consecutive keys.</li>

<li>Facial features data – video data of the user’s face will be collected using web 

cam.</li>
</ul>
</div>
<br/>
<br/>
<?php
 include 'footer.php';
?>