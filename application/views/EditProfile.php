<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<div class="mainContentContainer">
	<div class="mainContent">
		<div class="mainContentFloat">
			<h1>
				<div class="mediumText" style="float:right; width: auto;">
					<a href="#">View My Profile</a>
				</div>
				<span style="font-family:"Lato";">Account Settings</span>
			</h1>
		<div class="openTabbedBox">
		  <div id="profile" style="">
		      <form action="<?= base_url('index.php/UserCo/Signin/') ?>" method="POST" id="userForm" name="userForm" >
		      	<input name="Profileform" type="hidden" value="✓">
		      	<input type="hidden" name="authentikota">
		      <div class="leftContainer">
						<p>
								<label for='nama_depan'>First Name 
									<span class="required">*</span>
								</label><br>
								<input size="30" class="input_form" type="text" name="firstName" id="firstName">
						</p>
						<p>
							<label for="nama_tengah">Middle Name
							</label><br>
								<input size="30" class="input_form" type="text" name="middleName" id="middleName">
						</p>
						<p>
							<label for="nama_akhir">Last Name
							</label><br>
								<input size="30" class="input_form" type="text" name="lastName" id="lastName">
						</p>
						<p>
							<label for="display_name">Display Name
							</label><br>
								<input size="30" class="input_form" type="text"  name="displayName">
						</p>


					

							<p>
							<label for="user_user_name">Username</label><br>
							<input class="input_form" autocomplete="off" size="30" type="text" name="username" id="username">
						</p>

							<div id="gender_fields">
								<div id="gender_selector">
										<label for="user_gender">	
											Jenis Kelamin
										</label><br>
										<select name="gender" id="gender">
											<option value="">
												Select
											</option>
									<option value="L">
										Laki-Laki
									</option>
									<option value="P">
										Perempuan
									</option>
								</select>
								</div>
									
						

						<p id="pkode_pos">
							<label for="user_kode_pos">ZIP Code
								<span class="smallText greyText"></span>
							</label><br>
								<input size="9" class="input_form" type="text" name="kodepos" id="kodepos">
						</p>

						<p id="kota">
							<label for="user_kota">
								City
							</label><br>
								<input size="30" class="input_form" type="text" name="kota" id="kota">
						</p>

						<p id="provinsi">
							<label for="user_provinsi">
								State/Province Code
							</label><br>
								<input size="6" class="input_form" type="text" name="kodeProvinsi" id="kodeProvinsi">
						</p>

						<p>	
							<label for="user_negara">
								Country
							</label><br>
								<select onchange="checkCountry();" name="country" id="country">
									<option value="">Pilih</option>
									<option value="IR">Iran</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IM">Isle of Man</option>
								<option value="ID">Indonesia</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JE">Jersey</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								</select>
						</p>
						<p>
							<label for="user_Lahir">Date of Birth</label><br>
								<select id="year" name="year">
									<option value=""></option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
								</select>
								<select id="month" name="month">
									<option value=""></option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
								<select id="date" name="date">
									<option value=""></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
						</p>
						<p>
							<label for="user_blog">My Blog</label>
								<span class="greyText smallText">
									(e.g. http://www.myblog.com)
								</span><br>
								<input style="width:500px;" class="input_form" type="text" name="user[blog]" id="user_blog">
								<button id="clearUrlButton">Clear</button>
							</p>
							<p>
								<label for="user_kegemaran">
								 My Interests
								</label>
								— favorite subjects, or really anything you know a lot about  <br>
								<span class="smallText"><i>(in comma separated phrases, please)</i>
								</span><br>
								<input class="input_form" style="width:500px;" type="text" value="" name="user[kegemaran]" id="user_kegemaran">
							</p>
							<p>
								<label for="user_buku_favorit">What Kind of Books Do You Like to Read?</label><br>
								<textarea rows="1" style="width:500px" 
									name="user[buku_favorit]" id="user_buku_favorit">
								</textarea>
							</p>
							<p>
								<label for="user_tentang_saya">About Me</label><br>
								<textarea rows="15" style="width:500px" name="user[tentang_saya]" id="user[tentang_saya]"></textarea>
						</p>
									<p>
										<input type="submit" name="commit" value="Save Profile Settings" class="gr-button u-marginLeftXSmall">
									</p>
					</div>
          		<div class="rightContainer">
				  	<p>
					    <a style="margin-bottom: 0.5em" href="   "><img src="https://s.gr-assets.com/assets/nophoto/user/u_111x148-9394ebedbb3c6c218f64be9549657029.png" alt="U 111x148"></a>
					    <br>
					      <input size="25" style="margin-bottom: 0.5em" type="file" name="user[photo]" id="user_photo">
					      <br>
					      <input type="submit" name="commit" value="Upload Photo" class="gr-button gr-button--small"><br>

				  	</p>
				</div>
			</div>	
		</div>
		</div>		
	</div>			
</div>				
</body>

</html>   