<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student Details</title>
</head>
<body>
    <h2>Student Registration System</h2>
    <form action="{{('Students')}}" method="POST">
    <label for="Student Number">Student:</label>
    <input type="text" name="sno" id="sno">
    <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname">
    <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname">
    <label for="dob">Date Of Birth:</label>
    <input type="date" name="dob" id="dob">
    <label for="address">Address:</label>
    <input type="text" name="address" id="address">
    <input type="submit">
    </form>
</body>
</html>