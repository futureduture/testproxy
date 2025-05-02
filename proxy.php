
<?php
// Простий проксі для підключення до SalesDoubler API

// Посилання на API
$apiUrl = 'https://api.affiliates.salesdoubler.pro/offers?page=1&size=100&lang=uk';

// Ініціалізація CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json',
    'X-API-Key: ваш_реальний_API_ключ' // <-- ТУТ заміни на свій справжній API ключ!
]);
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Повертаємо результат
http_response_code($http_code);
header('Content-Type: application/json');
echo $response;
?>
    