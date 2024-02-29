<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KYC Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        select, input[type="text"], input[type="date"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="/store" >
            @csrf
            <h2>KYC Form</h2>
            <input type="hidden" name="application_no" value="0000">
            <label>1. Name of the Applicant</label>
            <input type="text" name="name" required>
                2a. Gender
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </label>
            <label>
                2c. Date of Birth
                <input type="date" name="date_of_birth" required>
            </label>
            <label>4. Status</label>
            <select name="residency_status" required>
                <option value="resident_individual">Resident Individual</option>
                <option value="non_resident">Non Resident</option>
                <option value="foreign_national">Foreign National</option>
            </select>
            2b. Marital Status
                <select name="marital_status" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
            </label>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>