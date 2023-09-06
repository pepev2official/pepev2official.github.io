<?php
$blockedIPsFile = 'blocked_ips.txt';

// Load existing blocked IPs from the file into an array
$blockedIPs = file($blockedIPsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$clientIP = $_SERVER['REMOTE_ADDR'];

if (in_array($clientIP, $blockedIPs)) {
    echo "blocked";
} else {
    $failedAttempts = intval($_GET['attempts']); // Get the number of failed attempts from the query parameter
    if ($failedAttempts >= 3) {
        // Block the IP by adding it to the blocked IPs array and saving it to the file
        $blockedIPs[] = $clientIP;
        file_put_contents($blockedIPsFile, implode("\n", $blockedIPs));
        echo "blocked";
    } else {
        echo "not_blocked";
    }
}
?>