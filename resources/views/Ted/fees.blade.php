<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student Details</title>
</head>
<body>
    <h2>Fees Registration System</h2>
    <form action="{{('Students')}}" method="POST">
    <label for="Student Number">Student:</label>
    <input type="text" name="sno" id="sno">
    <label for="amount">Amount:</label>
    <input type="text" name="amount" id="amount">
    <label for="date">Date of Payment:</label>
    <input type="text" name="date" id="date">
    <input type="submit">
    </form>
</body>
</html>