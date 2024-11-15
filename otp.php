<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apk Methode Work</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            background-color: #333;
            background-image: url('background.jpg'); /* Replace 'background.jpg' with the path to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent overlay for readability */
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            box-sizing: border-box;
        }
        .title {
            font-size: 24px;
            color: white;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .welcome {
            font-size: 18px;
            font-weight: bold;
            color: #FFF;
            margin-bottom: 20px;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .cool-button {
            width: 80%;
            padding: 15px;
            margin: 10px 0;
            font-size: 18px;
            color: white;
            font-weight: bold;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .cool-button:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
        }
        .developer {
            margin-top: 20px;
            font-size: 16px;
            color: white;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            font-weight: bold;
            color: #FFF;
        }
    </style>
    <script>
        // Function to copy text to clipboard
        function copyText(buttonText, textToCopy) {
            navigator.clipboard.writeText(textToCopy).then(() => {
                alert(buttonText + " Copy Clipboard Berhasil");
            }).catch(err => {
                console.error('Could not copy text: ', err);
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="title">⌁ Apk Methode Work ⌁</div>
        
        <div class="welcome">
            🌿 Welcome To DARKSET 🌿
        </div>
        
        <div class="button-container">
            <button class="cool-button" onclick="copyText('', 'Selamat Siang/Malam, Developer Whatsapp Saya Mau Bilang Knp Nomor Saya Kenak Limit Kode Otp Padahal Saya Gak Ngapa Ngapain Loh Saya Mengikuti Aturan Whatsapp Jadi Tolong Buka Limit Kode Otp Nomor Saya Ini Nomor Nya 628xxxx Terimakasih.')">METHOD 1</button>
                        <button class="cool-button" onclick="copyText('', 'Merhaba whatsapp bana yardımcı olabilir misiniz? OTP kodum hiç görünmüyor. OTP kodunu gönderdim ancak hala görünmüyor. Öyleyse lütfen bu mesajı destekleyin, teşekkür ederim.')">METHOD 2</button>
           
        </div>
        
        <div class="developer">[ DEVELOPER ]</div>
        
        <div class="footer">© COPYRIGHT DARKSET WHATSAPP</div>
    </div>
</body>
</html>