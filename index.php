<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            color: #333333;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            padding: 2rem;
        }

        h1 {
            font-size: 3rem;
            font-weight: 300;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #7f8c8d;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .countdown-item {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            min-width: 80px;
        }

        .countdown-number {
            font-size: 2rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .countdown-label {
            font-size: 0.8rem;
            color: #7f8c8d;
            text-transform: uppercase;
        }

        .notify-form {
            margin: 2rem 0;
        }

        .notify-input {
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            width: 250px;
            margin-right: 0.5rem;
        }

        .notify-btn {
            padding: 0.8rem 1.5rem;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .notify-btn:hover {
            background: #34495e;
        }

        .social-links {
            margin-top: 2rem;
        }

        .social-links a {
            color: #7f8c8d;
            text-decoration: none;
            margin: 0 0.5rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #2c3e50;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            p {
                font-size: 1rem;
            }
            
            .countdown {
                gap: 0.5rem;
            }
            
            .countdown-item {
                min-width: 60px;
                padding: 0.8rem;
            }
            
            .countdown-number {
                font-size: 1.5rem;
            }
            
            .notify-input {
                width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Coming Soon</h1>
        <p>We're working hard to bring you something amazing. Stay tuned!</p>
        
        <div class="countdown">
            <div class="countdown-item">
                <div class="countdown-number" id="days">00</div>
                <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="hours">00</div>
                <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="minutes">00</div>
                <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="seconds">00</div>
                <div class="countdown-label">Seconds</div>
            </div>
        </div>

        <div class="notify-form">
            <form method="POST" action="">
                <input type="email" class="notify-input" placeholder="Enter your email" required>
                <button type="submit" class="notify-btn">Notify Me</button>
            </form>
        </div>

        <div class="social-links">
            <a href="#">Facebook</a> • 
            <a href="#">Twitter</a> • 
            <a href="#">Instagram</a>
        </div>
    </div>

    <script>
        // Set the date we're counting down to (3 months from now)
        const countDownDate = new Date();
        countDownDate.setMonth(countDownDate.getMonth() + 3);

        // Update the countdown every 1 second
        const countdownFunction = setInterval(function() {
            const now = new Date().getTime();
            const distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result
            document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
            document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');

            // If the countdown is finished, write some text
            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById("countdown").innerHTML = "WE'RE LIVE!";
            }
        }, 1000);
    </script>
</body>
</html>