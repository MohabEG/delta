
<?php
unlink("/home/dh_a9e35n/deltaios-executor.com/embedded.mobileprovision");
shell_exec("/usr/bin/unzip -j /home/dh_a9e35n/deltaios-executor.com/Signed.ipa 'Payload/*.app/embedded.mobileprovision' -d /home/dh_a9e35n/deltaios-executor.com");
shell_exec("/usr/bin/chmod 777 /home/dh_a9e35n/deltaios-executor.com/embedded.mobileprovision");

// Read and return the contents of the mobileprovision file
$file_path = "/home/dh_a9e35n/deltaios-executor.com/embedded.mobileprovision";
if (file_exists($file_path)) {
    $mobileprovision_content = file_get_contents($file_path);
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="embedded.mobileprovision"');
    echo $mobileprovision_content;
    exit;
} else {
    http_response_code(404);
    echo "Error: mobileprovision file not found.";
}
?>