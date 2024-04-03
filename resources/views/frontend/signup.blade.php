<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Get Job Paid</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body id="signup">


    <!-- Navbar part Start-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" class="img-fluid w-100" alt="">
            </a>
            <div class="d-flex top-btn top-btn2 d-lg-none">
                <a href="#">Login</a>
                <a class="bg" href="#">Sign Up</a>
            </div>
            <button class="navbar-toggler" type="button"  onclick="openNav()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Share & Earn</a>
                    </li>
                </ul>
                <div class="d-flex top-btn">
                    <a href="#">Login</a>
                    <a class="bg" href="#">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar part End-->


    <!-- Mobile Side Menu part End-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <!-- Mobile Side Menu part End-->



    <!-- SignUp part Start-->
    <section class="auth-section login_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-5">
                    <div class="form-content">
                        <div class="auth_header">
                            <div class="auth_title">
                                <h5>SIGN UP</h5>
                            </div>
                        </div>

                        <form action="https://gigclickers.com/store" method="POST" data-parsley-validate="" name="editForm" class="row">
                            <input type="hidden" name="_token" value="Uc28XoKaEJgjrGcCwI1yAaq3lcdNDRaZMTa42oRL">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="name">Full Name<span>*</span></label>
                                    <input type="text" id="name" class="form-control " name="name" value="" placeholder="Name" required>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="username">Username<span>*</span></label>
                                    <input type="text" id="username" class="form-control " name="username" value="" pattern="[a-zA-Z0-9]*" title="Only text and digits are allowed" placeholder="User Name" required>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="email">Email<span>*</span></label>
                                    <input type="email" id="email" class="form-control " name="email" value="" placeholder="Email Address" required>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="password">Password<span>*</span></label>
                                    <input type="password" id="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password must contain at least one lowercase letter, one uppercase letter, one number, one special character, and be at least 8 characters long" oninput="checkPasswordRequirements(this.value)" required class="form-control  " value="">
                                    <div class="text-end" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <p id="passwordRequirements"></p>
                            </div>
                            <!-- col end -->
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="confirm-password">Confirm Password<span>*</span></label>
                                    <input type="password" name="confirm-password" id="confirm-password" class="form-control  " value="" placeholder="Confirm Password" required>
                                    <div class="text-end" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>

                            </div>
                            <!-- col-end -->
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="country_id">Country<span>*</span></label>
                                    <select name="country_id" class="form-control " required>
                                        <option value="23">Afghanistan</option>
                                        <option value="24">Armenia</option>
                                        <option value="25">Azerbaijan</option>
                                        <option value="26">Bahrain</option>
                                        <option value="27" selected>Bangladesh</option>
                                        <option value="28">Bhutan</option>
                                        <option value="29">Brunei</option>
                                        <option value="30">Cambodia</option>
                                        <option value="31">China</option>
                                        <option value="32">Cyprus</option>
                                        <option value="33">East Timor</option>
                                        <option value="34">Georgia</option>
                                        <option value="35">India</option>
                                        <option value="36">Indonesia</option>
                                        <option value="37">Iran</option>
                                        <option value="38">Iraq</option>
                                        <option value="39">Israel</option>
                                        <option value="40">Japan</option>
                                        <option value="41">Jordan</option>
                                        <option value="42">Kazakhstan</option>
                                        <option value="43">North Korea</option>
                                        <option value="44">South Korea</option>
                                        <option value="45">Kuwait</option>
                                        <option value="46">Kyrgyzstan</option>
                                        <option value="47">Laos</option>
                                        <option value="48">Lebanon</option>
                                        <option value="49">Malaysia</option>
                                        <option value="50">Maldives</option>
                                        <option value="51">Mongolia</option>
                                        <option value="52">Myanmar</option>
                                        <option value="53">Nepal</option>
                                        <option value="54">Oman</option>
                                        <option value="55">Pakistan</option>
                                        <option value="56">Philippines</option>
                                        <option value="57">Qatar</option>
                                        <option value="58">Saudi Arabia</option>
                                        <option value="59">Singapore</option>
                                        <option value="60">Sri Lanka</option>
                                        <option value="61">Syria</option>
                                        <option value="62">Taiwan</option>
                                        <option value="63">Tajikistan</option>
                                        <option value="64">Thailand</option>
                                        <option value="65">Turkey</option>
                                        <option value="66">Turkmenistan</option>
                                        <option value="67">United Arab Emirates</option>
                                        <option value="68">Uzbekistan</option>
                                        <option value="69">Vietnam</option>
                                        <option value="70">Yemen</option>
                                        <option value="71">Albania</option>
                                        <option value="72">Andorra</option>
                                        <option value="73">Armenia</option>
                                        <option value="74">Austria</option>
                                        <option value="75">Azerbaijan</option>
                                        <option value="76">Belarus</option>
                                        <option value="77">Belgium</option>
                                        <option value="78">Bosnia and Herzegovina</option>
                                        <option value="79">Bulgaria</option>
                                        <option value="80">Croatia</option>
                                        <option value="81">Cyprus</option>
                                        <option value="82">Czech Republic</option>
                                        <option value="83">Denmark</option>
                                        <option value="84">Estonia</option>
                                        <option value="85">Finland</option>
                                        <option value="86">France</option>
                                        <option value="87">Georgia</option>
                                        <option value="88">Germany</option>
                                        <option value="89">Greece</option>
                                        <option value="90">Hungary</option>
                                        <option value="91">Iceland</option>
                                        <option value="92">Ireland</option>
                                        <option value="93">Italy</option>
                                        <option value="94">Kazakhstan</option>
                                        <option value="95">Latvia</option>
                                        <option value="96">Liechtenstein</option>
                                        <option value="97">Lithuania</option>
                                        <option value="98">Luxembourg</option>
                                        <option value="99">Macedonia</option>
                                        <option value="100">Malta</option>
                                        <option value="101">Moldova</option>
                                        <option value="102">Monaco</option>
                                        <option value="103">Montenegro</option>
                                        <option value="104">Netherlands</option>
                                        <option value="105">Norway</option>
                                        <option value="106">Poland</option>
                                        <option value="107">Portugal</option>
                                        <option value="108">Romania</option>
                                        <option value="109">Russia</option>
                                        <option value="110">San Marino</option>
                                        <option value="111">Serbia</option>
                                        <option value="112">Slovakia</option>
                                        <option value="113">Slovenia</option>
                                        <option value="114">Spain</option>
                                        <option value="115">Sweden</option>
                                        <option value="116">Switzerland</option>
                                        <option value="117">Turkey</option>
                                        <option value="118">Ukraine</option>
                                        <option value="119">United Kingdom</option>
                                        <option value="120">Vatican City</option>
                                        <option value="121">Kosovo</option>
                                        <option value="122">Algeria</option>
                                        <option value="123">Angola</option>
                                        <option value="124">Benin</option>
                                        <option value="125">Botswana</option>
                                        <option value="126">Burkina Faso</option>
                                        <option value="127">Burundi</option>
                                        <option value="128">Cameroon</option>
                                        <option value="129">Cape Verde</option>
                                        <option value="130">Central African Republic</option>
                                        <option value="131">Chad</option>
                                        <option value="132">Comoros</option>
                                        <option value="133">Congo</option>
                                        <option value="134">Cote D&#039;Ivoire (Ivory Coast)</option>
                                        <option value="135">Djibouti</option>
                                        <option value="136">Egypt</option>
                                        <option value="137">Equatorial Guinea</option>
                                        <option value="138">Eritrea</option>
                                        <option value="139">Ethiopia</option>
                                        <option value="140">Gabon</option>
                                        <option value="141">Gambia</option>
                                        <option value="142">Ghana</option>
                                        <option value="143">Guinea</option>
                                        <option value="144">Guinea-Bissau</option>
                                        <option value="145">Kenya</option>
                                        <option value="146">Lesotho</option>
                                        <option value="147">Liberia</option>
                                        <option value="148">Libya</option>
                                        <option value="149">Madagascar</option>
                                        <option value="150">Malawi</option>
                                        <option value="151">Mali</option>
                                        <option value="152">Mauritania</option>
                                        <option value="153">Mauritius</option>
                                        <option value="154">Morocco</option>
                                        <option value="155">Mozambique</option>
                                        <option value="156">Namibia</option>
                                        <option value="157">Niger</option>
                                        <option value="158">Nigeria</option>
                                        <option value="159">Rwanda</option>
                                        <option value="160">São Tomé and Príncipe</option>
                                        <option value="161">Senegal</option>
                                        <option value="162">Seychelles</option>
                                        <option value="163">Sierra Leone</option>
                                        <option value="164">Somalia</option>
                                        <option value="165">South Africa</option>
                                        <option value="166">South Sudan</option>
                                        <option value="167">Sudan</option>
                                        <option value="168">Tanzania</option>
                                        <option value="169">Togo</option>
                                        <option value="170">Tunisia</option>
                                        <option value="171">Uganda</option>
                                        <option value="172">Zambia</option>
                                        <option value="173">Zimbabwe</option>
                                        <option value="174">Australia</option>
                                        <option value="175">Fiji Islands</option>
                                        <option value="176">Kiribati</option>
                                        <option value="177">Marshall Islands</option>
                                        <option value="178">Micronesia</option>
                                        <option value="179">Nauru</option>
                                        <option value="180">New Zealand</option>
                                        <option value="181">Palau</option>
                                        <option value="182">Papua new Guinea</option>
                                        <option value="183">Samoa</option>
                                        <option value="184">Solomon Islands</option>
                                        <option value="185">Tonga</option>
                                        <option value="186">Tuvalu</option>
                                        <option value="187">Vanuatu</option>
                                        <option value="188">Antigua And Barbuda</option>
                                        <option value="189">The Bahamas</option>
                                        <option value="190">Barbados</option>
                                        <option value="191">Belize</option>
                                        <option value="192">Canada</option>
                                        <option value="193">Costa Rica</option>
                                        <option value="194">Cuba</option>
                                        <option value="195">Dominica</option>
                                        <option value="196">Dominican Republic</option>
                                        <option value="197">El Salvador</option>
                                        <option value="198">Grenada</option>
                                        <option value="199">Guatemala</option>
                                        <option value="200">Haiti</option>
                                        <option value="201">Honduras</option>
                                        <option value="202">Jamaica</option>
                                        <option value="203">Mexico</option>
                                        <option value="204">Nicaragua</option>
                                        <option value="205">Panama</option>
                                        <option value="206">Saint Kitts And Nevis</option>
                                        <option value="207">Saint Lucia</option>
                                        <option value="208">Saint Vincent</option>
                                        <option value="209">Trinidad And Tobago</option>
                                        <option value="210">United States</option>
                                        <option value="211">Argentina</option>
                                        <option value="212">Bolivia</option>
                                        <option value="213">Brazil</option>
                                        <option value="214">Chile</option>
                                        <option value="215">Colombia</option>
                                        <option value="216">Ecuador</option>
                                        <option value="217">Guyana</option>
                                        <option value="218">Paraguay</option>
                                        <option value="219">Peru</option>
                                        <option value="220">Suriname</option>
                                        <option value="221">Uruguay</option>
                                        <option value="222">Venezuela</option>
                                    </select>
                                </div>
                            </div>

                            <!-- col-end -->
                            <div class="col-sm-12 mt-3">
                                <div class="form-group mb-3">
                                    <label for="termsofservice"><input type="checkbox" id="termsofservice" onchange="toggleSubmitButton(this)" class="form-check-inline" name="termsofservice">I agree to Gigclickers <a href="#" target="_blank" class="terms_condition">Terms & Condition</a> and <a href="#" target="_blank" class="terms_condition">Privacy Policy</a></label>

                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-sm-12">
                                <button class="submit-btn" id="submitButton" disabled>Register Now</button>
                            </div>

                            <!-- col-end -->
                        </form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="no_info">
                                    <div class="no_regi">
                                        <p>Aready Have an account? <a href="#">Log in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- SignUp part End-->





    <!-- Footer part Start-->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer-about">
                            <a href="index.html">
                                <img src="images/logo.png" alt="" />
                            </a>
                            <div class="copyright d-none d-lg-block">
                                <p>&copy; 2024 gigclickers.com. All Rights Reserved.</p>
                            </div>
                        </div>

                    </div>
                    <!-- col end -->
                    <div class="col-sm-3">
                        <h2 class="footer_title">About GigClickers</h2>
                        <div class="footer-menu">
                            <ul>

                                <li><a href="#"><span>About Us</span></a></li>

                                <li><a href="#"><span>Privacy Policy</span></a></li>

                                <li><a href="#"><span>Terms &amp; Conditions</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <h2 class="footer_title">Agreement</h2>
                        <div class="footer-menu">
                            <ul>

                                <li><a href="#"><span>Microjob Marketplace</span></a></li>

                                <li><a href="#"><span>Deal Marketplace</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h2 class="footer_title">Social Media</h2>
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#" target="_blank" style="background:#f54242">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" style="background:#0792e9">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" style="background:#ff0000">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" style="background:#1ccef2">
                                        <i class="fa-brands fa-telegram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="copyright mobile-copyright d-lg-none">
                            <p>&copy; 2024 gigclickers.com. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer part End-->





    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>

</html>
