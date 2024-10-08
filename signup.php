<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Nobel College</title>
    <script type="module" src="auth.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #auth-container {
            background: #09658a;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 373px;
            height: 400px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #fff;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        button {
            background-color: #ff5722;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e64a19;
        }

        p {
            font-size: 1rem;
        }

        a {
            color: #ff5722;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="auth-container">
        <h1>Nobel College - Signup</h1>
        <input type="email" id="signup-email" placeholder="Email">
        <input type="password" id="signup-password" placeholder="Password">
        <button onclick="signup()">Signup</button>
        <p>Already have an account? <a href="index.php">Login here</a></p>
    </div>
    <script type="module">
        import {
            getAuth,
            createUserWithEmailAndPassword
        } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-auth.js";
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-app.js";

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCf6143NYtMLX-foYzc_J8s16s4_mkj41U",
            authDomain: "nobelcollege-159fb.firebaseapp.com",
            projectId: "nobelcollege-159fb",
            storageBucket: "nobelcollege-159fb.appspot.com",
            messagingSenderId: "350752294459",
            appId: "1:350752294459:web:6101ec09bd59f19f3c3e1e",
            measurementId: "G-49YH88KFL6"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);

        window.signup = function() {
            const email = document.getElementById('signup-email').value.trim();
            const password = document.getElementById('signup-password').value.trim();

            createUserWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    alert('Signup successful!');
                    window.location.href = 'index.php'; // Redirect to index.php after successful signup
                })
                .catch((error) => {
                    alert(`Error: ${error.message}`);
                });
        };
    </script>
</body>

</html>