<!DOCTYPE html>
<html>

    <head>
        <title>Signup form</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <form action="registration.php"  method="post" enctype="multipart/form-data" style="border: 1px solid #ccc">
            <div class="container">
                <h1>Sign Up</h1>
                <br>
                <div class="namecol">
                    <input type="text" placeholder="First Name" name="fname" required />
                    <input type="text" placeholder="Last Name" name="lname" required />
                </div>

                <div class="namecol">
                    <input type="text" placeholder="UserName" name="username" required />
                    <input type="text" placeholder="Email" name="email" required />
                </div>
                <div class="namecol">
                    <input type="text" placeholder="Mobile Number" name="mnumber" required />
                </div>
                <div class="namecol">
                    <select name="location">
                        <option>Select Location</option>
                        <option>Delhi</option>
                        <option>Mumbai</option>
                        <option>Punjab</option>
                        <option>Goa</option>

                    </select>
                </div>
                <div class="namecol">
                    <input type="password" placeholder="Enter Password" name="psw" required />
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required />
                </div>

                <div>
                    <H3 class="startas">
                        Start as:
                    </H3>
                    <br>
                    <div class="cbcolumber">
                        <div class="cbDiv">
                            <input type="radio" value="None" id="roundedone" name="check" />
                            <label class="cbName" for="roundedone">Dentist</label>
                        </div>
                        <div class="cbDiv">
                            <input type="radio" value="None" id="roundedTwo" name="check" />
                            <label class="cbName" for="roundedTwo">Patient</label>
                        </div>
                    </div>
                    <div class="namecol1">
                        <input type="text" placeholder="Display Name" name="dname" />
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px" />
                        I agree with all terms and conditions available with the De9to website.
                    </label>

                    <div>
                        <button type="submit" class="signupbtn">Sign Up Now</button>
                    </div>

                </div>

            </div>
            </div>
        </form>
        <h6>Divyashwar Raj - clixacom@gmail.com / WhatsApp +91-9504358240</h6>
    </body>

</html>