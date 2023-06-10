<?php
$url = 'https://ene47q55lm1rs.x.pipedream.net';
$response = file_get_contents($url);

if ($response === false) {
    // 요청 실패 처리
    echo "Failed to send GET request.";
} else {
    // 요청 성공 시, 응답 내용 출력
    echo $response;
}
?>
