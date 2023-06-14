<?php
// Theft.php

require __DIR__ . '/vendor/autoload.php'; // Path to the Twilio PHP SDK

use Twilio\Rest\Client;

$accountSid = 'AC80a684edd6e020b899230f5dac2874a5';
$authToken = '250789a322c50d08cd74076bb1afd5f6';
$twilioNumber = '+254786194681';

$client = new Client($accountSid, $authToken);

// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['missing'];

// Compose the message
$body = "New report:\nName: $name\nPhone: $phone\nMessage: $message";

// Send the message
$message = $client->messages->create(
  $phone, // Recipient's phone number
  [
    'from' => $twilioNumber, // Your Twilio phone number
    'body' => $body,
  ]
);

// Output success message or handle errors
if ($message->sid) {
  echo "Message sent successfully!";
} else {
  echo "Failed to send message. Error: " . $message->errorMessage;
}
?>


