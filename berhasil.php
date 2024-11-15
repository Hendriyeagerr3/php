<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .loading-container {
            text-align: center;
            border-radius: 15px;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.8);
            width: 350px;
            box-sizing: border-box;
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #ecf0f1;
        }

        /* Circle Loader */
        .loader {
            border: 10px solid #f3f3f3;
            border-top: 10px solid #3498db;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            margin: 0 auto;
            animation: spin 2s linear infinite;
        }

        /* Progress Bar */
        .progress-container {
            width: 100%;
            height: 20px;
            background-color: #34495e;
            border-radius: 10px;
            margin-top: 30px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background-color: #2ecc71;
            border-radius: 10px;
            transition: width 0.1s ease;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            opacity: 0.6;
            color: #ecf0f1;
        }

        /* Countdown Timer Style */
        .timer {
            font-size: 16px;
            margin-top: 20px;
            color: #ecf0f1;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

    <div class="loading-container">
        <div class="title">SEDANG SIPROSES</div>
        
        <!-- Loading Spinner -->
        <div class="loader"></div>
        
        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>

        <!-- Countdown Timer -->
        <div class="timer" id="countdown-timer">Proses Maksimal: 24:00:00</div>

        <div class="footer">Silakan Ditunggu Apk Ini Jangan Sampai Di Close Sebelum Berhasil Dibuka Apabila Diclose Akan Diulang Lagi</div>
    </div>

    <script>
        // 24 hours in seconds (86400 seconds)
        let totalTime = 86400;
        let progress = 0;
        const progressBar = document.getElementById("progress-bar");
        const countdownTimer = document.getElementById("countdown-timer");

        // Function to format time as hh:mm:ss
        function formatTime(seconds) {
            const hours = Math.floor(seconds / 3600);
            const minutes = Math.floor((seconds % 3600) / 60);
            const sec = seconds % 60;
            return `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${sec.toString().padStart(2, '0')}`;
        }

        // Simulate the 24-hour loading process
        function simulateLoading() {
            const interval = setInterval(function() {
                // Update progress bar and countdown timer
                progress += 100 / totalTime; // Increment progress based on the total time
                progressBar.style.width = `${progress}%`;

                // Update countdown timer
                countdownTimer.textContent = `Time remaining: ${formatTime(totalTime)}`;
                totalTime--;

                // When the loading reaches 100%
                if (totalTime < 0) {
                    clearInterval(interval);
                    setTimeout(function() {
                        window.location.href = "dashboard.html";  // Redirect to the next page after completion
                    }, 500); // Delay to show completed state
                }
            }, 1000); // Update every second
        }

        // Start the loading process on page load
        window.onload = simulateLoading;
    </script>
    
</body>
</html>