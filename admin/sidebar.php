<div class="side_digital">
		<script language="javascript" type="text/javascript">
			/* Visit http://www.yaldex.com/ for full source code
			and get more free JavaScript, CSS and DHTML scripts! */
			<!-- Begin
			var timerID = null;
			var timerRunning = false;
			function stopclock (){
			if(timerRunning)
			clearTimeout(timerID);
			timerRunning = false;
			}
			function showtime () {
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds()
			var timeValue = "" + ((hours >12) ? hours -12 :hours)
			if (timeValue == "0") timeValue = 12;
			timeValue += ((minutes < 10) ? ":0" : ":") + minutes
			timeValue += ((seconds < 10) ? ":0" : ":") + seconds
			timeValue += (hours >= 12) ? " P.M." : " A.M."
			document.clock.face.value = timeValue;
			timerID = setTimeout("showtime()",1000);
			timerRunning = true;
			}
			function startclock() {
			stopclock();
			showtime();
			}
			window.onload=startclock;
			// End -->
		</SCRIPT>								      


						<div>
                        <p style="margin-top: 43px">Today is:  
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date(' d/m/Y', strtotime($Today));
                        echo $new;
                        ?>
                        </p>
                        <p>
		<form name="clock">
		Time is: &nbsp;<input type="submit" class="trans" name="face" value="">
			</form>
</p>	
                    </div>
						<div class="navbar">
						<?php
							$url = explode('/',$_SERVER['REQUEST_URI']);
							$active = str_replace('.php','',end($url));
						?>
									<div class="navbar-inner">
										<div class="pull-right">					
										</div>
									</div>
								</div>
								<ul class="nav nav-tabs nav-stacked">
									<li class="<?=$active == 'dashboard' ? 'active' : ''?>">
										<a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home<i class="icon-arrow-right icon-large"></i></a>
									</li>
									<li class="<?=$active == 'sched_today' ? 'active' : ''?>"><a href="sched_today.php"><i class="icon-file-alt icon-large"></i>&nbsp;         Schedule for Today <i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'schedule' ? 'active' : ''?>"><a href="schedule.php"><i class="icon-list icon-large"></i>&nbsp;Schedule<i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'service' ? 'active' : ''?>"><a href="service.php"><i class="icon-briefcase	icon-large"></i>&nbsp;Services<i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'package' ? 'active' : ''?>"><a href="package.php"><i class="icon-briefcase	icon-large"></i>&nbsp;Packages<i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'user' ? 'active' : ''?>"><a href="user.php"><i class="icon-user icon-large"></i>&nbsp;  User Accounts<i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'members' ? 'active' : ''?>"><a href="members.php"><i class="icon-group icon-large"></i>&nbsp;Members<i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'note' ? 'active' : ''?>"><a href="note.php"><i class="icon-file icon-large"></i>&nbsp; Bulletin<i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'upload_files' ? 'active' : ''?>"><a href="upload_files.php"><i class="icon-file icon-large"></i>&nbsp; Upload Files<i class="icon-arrow-right icon-large"></i></a></li>
									<li class="<?=$active == 'upload_portfolio' ? 'active' : ''?>"><a href="upload_portfolio.php"><i class="icon-file icon-large"></i>&nbsp; Portfolio<i class="icon-arrow-right icon-large"></i></a></li>
								</ul>
							</div>
								