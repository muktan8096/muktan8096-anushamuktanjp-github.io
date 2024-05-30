if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "your_email@example.com"; // Replace with your email address
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "
    <html>
    <body>
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> {$full_name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Mobile Number:</strong> {$mobile_number}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    </body>
    </html>";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Message sent successfully!');</script>";
        echo "<script>window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Message sending failed. Please try again later.');</script>";
        echo "<script>window.location.href = 'index.html';</script>";
    }
}
?>