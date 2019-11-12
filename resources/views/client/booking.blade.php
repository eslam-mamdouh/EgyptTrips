@extends('client.layouts.master')
@section('content')
    						<div class="col-md-9 col-sm-12 ">
							<div class="row">
								<div class="col-12 text-center ">
									<h2 class="title--primary">Book your Trip
									</h2>
									<p class="description--primarytext-center">
										"It is a long established fact that a reader will be distracted by the readable
										content"
									</p>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<input id="customerName" type="email" class="form-control validate[required]"
											aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input id="customerEmail" type="email"
											class="form-control validate[required,custom[email]]"
											aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Phone</label>
										<input id="customerPhone" type="text" class="form-control validate[required]"
											aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Country</label>
										<select name="ctl00$main$LocalizedCountryList$ddlCountries" id="ddlCountries"
											class="form-control  validate[required]">
											<option value="">-- Select Your Country --</option>
											<option value="3">Afghanistan</option>
											<option value="6">Albania</option>
											<option value="60">Algeria</option>
											<option value="12">American Samoa</option>
											<option value="1">Andorra</option>
											<option value="9">Angola</option>
											<option value="5">Anguilla</option>
											<option value="10">Antarctica</option>
											<option value="4">Antigua and Barbuda</option>
											<option value="11">Argentina</option>
											<option value="7">Armenia</option>
											<option value="15">Aruba</option>
											<option value="14">Australia</option>
											<option value="13">Austria</option>
											<option value="16">Azerbaijan</option>
											<option value="30">Bahamas</option>
											<option value="23">Bahrain</option>
											<option value="19">Bangladesh</option>
											<option value="18">Barbados</option>
											<option value="34">Belarus</option>
											<option value="20">Belgium</option>
											<option value="35">Belize</option>
											<option value="25">Benin</option>
											<option value="26">Bermuda</option>
											<option value="31">Bhutan</option>
											<option value="28">Bolivia</option>
											<option value="17">Bosnia and Herzegovina</option>
											<option value="33">Botswana</option>
											<option value="32">Bouvet Island</option>
											<option value="29">Brazil</option>
											<option value="102">British Indian Ocean Territory</option>
											<option value="27">Brunei Darussalam</option>
											<option value="22">Bulgaria</option>
											<option value="21">Burkina Faso</option>
											<option value="24">Burundi</option>
											<option value="112">Cambodia</option>
											<option value="45">Cameroon</option>
											<option value="36">Canada</option>
											<option value="51">Cape Verde</option>
											<option value="119">Cayman Islands</option>
											<option value="39">Central African Republic</option>
											<option value="205">Chad</option>
											<option value="44">Chile</option>
											<option value="46">China</option>
											<option value="52">Christmas Island</option>
											<option value="37">Cocos (Keeling) Islands</option>
											<option value="47">Colombia</option>
											<option value="114">Comoros</option>
											<option value="40">Congo</option>
											<option value="38">Congo, the Democratic Republic of the</option>
											<option value="43">Cook Islands</option>
											<option value="48">Costa Rica</option>
											<option value="42">Cote D Ivoire</option>
											<option value="95">Croatia</option>
											<option value="50">Cuba</option>
											<option value="53">Cyprus</option>
											<option value="54">Czech Republic</option>
											<option value="57">Denmark</option>
											<option value="56">Djibouti</option>
											<option value="58">Dominica</option>
											<option value="59">Dominican Republic</option>
											<option value="61">Ecuador</option>
											<option value="63">Egypt</option>
											<option value="201">El Salvador</option>
											<option value="85">Equatorial Guinea</option>
											<option value="65">Eritrea</option>
											<option value="62">Estonia</option>
											<option value="67">Ethiopia</option>
											<option value="70">Falkland Islands (Malvinas)</option>
											<option value="72">Faroe Islands</option>
											<option value="69">Fiji</option>
											<option value="68">Finland</option>
											<option value="73">France</option>
											<option value="78">French Guiana</option>
											<option value="168">French Polynesia</option>
											<option value="206">French Southern Territories</option>
											<option value="74">Gabon</option>
											<option value="82">Gambia</option>
											<option value="77">Georgia</option>
											<option value="55">Germany</option>
											<option value="79">Ghana</option>
											<option value="80">Gibraltar</option>
											<option value="86">Greece</option>
											<option value="81">Greenland</option>
											<option value="76">Grenada</option>
											<option value="84">Guadeloupe</option>
											<option value="89">Guam</option>
											<option value="88">Guatemala</option>
											<option value="83">Guinea</option>
											<option value="90">Guinea-Bissau</option>
											<option value="91">Guyana</option>
											<option value="96">Haiti</option>
											<option value="93">Heard Island and Mcdonald Islands</option>
											<option value="226">Holy See (Vatican City State)</option>
											<option value="94">Honduras</option>
											<option value="92">Hong Kong</option>
											<option value="97">Hungary</option>
											<option value="105">Iceland</option>
											<option value="101">India</option>
											<option value="98">Indonesia</option>
											<option value="104">Iran, Islamic Republic of</option>
											<option value="103">Iraq</option>
											<option value="99">Ireland</option>
											<option value="100">Israel</option>
											<option value="106">Italy</option>
											<option value="107">Jamaica</option>
											<option value="109">Japan</option>
											<option value="108">Jordan</option>
											<option value="120">Kazakhstan</option>
											<option value="110">Kenya</option>
											<option value="113">Kiribati</option>
											<option value="116">Korea, Democratic Peoples Republic of</option>
											<option value="117">Korea, Republic of</option>
											<option value="118">Kuwait</option>
											<option value="111">Kyrgyzstan</option>
											<option value="121">Lao Peoples Democratic Republic</option>
											<option value="130">Latvia</option>
											<option value="122">Lebanon</option>
											<option value="127">Lesotho</option>
											<option value="126">Liberia</option>
											<option value="131">Libyan Arab Jamahiriya</option>
											<option value="124">Liechtenstein</option>
											<option value="128">Lithuania</option>
											<option value="129">Luxembourg</option>
											<option value="141">Macao</option>
											<option value="137">Macedonia, the Former Yugoslav Republic of</option>
											<option value="135">Madagascar</option>
											<option value="149">Malawi</option>
											<option value="151">Malaysia</option>
											<option value="148">Maldives</option>
											<option value="138">Mali</option>
											<option value="146">Malta</option>
											<option value="136">Marshall Islands</option>
											<option value="143">Martinique</option>
											<option value="144">Mauritania</option>
											<option value="147">Mauritius</option>
											<option value="236">Mayotte</option>
											<option value="150">Mexico</option>
											<option value="71">Micronesia, Federated States of</option>
											<option value="134">Moldova, Republic of</option>
											<option value="133">Monaco</option>
											<option value="140">Mongolia</option>
											<option value="145">Montserrat</option>
											<option value="132">Morocco</option>
											<option value="152">Mozambique</option>
											<option value="139">Myanmar</option>
											<option value="153">Namibia</option>
											<option value="162">Nauru</option>
											<option value="161">Nepal</option>
											<option value="159">Netherlands</option>
											<option value="8">Netherlands Antilles</option>
											<option value="154">New Caledonia</option>
											<option value="164">New Zealand</option>
											<option value="158">Nicaragua</option>
											<option value="155">Niger</option>
											<option value="157">Nigeria</option>
											<option value="163">Niue</option>
											<option value="156">Norfolk Island</option>
											<option value="142">Northern Mariana Islands</option>
											<option value="160">Norway</option>
											<option value="165">Oman</option>
											<option value="171">Pakistan</option>
											<option value="178">Palau</option>
											<option value="176">Palestinian Territory, Occupied</option>
											<option value="166">Panama</option>
											<option value="169">Papua New Guinea</option>
											<option value="179">Paraguay</option>
											<option value="167">Peru</option>
											<option value="170">Philippines</option>
											<option value="174">Pitcairn</option>
											<option value="172">Poland</option>
											<option value="177">Portugal</option>
											<option value="175">Puerto Rico</option>
											<option value="180">Qatar</option>
											<option value="181">Reunion</option>
											<option value="182">Romania</option>
											<option value="183">Russian Federation</option>
											<option value="184">Rwanda</option>
											<option value="191">Saint Helena</option>
											<option value="115">Saint Kitts and Nevis</option>
											<option value="123">Saint Lucia</option>
											<option value="173">Saint Pierre and Miquelon</option>
											<option value="227">Saint Vincent and the Grenadines</option>
											<option value="234">Samoa</option>
											<option value="196">San Marino</option>
											<option value="200">Sao Tome and Principe</option>
											<option value="185">Saudi Arabia</option>
											<option value="197">Senegal</option>
											<option value="49">Serbia and Montenegro</option>
											<option value="187">Seychelles</option>
											<option value="195">Sierra Leone</option>
											<option value="190">Singapore</option>
											<option value="194">Slovakia</option>
											<option value="192">Slovenia</option>
											<option value="186">Solomon Islands</option>
											<option value="198">Somalia</option>
											<option value="237">South Africa</option>
											<option value="87">South Georgia and the South Sandwich Islands</option>
											<option value="66">Spain</option>
											<option value="125">Sri Lanka</option>
											<option value="188">Sudan</option>
											<option value="199">Suriname</option>
											<option value="193">Svalbard and Jan Mayen</option>
											<option value="203">Swaziland</option>
											<option value="189">Sweden</option>
											<option value="41">Switzerland</option>
											<option value="202">Syrian Arab Republic</option>
											<option value="218">Taiwan, Province of China</option>
											<option value="209">Tajikistan</option>
											<option value="219">Tanzania, United Republic of</option>
											<option value="208">Thailand</option>
											<option value="211">Timor-Leste</option>
											<option value="207">Togo</option>
											<option value="210">Tokelau</option>
											<option value="214">Tonga</option>
											<option value="216">Trinidad and Tobago</option>
											<option value="213">Tunisia</option>
											<option value="215">Turkey</option>
											<option value="212">Turkmenistan</option>
											<option value="204">Turks and Caicos Islands</option>
											<option value="217">Tuvalu</option>
											<option value="221">Uganda</option>
											<option value="220">Ukraine</option>
											<option value="2">United Arab Emirates</option>
											<option value="75">United Kingdom</option>
											<option value="223">United States</option>
											<option value="222">United States Minor Outlying Islands</option>
											<option value="224">Uruguay</option>
											<option value="225">Uzbekistan</option>
											<option value="232">Vanuatu</option>
											<option value="228">Venezuela</option>
											<option value="231">Viet Nam</option>
											<option value="229">Virgin Islands, British</option>
											<option value="230">Virgin Islands, U.s.</option>
											<option value="233">Wallis and Futuna</option>
											<option value="64">Western Sahara</option>
											<option value="235">Yemen</option>
											<option value="238">Zambia</option>
											<option value="239">Zimbabwe</option>

										</select>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Date</label>
										<input id="bookingDate" type="text" onkeydown="return false" autocomplete="off"
											class="form-control validate[required] datepicker"
											aria-describedby="emailHelp">
									</div>
								</div>

								<div class="form-group col-sm-6">
									<label for="inputState">
										Pick Up Location
									</label>
									<select id="ddlPickup" class="form-control">

										<optgroup label="Arabia"></optgroup>

										<option style="padding-left:15px" value="Arabia / Arabella"> Arabella </option>

										<option style="padding-left:15px" value="Arabia / Arabia "> Arabia </option>

										<option style="padding-left:15px" value="Arabia / Beirut"> Beirut </option>

										<option style="padding-left:15px" value="Arabia / El Palacio"> El Palacio
										</option>

										<option style="padding-left:15px" value="Arabia / Empire(Hotel)"> Empire(Hotel)
										</option>

										<option style="padding-left:15px" value="Arabia / Empire(Inn)"> Empire(Inn)
										</option>

										<option style="padding-left:15px" value="Arabia / Empire(Three corners)">
											Empire(Three corners) </option>

										<option style="padding-left:15px" value="Arabia / Geisum"> Geisum </option>

										<option style="padding-left:15px" value="Arabia / Hilton Plaza"> Hilton Plaza
										</option>

										<option style="padding-left:15px" value="Arabia / King Tut"> King Tut </option>

										<option style="padding-left:15px" value="Arabia / Montilion(Grand Azur)">
											Montilion(Grand Azur) </option>

										<option style="padding-left:15px" value="Arabia / Palma de Mirette"> Palma de
											Mirette </option>

										<option style="padding-left:15px" value="Arabia / Sahara"> Sahara </option>

										<option style="padding-left:15px" value="Arabia / Sand Beach"> Sand Beach
										</option>

										<option style="padding-left:15px" value="Arabia / Sea Hourse"> Sea Hourse
										</option>

										<option style="padding-left:15px" value="Arabia / Sea Star Borevage"> Sea Star
											Borevage </option>

										<option style="padding-left:15px" value="Arabia / Shedwan"> Shedwan </option>

										<option style="padding-left:15px" value="Arabia / Zahabia"> Zahabia </option>


										<optgroup label="Gouna and Ahyaa"></optgroup>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Ali Pacha"> Ali Pacha
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Areena Inn"> Areena
											Inn </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Calimera"> Calimera
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Captain" s=""
											inn'=""> Captain's Inn </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Club Med"> Club Med
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Dawar el Omda"> Dawar
											el Omda </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Down Town"> Down Town
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Fanader"> Fanader
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Festival Garden">
											Festival Garden </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Festival Riviera">
											Festival Riviera </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Movenpick"> Movenpick
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Nefertiti"> Nefertiti
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Oasis"> Oasis
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Ocean View"> Ocean
											View </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Palma Beach"> Palma
											Beach </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Panorama"> Panorama
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Panorama"> Panorama
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Rihana"> Rihana
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Sheraton Miramar">
											Sheraton Miramar </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / South Golf"> South
											Golf </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / South Marine"> South
											Marine </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Steigenberger Golf">
											Steigenberger Golf </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Sultan Bay"> Sultan
											Bay </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Sultana"> Sultana
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Sunny Beach"> Sunny
											Beach </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / Turtil Inn"> Turtil
											Inn </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / West Golf"> West Golf
										</option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / White Golf"> White
											Golf </option>

										<option style="padding-left:15px" value="Gouna and Ahyaa / White Villa"> White
											Villa </option>


										<optgroup label="Safaga and Makadi"></optgroup>

										<option style="padding-left:15px" value="Safaga and Makadi / Aldiana"> Aldiana
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / Amira"> Amira
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / Amwag Safaga">
											Amwag Safaga </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Breaker Abu Soma">
											Breaker Abu Soma </option>

										<option style="padding-left:15px"
											value="Safaga and Makadi / Carlos Makadi(serenity)"> Carlos Makadi(serenity)
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / Carreibean Soma">
											Carreibean Soma </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Club Azur"> Club
											Azur </option>

										<option style="padding-left:15px" value="Safaga and Makadi / El Nabila Makadi">
											El Nabila Makadi </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Emperial Safaga">
											Emperial Safaga </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Fantasia"> Fantasia
										</option>

										<option style="padding-left:15px"
											value="Safaga and Makadi / Fort Arabesque Makadi"> Fort Arabesque Makadi
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / Grand Makadi">
											Grand Makadi </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Harmony"> Harmony
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / Holiday Inn">
											Holiday Inn </option>

										<option style="padding-left:15px"
											value="Safaga and Makadi / Intercontinental Soma"> Intercontinental Soma
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / kampnski"> kampnski
										</option>

										<option style="padding-left:15px"
											value="Safaga and Makadi / La Residence de Cascades"> La Residence de
											Cascades </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Lotus Bay"> Lotus
											Bay </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Magic Life"> Magic
											Life </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Beach">
											Makadi Beach </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Club">
											Makadi Club </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Golf">
											Makadi Golf </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Marine">
											Makadi Marine </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Oasis">
											Makadi Oasis </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi palace">
											Makadi palace </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Saraya">
											Makadi Saraya </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Sensimar">
											Makadi Sensimar </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Makadi Star">
											Makadi Star </option>

										<option style="padding-left:15px"
											value="Safaga and Makadi / Makadi Sun(Solimar)"> Makadi Sun(Solimar)
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / Minaville Safaga">
											Minaville Safaga </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Nefertary">
											Nefertary </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Paradise Safaga">
											Paradise Safaga </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Prima Life Makadi">
											Prima Life Makadi </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Robenson Club">
											Robenson Club </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Royal Azur"> Royal
											Azur </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Shams Safaga">
											Shams Safaga </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Sheraton Soma">
											Sheraton Soma </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Stella Makadi">
											Stella Makadi </option>

										<option style="padding-left:15px"
											value="Safaga and Makadi / Sun Rise Royal Makadi"> Sun Rise Royal Makadi
										</option>

										<option style="padding-left:15px" value="Safaga and Makadi / Tia Heights"> Tia
											Heights </option>

										<option style="padding-left:15px" value="Safaga and Makadi / Yara Beach"> Yara
											Beach </option>


										<optgroup label="Sheraton Rd and Hadaba"></optgroup>

										<option style="padding-left:15px"
											value="Sheraton Rd and Hadaba /  Sea Garden HTL"> Sea Garden HTL </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Alyaa"> Alyaa
										</option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Aqua Fun">
											Aqua Fun </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Bella Vista">
											Bella Vista </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Eiffel">
											Eiffel </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / El Tabia"> El
											Tabia </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Elysee">
											Elysee </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Fantasia">
											Fantasia </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Golden Sun">
											Golden Sun </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Golf"> Golf
										</option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / La Perla"> La
											Perla </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Le Pacha"> Le
											Pacha </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Le Roi"> Le
											Roi </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Marriott">
											Marriott </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Mina Mark">
											Mina Mark </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Moon Valley">
											Moon Valley </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Ramoza">
											Ramoza </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Regina">
											Regina </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Roma"> Roma
										</option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Safir"> Safir
										</option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Sea Garden">
											Sea Garden </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Seagull New">
											Seagull New </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Seagull Old">
											Seagull Old </option>

										<option style="padding-left:15px"
											value="Sheraton Rd and Hadaba / Sun Rise Holidays"> Sun Rise Holidays
										</option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Sun&amp;Sea">
											Sun&amp;Sea </option>

										<option style="padding-left:15px" value="Sheraton Rd and Hadaba / Waves"> Waves
										</option>


										<optgroup label="Villages and Sahl Hashish"></optgroup>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Alf Lela wa Lela"> Alf Lela wa Lela
										</option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Aqua Marine , blue marine"> Aqua Marine ,
											blue marine </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Citadel Azur"> Citadel Azur </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Coral Beach"> Coral Beach </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Dana Beach"> Dana Beach </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Desert Rose"> Desert Rose </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Golden Five"> Golden Five </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Hilton Long Beach"> Hilton Long Beach
										</option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Jungle Park"> Jungle Park </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Lilly Land"> Lilly Land </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Melia Pharon(Sonesta)"> Melia
											Pharon(Sonesta) </option>

										<option style="padding-left:15px" value="Villages and Sahl Hashish / Oberoi">
											Oberoi </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Old Palace"> Old Palace </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Premier la Reve"> Premier la Reve
										</option>

										<option style="padding-left:15px" value="Villages and Sahl Hashish / Pyramisa">
											Pyramisa </option>

										<option style="padding-left:15px" value="Villages and Sahl Hashish / Remyvera">
											Remyvera </option>

										<option style="padding-left:15px" value="Villages and Sahl Hashish / Romance">
											Romance </option>

										<option style="padding-left:15px" value="Villages and Sahl Hashish / Sapphire">
											Sapphire </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Sentido crystal bay"> Sentido crystal bay
										</option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Sun Rise Beach"> Sun Rise Beach </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Sun Rise Garden beach"> Sun Rise Garden
											beach </option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Sun Rise Mamlouk"> Sun Rise Mamlouk
										</option>

										<option style="padding-left:15px"
											value="Villages and Sahl Hashish / Titanic Beach , palace"> Titanic Beach ,
											palace </option>


										<optgroup label="Walking Area"></optgroup>

										<option style="padding-left:15px" value="Walking Area / Albatros Beach">
											Albatros Beach </option>

										<option style="padding-left:15px" value="Walking Area / Albatros Palace">
											Albatros Palace </option>

										<option style="padding-left:15px" value="Walking Area / Albatros Resort">
											Albatros Resort </option>

										<option style="padding-left:15px" value="Walking Area / Ali Baba"> Ali Baba
										</option>

										<option style="padding-left:15px" value="Walking Area / Alla el Din"> Alla el
											Din </option>

										<option style="padding-left:15px" value="Walking Area / Aqua Blue"> Aqua Blue
										</option>

										<option style="padding-left:15px" value="Walking Area / Aqua Vista"> Aqua Vista
										</option>

										<option style="padding-left:15px" value="Walking Area / Charm Life"> Charm Life
										</option>

										<option style="padding-left:15px" value="Walking Area / Elmashrabia">
											Elmashrabia </option>

										<option style="padding-left:15px" value="Walking Area / Elsamaka Beach">
											Elsamaka Beach </option>

										<option style="padding-left:15px" value="Walking Area / Elsamaka Resort">
											Elsamaka Resort </option>

										<option style="padding-left:15px" value="Walking Area / Giftun"> Giftun
										</option>

										<option style="padding-left:15px" value="Walking Area / Grand Hotel Beach">
											Grand Hotel Beach </option>

										<option style="padding-left:15px" value="Walking Area / Grand Hotel Resort">
											Grand Hotel Resort </option>

										<option style="padding-left:15px" value="Walking Area / Grand Plaza Beach">
											Grand Plaza Beach </option>

										<option style="padding-left:15px" value="Walking Area / Grand Plaza Resort">
											Grand Plaza Resort </option>

										<option style="padding-left:15px" value="Walking Area / Hilton Resort"> Hilton
											Resort </option>

										<option style="padding-left:15px" value="Walking Area / Host Mark"> Host Mark
										</option>

										<option style="padding-left:15px" value="Walking Area / Hour Palace"> Hour
											Palace </option>

										<option style="padding-left:15px" value="Walking Area / Jasmine Palace"> Jasmine
											Palace </option>

										<option style="padding-left:15px" value="Walking Area / Jasmine v."> Jasmine v.
										</option>

										<option style="padding-left:15px" value="Walking Area / Khalijia"> Khalijia
										</option>

										<option style="padding-left:15px" value="Walking Area / Magawish"> Magawish
										</option>

										<option style="padding-left:15px" value="Walking Area / Marlin Inn"> Marlin Inn
										</option>

										<option style="padding-left:15px" value="Walking Area / Mirage New Hawai">
											Mirage New Hawai </option>

										<option style="padding-left:15px" value="Walking Area / Movenbic Hurghada">
											Movenbic Hurghada </option>

										<option style="padding-left:15px" value="Walking Area / Old Vic"> Old Vic
										</option>

										<option style="padding-left:15px" value="Walking Area / Princess"> Princess
										</option>

										<option style="padding-left:15px" value="Walking Area / Pyramisa Blue Lagoon">
											Pyramisa Blue Lagoon </option>

										<option style="padding-left:15px" value="Walking Area / Royal Palace"> Royal
											Palace </option>

										<option style="padding-left:15px" value="Walking Area / Santa Maria"> Santa
											Maria </option>

										<option style="padding-left:15px" value="Walking Area / Sindbad Beach"> Sindbad
											Beach </option>

										<option style="padding-left:15px" value="Walking Area / Sindbad Resort"> Sindbad
											Resort </option>

										<option style="padding-left:15px" value="Walking Area / Siva"> Siva </option>

										<option style="padding-left:15px" value="Walking Area / Sofitel- Mercure">
											Sofitel- Mercure </option>

										<option style="padding-left:15px" value="Walking Area / Steigenberger Beach">
											Steigenberger Beach </option>

										<option style="padding-left:15px" value="Walking Area / Steigenberger Magic">
											Steigenberger Magic </option>

										<option style="padding-left:15px" value="Walking Area / Sultan Beach"> Sultan
											Beach </option>

										<option style="padding-left:15px" value="Walking Area / Titanic Aqua"> Titanic
											Aqua </option>


									</select>
								</div>



							</div>


							<div class="row">
									<div class="col-md-12 mar2" style="text-align: center;">
											<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" aria-expanded="false">
														<img src="images/earth.svg" alt="earth">
														<h3>Foreigners</h3>
													</a>
													<a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" aria-expanded="true">
														<img src="images/egypt.svg" class="egypt-icon" alt="egypt"><h3>Residents</h3>
													</a>
												</div>
											</div>
								<div class="col-md-12 col-sm-12 booking-box mar2">

									<div class="">
										<div class="row">
											<h2 class="col-sm-12"> booking</h2>
											<div class="row no-gutters content">
												<div class="col-sm-3 col-md-3 m-auto pb-sm-0 pb-2 col-xs-12">
													<h3>Arabs &amp; Foreigners
													</h3>
												</div>
												<div class="col-md-2 col-sm-2 col-xs-6">
														<h4 class="mar2">Adults</h4>
														<h4 class="mar2">Children
															</h4>
														<h4 class="mar2">Infants</h4>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-6">
															<h4  class="mar2">300 USD</h4>
															<h4 class="mar2">15 USD</h4>
															<h4 class="mar2">0 USD</h4>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-6 ">
															
																	  <input id="demo1" type="text" value="0" class="dollar-spin comma-format ">  
																	<input id="demo12" type="text" value="0" class="dollar-spin comma-format  ">  
																	<input id="demo13" type="text" value="0" class="dollar-spin comma-format ">  
																	
															</div>
															<div class="col-md-2 col-sm-2 col-xs-6">
																	<h4 class="mar2">0 USD</h4>
																	<h4 class="mar2">0 USD</h4>
																	<h4 class="mar2">0 USD</h4>
																</div>
									
											</div>
										</div>
									</div>


									<!-- 2 -->
<br>

<div class="mar2 ">
		<div class="row">
			<h2 class="col-sm-12"> Swim with us</h2>
			<div class="row no-gutters content">
				<div class="col-sm-3 col-md-3 m-auto pb-sm-0 pb-2 col-xs-12">
					<h3>Arabs &amp; Foreigners
					</h3>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6">
						<h4 class="mar2">Adults (10 Mins)</h4>
						<h4 class="mar2">Adults (5 Mins)
							</h4>
						<h4 class="mar2">Children (10 Mins)</h4>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6">
							<h4  class="mar2">90 USD
								</h4>
							<h4 class="mar2">60 USD</h4>
							<h4 class="mar2">90 USD</h4>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 ">
							
									  <input id="demo11" type="text" value="0" class="dollar-spin comma-format ">  
									<input id="demo122" type="text" value="0" class="dollar-spin comma-format  ">  
									<input id="demo133" type="text" value="0" class="dollar-spin comma-format ">  
									
							</div>
							<div class="col-md-2 col-sm-2 col-xs-6">
									<h4 class="mar2">0 USD</h4>
									<h4 class="mar2">0 USD</h4>
									<h4 class="mar2">0 USD</h4>
								</div>
	
			</div>
		</div>
	</div>
	<!-- 3 -->
	<br>

<div class="mar2 ">
		<div class="row">
			<h2 class="col-sm-12"> Therapy with us</h2>
			<div class="row no-gutters content">
				<div class="col-sm-3 col-md-3 m-auto pb-sm-0 pb-2 col-xs-12">
					<h3>Arabs &amp; Foreigners
					</h3>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6">
						<h4 class="mar2">Therapy</h4>
						
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6">
							<h4  class="mar2">90 USD
								</h4>
							
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 ">
							
									  <input id="demo111" type="text" value="0" class="dollar-spin comma-format ">  
									
						
									
								 
									
							</div>
							<div class="col-md-2 col-sm-2 col-xs-6">
									<h4 class="mar2">0 USD</h4>
								
								</div>
	
			</div>
		</div>
	</div>
		<!-- 3 -->
		<br>

		<div class="mar2 ">
				<div class="row">
					<h2 class="col-sm-12"> Photo session with us</h2>
					<div class="row no-gutters content">
						<div class="col-sm-3 col-md-3 m-auto pb-sm-0 pb-2 col-xs-12">
							<h3>Arabs &amp; Foreigners
							</h3>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-6">
								<h4 class="mar2">Session</h4>
								
							</div>
							<div class="col-md-2 col-sm-2 col-xs-6">
									<h4  class="mar2">90 USD
										</h4>
									
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6 ">
									
											  <input id="demo222" type="text" value="0" class="dollar-spin comma-format ">  
											
								
											
										 
											
									</div>
									<div class="col-md-2 col-sm-2 col-xs-6">
											<h4 class="mar2">0 USD</h4>
										
										</div>
			
					</div>
				</div>
			</div>

		
								</div>
								
						
								<div class="mar2">
								
								<a id="btnCheckout" class="btn btn--booking mar2 " style="margin-top: 26px;">sent now</a>
								
								<div class="custom-control  radio-terms booking-terms mar2" style="margin-top: 26px;">
										<label for="chkResidentsTerms" class="check--box">
											<input type="checkbox" id="chkResidentsTerms"> 
											<span class="checkmark"></span></label> 
											<p class="terms-conditons">I agree on the terms and conditions
											
										</div>
							
							</div>
							</div>
						</div>


						<!-- end  -->
        @push('bars')
            @include('client.layouts.rightbar.basketOffer')
            @include('client.layouts.rightbar.childPolicies')
        @endpush

@endsection