<!DOCTYPE html>
<html>
<head>
<title>PHP Output No. 1</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>PHP Output No. 1</h2>

<!-- GET FORM -->
<form method="GET">

<p>This form uses GET request</p>

<label>First Name</label>
<input type="text" name="fname" placeholder="Enter First Name" required>

<label>Middle Name</label>
<input type="text" name="mname" placeholder="Enter Middle Name">

<label>Last Name</label>
<input type="text" name="lname" placeholder="Enter Last Name" required>

<label>Age</label>
<input type="number" name="age" min="1" required>

<label>Gender</label>
<select name="gender" required>
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
</select>

<label>Email</label>
<input type="email" name="email" placeholder="Enter Email" required>

<label>Address</label>
<input type="text" name="address" placeholder="Enter Address" required>

<label>Contact Number</label>
<input type="tel" name="contact" pattern="[0-9]{11}" placeholder="09XXXXXXXXX" required>

<button type="submit">Submit Data</button>
<button type="reset">Cancel</button>

</form>


<!-- POST FORM -->
<form method="POST">

<p>This form uses POST request</p>

<label>First Name</label>
<input type="text" name="fname2" placeholder="Enter First Name" required>

<label>Middle Name</label>
<input type="text" name="mname2" placeholder="Enter Middle Name">

<label>Last Name</label>
<input type="text" name="lname2" placeholder="Enter Last Name" required>

<label>Age</label>
<input type="number" name="age2" min="1" required>

<label>Gender</label>
<select name="gender2" required>
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
</select>

<label>Email</label>
<input type="email" name="email2" placeholder="Enter Email" required>

<label>Address</label>
<input type="text" name="address2" placeholder="Enter Address" required>

<label>Contact Number</label>
<input type="tel" name="contact2" pattern="[0-9]{11}" placeholder="09XXXXXXXXX" required>

<button type="submit">Submit Data</button>
<button type="reset">Cancel</button>

</form>

</body>
</html>
