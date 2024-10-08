<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Nobel College</title>
    <script type="module" src="auth.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
            text-align: center;
        }
        h1 {
            margin-top: 50px;
            font-size: 3rem;
            color: #fff;
        }
        p {
            font-size: 1.5rem;
            margin: 20px 0;
        }
        button {
            background-color: #ff5722;
            border: none;
            color: white;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            margin: 10px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
    <h1>Welcome to Nobel College</h1>
    <p>You are now logged in.</p>
    <button onclick="logout()">Logout</button>
    <script type="module">
        import { getAuth, signOut } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-auth.js";

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

        window.logout = function() {
            signOut(auth).then(() => {
                alert('Logged out successfully!');
                window.location.href = 'index.php'; // Redirect to login page
            }).catch((error) => {
                console.error('Logout error:', error);
                alert('Error logging out. Please try again.');
            });
        };
    </script>
</body>
</html>
