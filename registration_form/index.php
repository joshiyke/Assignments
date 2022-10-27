<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Registration Form</title>
    <link type="text/css" rel="stylesheet" href="reg_page.css">
    <script src="https://kit.fontawesome.com/f96eb84820.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="container">
            <div class="left_section"></div>

            <div class="right_section">
                <header>
                    <h1>Sign <span class="styled">Up</span></h1>
                </header>
                <div class="form">
                    <form method="post" action="user_data.php">
                        <label for="fname">First Name</label><br>
                        <input type="text" id="fname" placeholder="Your First Name" minlength="3" maxlength="12"
                            required name="fname"><br>
                        <label for="fname">Last Name</label><br>
                        <input type="text" id="lname" placeholder="Your Last Name" minlength="3" maxlength="12"
                            required name="lname"><br>
                        <label for="mail">Email</label><br>
                        <input type="email" id="email" placeholder="grouparray@grouparray.com" required name="email"><br>
                        <label for="date_of_birth">Date of birth</label><br>
                        <input type="date" id="date_of_birth" placeholder="DOB" required name="date_of_birth"><br>
                        <label for="gender">Gender</label><br>
                        <select id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Prefer Not to say</option>
                        </select><br>
                        <label for="country">Country</label><br>
                        <select id="country" name="country">
                            <option>Nigeria</option>
                            <option>Ghana</option>
                            <option>USA</option>
                            <option>Souht Africa</option>
                            <option>Cameroun</option>
                            <option>China</option>
                            <option>Chad</option>
                            <option>Niger</option>
                            <option>Kenya</option>
                            <option>Uganda</option>
                            <option>Egypt</option>
                            <option>Morrocca</option>
                            <option>UK</option>
                            <option>Germany</option>
                            <option>Fugitive</option>
                        </select><br>
                        
                        <input type="checkbox">I agree to <span class="styled" required><a href="##">Platform
                                Terms</a></span> of
                        service and
                        <span class="styled"><a href="#">Privacy Policy</a></span>
                        <br><br>
                        <button type="submit" name="submit" id="submit">Create account</button>
                        <p>Already have an account? <span class="styled"><a href="reg_login.html">Login</a></span></p>
                    </form>
                </div>
            </div>

        </div>

    </main>

</body>

</html>