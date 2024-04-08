<?php include 'adminNavBar.php'; ?>




<?php
//require 'vendor/autoload.php'; // Include the Composer autoloader
//
//use \Mailjet\Resources;
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // Retrieve form data
//    $recipient = $_POST['recipient'];
//    $subject = $_POST['subject'];
//    $message = $_POST['message'];
//    
//    // Set sender email (your default preset email account)
//    $sender = 'your_default_email@example.com';
//    
//    // Set up Mailjet API
//    $mj = new \Mailjet\Client('your_mailjet_api_key', 'your_mailjet_api_secret', true, ['version' => 'v3.1']);
//    
//    // Prepare email data
//    $body = [
//        'Messages' => [
//            [
//                'From' => [
//                    'Email' => $sender,
//                    'Name' => 'Your Name'
//                ],
//                'To' => [
//                    [
//                        'Email' => $recipient,
//                        'Name' => 'Recipient'
//                    ]
//                ],
//                'Subject' => $subject,
//                'TextPart' => $message
//            ]
//        ]
//    ];
//    
//    // Send email
//    $response = $mj->post(Resources::$Email, ['body' => $body]);
//    
//    // Check if email was sent successfully
//    if ($response->success()) {
//        echo "Email sent successfully!";
//    } else {
//        echo "Failed to send email.";
//    }
//}
?>






























<!DOCTYPE html>

<html>

    <head>
        <title>Message Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            
            .container {
                max-width: 500px;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }
            label {
                font-weight: bold;
                color: #333;
            }
            input[type="email"],
            input[type="text"],
            textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                color: #333;
            }
            textarea {
                height: 150px;
            }
            input[type="submit"] {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #333;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            input[type="submit"]:hover {
                background-color: #555;
            }
            
        </style>

    </head>

    <body>



    <center><h1><b>Send Message</b></h1></center>


    <div class="container">
        <h2><b>Email Form</b></h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="recipient">Recipient Email:</label><br>
            <input type="email" id="recipient" name="recipient" required><br>

            <label for="subject">Subject:</label><br>
            <input type="text" id="subject" name="subject" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <input type="submit" value="Submit">
        </form>
    </div>



</body>

</html>

