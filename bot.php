<?php
if (!isset($_GET['prompt'])) {
    echo "Please provide a prompt.";
    exit;
}

$prompt = strtolower(trim($_GET['prompt']));
$response = "Sorry, I didn’t get that. Can you ask differently? 💬";

// Simple hardcoded responses
if (strpos($prompt, 'moisturizer') !== false) {
    $response = "For dry skin, try 'Cetaphil Moisturizing Cream' or 'Neutrogena Hydro Boost'. 🧴✨";
} elseif (strpos($prompt, 'acne') !== false) {
    $response = "Try 'The Ordinary Niacinamide 10%' or 'La Roche-Posay Effaclar Duo'. 💧";
} elseif (strpos($prompt, 'shampoo') !== false) {
    $response = "I recommend 'L'Oreal Dream Lengths' or 'Head & Shoulders' depending on your hair type. 🧼💇‍♀️";
} elseif (strpos($prompt, 'lipstick') !== false) {
    $response = "Check out 'Maybelline SuperStay Matte Ink' or 'MAC Ruby Woo'. 💄";
} elseif (strpos($prompt, 'hello') !== false || strpos($prompt, 'hi') !== false) {
    $response = "Hello beautiful! 💕 Ask me anything about beauty products.";
}

echo $response;
