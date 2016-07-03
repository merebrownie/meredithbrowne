<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>The Stone Center for Counseling & Leadership</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/script.js"></script>
</head>

<body>
    <div id="wrap">
        <?php include '../view/header.php'; ?>
         <div id="contact">
         <div class="right">
            <h3>Location</h3>
            <p>
                1106 Harding Place<br>
                Charlotte, NC 28203<br>
                P: 704.665.0065<br>
                F: 704.335.4001<br>
            </p>
            <h3>Questions or Comments?</h3>
            <form name = "commentForm" onsubmit="return validateCommentForm()">
                <textarea class="required" name="comment"></textarea><br>
                <label for="contactName">name</label>
                    <input type="text" id="contactName" name="contactName" class="text"><br>
                <label for="emailAddress">email</label>
                    <input type="email" id="emailAddress" name="email" class="text"><br>
                <label for="phone">phone</label>
                    <input type="tel" id="phone" name="phone" class="text"><br>
                <input type="submit" value="Submit">
            </form>
            <p class="disclosure">
            Please do not leave urgent messages on this website. <br>The request appointment feature is for non-urgent matters. IF YOU ARE EXPERIENCING A LIFE THREATENING EMERGENCY, PLEASE CALL 911 OR GO TO THE NEAREST EMERGENCY ROOM.
                    <br>For non-urgent matters, the information you provide is covered by the Electronic Communications Privacy Act, 18 U.S.C. 2510-2521, and will remain confidential.
          </p>
            
        </div>
         
         <div class="left">
                <h2>Request an Appointment:</h2>
                <span>*Bolded fields are required</span>
            <form name="apptRequest" onsubmit="return validateForm()">
                <label class="required" for="self">Are you requesting this appointment for yourself?</label>
                    <label class="radio"><input type="radio" id="self" name="self" value="yes">Yes</label>
                    <label class="radio"><input type="radio" name="self" value="no">No</label><br>
                <label class="required" for="fullName">Your Full Name</label>
                    <input class="text" type="text" id="fullName" name="fullName"><br>
                <label for="relationship">Relationship to Client</label>
                    <input class="text" type="text" id="relationship" name="relationship"><br>
                <label class="required" for="email">Email</label>
                    <input class="text" type="email" id="email" name="email"><br>
                <label for="clientName" id="clientNameLabel">Client's Full Name (if different)</label>
                    <input class="text" type="text" id="clientName" name="clientName"><br>
                <label class="required" for="gender">Gender</label>
                    <label class="radio"><input type="radio" id="gender" name="gender" value="Male">Male</label>
                    <label class="radio"><input type="radio" name="gender" value="Female">Female</label><br>
                <label class="required" for="DOB">Date of Birth</label>
                    <input class="text" type="date" id="DOB" name="DOB">
                <label class="required" for="address">Street Address</label>
                    <input class="text" type="text" id="address" name="address">
                <label for="city">City</label>
                    <input class="text" type="text" id="city" name="city">
                <label for="state">State</label>
                    <input class="text" type="text" id="state" name="state" value="North Carolina">
                <label class="required" for="zip">Zip Code</label>
                    <input class="text" type="text" id="zip" name="zip">
                <label class="required" for="primTel">Primary Phone #</label>
                    <input class="text" type="tel" id="primTel" name="primTel">
                <label for="altTel">Alternate Phone #</label>
                    <input class="text" type="tel" id="altTel" name="altTel">
                <label for="insCo">Insurance Company</label>
                    <input class="text" type="text" id="insCo" name="insCo">
                <label for="insParty">Insured Party</label>
                    <input class="text" type="text" id="insParty" name="insParty">
                <label for="insDOB">Insured Party's Date of Birth</label>
                    <input class="text" type="date" id="insDOB" name="insDOB">
                <label for="insID">ID Number</label>
                    <input class="text" type="text" id="insID" name="insID">
                <label class="required" for="availability">Availability</label>
                    <input class="text" type="text" id="availability" name="availability">
                <label class="required" for="reason">Reason for Seeking Counseling</label>
                    <textarea class="text" id="reason" name="reason"></textarea>
                <label for="therapist">Request a Specific Therapist</label>
                    <select class="text" id="therapist" name="therapist">
                        <option value="none" class="text" selected="selected"> </option>
                        <option value="leslie">Leslie Petruk</option>
                        <option value="andrea">Andrea Miller</option>
                        <option value="katie">Kathryn Burnett</option>
                    </select>
                <label for="referral">How were you referred to us?</label>
                    <textarea class="text" id="referral" name="referral"></textarea>
                <input type="submit" value="Submit">
            </form>
                     <span id="validate"><a href="http://validator.w3.org/check?uri=referer">Validate HTML</a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a></span>
        </div>

         </div>
         
    </div>
    <?php include '../view/footer.php'; ?>
</body>
</html>
