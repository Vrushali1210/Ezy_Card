<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
    <style>
        .modal {
            display: block; /* Display the modal by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6); /* Darker overlay */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #ffffff; /* White background */
            margin: 5% auto;
            padding: 30px; /* Increased padding */
            border: 1px solid #888;
            width: 50%; /* Specific box size */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Shadow for depth */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        h1 {
            color: #333; /* Darker heading */
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555; /* Lighter label text */
            font-weight: bold; /* Bold labels */
        }

        input[type="text"], input[type="email"], input[type="date"], textarea {
            width: 100%;
            padding: 12px; /* Larger padding */
            margin-top: 5px;
            margin-bottom: 20px; /* Increased bottom margin */
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
            font-size: 16px; /* Increased font size */
            color: #333; /* Text color */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Button color */
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Darker button on hover */
        }

        textarea {
            height: 100px; /* Specific height for textareas */
        }
        h1{
            color: red  ;
        }
    </style>
</head>
<body>

    <div id="enquiryModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h1>Event Enquiry Form</h1>
            <form id="enquiryForm" action="submit_enquiry.php" method="post">
                <label for="name">Name of the Client:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="mobile">Mobile No:</label>
                <input type="text" id="mobile" name="mobile" required>
                
                <label for="event_type">Type of Event:</label>
                <input type="text" id="event_type" name="event_type" required>
                
                <label for="event_date">Event Date:</label>
                <input type="date" id="event_date" name="event_date" required>
                
                <label for="theme">Theme & Decoration:</label>
                <textarea id="theme" name="theme" required></textarea>
                
                <label for="catering">Catering and Menu:</label>
                <textarea id="catering" name="catering" required></textarea>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById('enquiryModal').style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('enquiryModal')) {
                document.getElementById('enquiryModal').style.display = "none";
            }
        }

        window.onload = function() {
            document.getElementById('enquiryModal').style.display = "block"; // Open the modal when the page loads
        }

        document.getElementById('enquiryForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            alert('Form submitted successfully!');
            closeModal(); // Optionally close the modal
            // You can also send the form data to the server here using AJAX if needed
            // For now, let's simulate form submission with a timeout
            setTimeout(function() {
                document.getElementById('enquiryForm').submit(); // This submits the form after the message
            }, 1000); // Adjust the timeout as needed
        });
    </script>
</body>
</html>
