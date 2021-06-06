<?php
// message vars
$msg = "";
$msgClass = "";

// check for submit

if (filter_has_var(INPUT_POST, "submit")) {
    // Get form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Check Required fields

    if (!empty($email) && !empty($name) && !empty($message)) {
        // passed
        // check email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Failed
            $msg = "please fill in all fields";
            $msgClass = "alert-danger";
        } else {
            // passed
            // Recipient Email
            $toEmail = "jm@wilkom.net";
            // Subject
            $subject = "Contact Reques from . $name";
            $body = "<h2>Contact Request </h2> <br> <h4>Name: . $name</h4>
            <h4>Email: . $email</h4> <br>
            <h4>Message: . $message</h4>";

            // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            // Additional Header

            $headers .= "From: " . $name . "<br>" . $email . "<br>" . $message . "\r\n";

            // Mailfunction

            if (mail($toEmail, $subject, $body, $headers)) {
                // Email sent
                $msg = "Email has been sent";
                $msgClass = "success";
            } else {
                // Fails
                $msg = "Email was not sent";
                $msgClass = "alert-danger";
            }

        }
    } else {
        // failed
        $msg = "please fill in all fields";
        $msgClass = "alert-danger";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Contact us</title>
</head>
<body>
      <nav class="navbar navbar-default">
            <div class="container">
            <?php if ($msg != ""): ?>
                  <div class="alert <?php echo $msgClass; ?>">
                        <?php echo $msg; ?>
                  </div>
            <?php endif;?>
                  <div class="navbar-header">
                        <a href="index.php" class="navbar-brand">my website</a>
                  </div>
            </div>
      </nav>
      <div class="container">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

      <div class="form-group">
            <label for="name">Name</label>
            <input type="text" placeholder="name" name="name" class="form-control" value="<?php echo isset($_POST["name"]) ? $name : ""; ?>">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" placeholder="email" name="email" class="form-control"  value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">
            </div>
            <div class="form-group">
            <label for="message">Message</label>
            <textarea placeholder="message" name="message" id="message" cols="30" rows="10" class="form-control" value="<?php echo isset($_POST["message"]) ? $message : ""; ?>"></textarea>
            </div><br>
            <button class="btn btn-primary" name="submit" type="submit">Send now</button>
      </form>
      </div>
</body>
</html>
