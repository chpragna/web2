<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Insurance Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="date"], input[type="tel"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .form-group input[type="radio"] {
            margin-right: 10px;
        }

        .feedback {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            display: none;
        }

        .submitted-data {
            margin-top: 30px;
        }

        .submitted-data p {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Health Insurance Registration Form</h2>
        <form id="registrationForm">
            <!-- Personal Information -->
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <!-- Address Information -->
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>
            </div>

            <div class="form-group">
                <label for="zip">Zip Code:</label>
                <input type="text" id="zip" name="zip" required>
            </div>

            <!-- Plan Selection -->
            <div class="form-group">
                <label for="plan">Select Plan:</label>
                <select id="plan" name="plan" required>
                    <option value="basic">Basic</option>
                    <option value="premium">Premium</option>
                    <option value="family">Family</option>
                </select>
            </div>

            <!-- Payment Information -->
            <div class="form-group">
                <label for="payment_method">Preferred Payment Method:</label>
                <input type="radio" id="credit_card" name="payment_method" value="credit_card" required> Credit Card
                <input type="radio" id="debit_card" name="payment_method" value="debit_card"> Debit Card
                <input type="radio" id="paypal" name="payment_method" value="paypal"> PayPal
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>

        <div class="feedback" id="feedbackMessage">Form successfully submitted!</div>

        <div class="submitted-data" id="submittedData">
            <!-- Display submitted data here -->
        </div>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            event.preventDefault();  // Prevent form from submitting normally

            // Collect form data
            const formData = new FormData(this);
            let dataObject = {};
            formData.forEach((value, key) => {
                dataObject[key] = value;
            });

            // Show success message
            document.getElementById("feedbackMessage").style.display = "block";

            // Display the submitted data
            const submittedDataDiv = document.getElementById("submittedData");
            submittedDataDiv.innerHTML = `
                <h3>Submitted Data:</h3>
                <p><strong>First Name:</strong> ${dataObject.first_name}</p>
                <p><strong>Last Name:</strong> ${dataObject.last_name}</p>
                <p><strong>Date of Birth:</strong> ${dataObject.dob}</p>
                <p><strong>Email Address:</strong> ${dataObject.email}</p>
                <p><strong>Phone Number:</strong> ${dataObject.phone}</p>
                <p><strong>Address:</strong> ${dataObject.address}</p>
                <p><strong>City:</strong> ${dataObject.city}</p>
                <p><strong>State:</strong> ${dataObject.state}</p>
                <p><strong>Zip Code:</strong> ${dataObject.zip}</p>
                <p><strong>Selected Plan:</strong> ${dataObject.plan}</p>
                <p><strong>Payment Method:</strong> ${dataObject.payment_method}</p>
            `;
        });
    </script>

</body>
</html>
