<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $date = $_POST["date"];
    $name = $_POST["name"];
    $time = $_POST["time"];
    $guests = $_POST["guests"];
    $phone = $_POST["phone"];

    // Compose WhatsApp message
    $whatsapp_number = "94712871972"; // WhatsApp number in the format "94711446236"
    $whatsapp_message = "Reservation Details:\n";
    $whatsapp_message .= "Date: $date\n";
    $whatsapp_message .= "Name: $name\n";
    $whatsapp_message .= "Time: $time\n";
    $whatsapp_message .= "Guests: $guests\n";
    $whatsapp_message .= "Phone: $phone\n";

    // Compose WhatsApp URL
    $whatsapp_url = "https://api.whatsapp.com/send?phone=$whatsapp_number&text=" . urlencode($whatsapp_message);

    // Redirect to WhatsApp URL to send the message
    header("Location: $whatsapp_url");
    exit();
}
?>
