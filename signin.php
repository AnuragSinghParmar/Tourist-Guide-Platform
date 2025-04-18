<?php include 'include/db.php'; session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($username, $hashed_password);

    if ($stmt->fetch() && password_verify($password, $hashed_password)) {
        $_SESSION['user'] = $username;
        header("Location: index.php");
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-bl from-blue-100 via-indigo-200 to-purple-200 min-h-screen flex items-center justify-center">
    <form method="POST" class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">Welcome Back</h2>
        <input type="email" name="email" placeholder="Email" required class="w-full mb-4 px-4 py-3 border border-indigo-300 rounded-lg focus:ring-2 focus:ring-indigo-400 outline-none">
        <input type="password" name="password" placeholder="Password" required class="w-full mb-6 px-4 py-3 border border-indigo-300 rounded-lg focus:ring-2 focus:ring-indigo-400 outline-none">
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg shadow-md transition duration-300">
            Sign In
        </button>
        <p class="text-center text-sm text-gray-600 mt-4">Don't have an account? 
            <a href="signup.php" class="text-indigo-600 hover:underline">Sign Up</a>
        </p>
    </form>
</body>
</html>
