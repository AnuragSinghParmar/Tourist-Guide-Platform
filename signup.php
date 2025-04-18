<?php include 'include/db.php'; session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['user'] = $username;
        header("Location: index.php");
    } else {
        echo "<script>alert('Error: username/email might already exist.');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-200 via-pink-200 to-red-200 min-h-screen flex items-center justify-center">
    <form method="POST" class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold text-center text-purple-700 mb-6">Create an Account</h2>
        <input type="text" name="username" placeholder="Username" required class="w-full mb-4 px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 outline-none">
        <input type="email" name="email" placeholder="Email" required class="w-full mb-4 px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 outline-none">
        <input type="password" name="password" placeholder="Password" required class="w-full mb-6 px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 outline-none">
        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded-lg shadow-md transition duration-300">
            Sign Up
        </button>
        <p class="text-center text-sm text-gray-600 mt-4">Already have an account? 
            <a href="signin.php" class="text-purple-600 hover:underline">Sign In</a>
        </p>
    </form>
</body>
</html>
