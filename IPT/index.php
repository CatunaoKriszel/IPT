<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colorful Student Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background for a fresh look */
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            margin: 50px auto;
            max-width: 900px;
            background-color: #ffffff; /* Clean white background */
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            flex: 1;
            background-color: #ffc107; /* Vibrant yellow sidebar */
            padding: 20px;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            text-align: center;
        }

        .sidebar a {
            color: #6c757d; /* Complementary gray for links */
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .form-container {
            flex: 2;
            padding: 30px;
        }

        h2 {
            margin-bottom: 20px;
            color: #17a2b8; /* Cool teal for headings */
        }

        label {
            color: #495057; /* Neutral dark gray for labels */
            font-weight: bold;
        }

        input, textarea {
            background-color: #f8f9fa; /* Soft gray for input fields */
            color: #495057;
            border: 1px solid #ced4da;
        }

        input:focus, textarea:focus {
            border-color: #17a2b8; /* Teal focus color */
            box-shadow: 0 0 5px rgba(23, 162, 184, 0.25);
        }

        .btn-primary {
            background-color: #28a745; /* Fresh green button */
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #218838; /* Darker green hover */
        }
    </style>
</head>
<body>

<div class="container">
    

    <div class="form-container">
        <h2 class="text-center">Student Information Form</h2>
        <form action="submit.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name:</label>
                <input type="text" class="form-control" id="middlename" name="middlename">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course:</label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section:</label>
                <input type="text" class="form-control" id="section" name="section" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colorful Student Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background for a fresh look */
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            margin: 50px auto;
            max-width: 900px;
            background-color: #ffffff; /* Clean white background */
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            flex: 1;
            background-color: #ffc107; /* Vibrant yellow sidebar */
            padding: 20px;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            text-align: center;
        }

        .sidebar a {
            color: #6c757d; /* Complementary gray for links */
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .form-container {
            flex: 2;
            padding: 30px;
        }

        h2 {
            margin-bottom: 20px;
            color: #17a2b8; /* Cool teal for headings */
        }

        label {
            color: #495057; /* Neutral dark gray for labels */
            font-weight: bold;
        }

        input, textarea {
            background-color: #f8f9fa; /* Soft gray for input fields */
            color: #495057;
            border: 1px solid #ced4da;
        }

        input:focus, textarea:focus {
            border-color: #17a2b8; /* Teal focus color */
            box-shadow: 0 0 5px rgba(23, 162, 184, 0.25);
        }

        .btn-primary {
            background-color: #28a745; /* Fresh green button */
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #218838; /* Darker green hover */
        }
    </style>
</head>
<body>

<div class="container">
    

    <div class="form-container">
        <h2 class="text-center">Student Information Form</h2>
        <form action="submit.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name:</label>
                <input type="text" class="form-control" id="middlename" name="middlename">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course:</label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section:</label>
                <input type="text" class="form-control" id="section" name="section" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
