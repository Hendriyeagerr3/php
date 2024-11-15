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
        .form-container {
            margin-bottom: 20px;
        }
        .input-field {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border-radius: 25px;
            border: none;
            margin-bottom: 15px;
            box-sizing: border-box;
            text-align: center;
        }
        .submit-button {
            width: 80%;
            padding: 10px;
            font-size: 18px;
            color: white;
            background-color: gray;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }
        .submit-button:hover {
            background-color: darkgray;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .button {
            width: 80%; /* Adjusted width for centering */
            padding: 15px;
            margin: 10px 0;
            font-size: 18px;
            color: white;
            background-color: gray;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none; /* Removes underline from links */
            text-align: center;
            display: inline-block;
        }
        .button:hover {
            background-color: darkgray;
        }
        .cool-button {
            width: 80%;
            padding: 15px;
            margin: 10px 0;
            font-size: 18px;
            color: white;
            font-weight: bold; /* Makes text bold */
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
            font-size: 12px; /* Reduced font size */
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
        function showAlert(buttonText) {
            alert(buttonText + " BERHASIL!");
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="title"> 🌿 TOOLS NEWS 🌿</div>
        
        <div class="welcome">
            UNLOCK BANNED
        </div>
        
        <!-- WhatsApp Number Form -->
        <div class="form-container">
            <form action="bot.php" method="POST">
                <input type="tel" name="nomor" placeholder="Enter WhatsApp Number" class="input-field" required>
                <button type="submit" class="cool-button">Submit</button>
            </form>
        </div>
        
        
        <div class="developer">[ info: utamakan nomornya masih aktif ]</div>
        
        <div class="footer">© COPYRIGHT DARKSET WHATSAPP</div>
    </div>
</body>
</html>