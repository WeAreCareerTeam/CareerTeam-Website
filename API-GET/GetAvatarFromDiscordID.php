<?php
if (empty($_GET['discordid'])) {
    http_response_code(400);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'error'   => 'missing_parameter',
        'message' => 'กรุณาระบุพารามิเตอร์ discordid'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$discordId = preg_replace('/\D+/', '', $_GET['discordid']);

$apiUrl = "https://pfpfinder.com/api/discord/user/{$discordId}";

$options = [
    'http' => [
        'method'  => 'GET',
        'timeout' => 5,
        'header'  => [
            "Accept: application/json",
        ],
    ],
];
$context  = stream_context_create($options);
$response = @file_get_contents($apiUrl, false, $context);

if ($response === false) {
    http_response_code(502);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'error'   => 'upstream_error',
        'message' => 'ไม่สามารถติดต่อ API ภายนอกได้ ลองใหม่อีกครั้ง'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$data = json_decode($response, true);
if (!isset($data['avatar']) || empty($data['avatar'])) {
    http_response_code(404);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'error'   => 'not_found',
        'message' => 'ไม่พบ avatar สำหรับ user นี้'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$avatarUrl = $data['avatar'] . '?size=4096';

header('Content-Type: image/png');
header('Cache-Control: public, max-age=3600');
readfile($avatarUrl);
exit;
?>
