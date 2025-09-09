# PHP EXAM ESSENTIALS - SIMPLIFIED VERSION

## 1. DATABASE CONNECTION
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=DATABASE_NAME", "root", "password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

## 2. FORM HANDLING
<?php
if (isset($_POST['submit_name'])) {
    $variable = $_POST['input_name'];
    
    if (isset($variable)) {
        $stmt = $pdo->prepare("SELECT * FROM table WHERE field = ?");
        $stmt->execute([$variable]);
        $result = $stmt->fetchAll();
    } else {
        echo "Please fill the field";
    }
}
?>

## 3. SESSION MANAGEMENT
<?php
session_start();

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (isset($username) && isset($password)) {
        // Check credentials
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['user'] = $username;
            header("Location: main.php");
            exit();
        } else {
            $error = "Invalid credentials";
        }
    } else {
        $error = "Fields are required";
    }
}

// Check if logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Logout
session_destroy();
header("Location: login.php");
?>

## 4. DISPLAY DATA FROM DATABASE
<?php
$stmt = $pdo->prepare("SELECT * FROM table WHERE condition = ?");
$stmt->execute([$value]);
$results = $stmt->fetchAll();

foreach ($results as $row) {
    echo "<tr>";
    echo "<td>" . $row['field1'] . "</td>";
    echo "<td>" . $row['field2'] . "</td>";
    echo "</tr>";
}
?>

## 5. INSERT/UPDATE/DELETE
<?php
// INSERT
$stmt = $pdo->prepare("INSERT INTO table (field1, field2) VALUES (?, ?)");
$stmt->execute([$value1, $value2]);

// UPDATE  
$stmt = $pdo->prepare("UPDATE table SET field1 = ? WHERE id = ?");
$stmt->execute([$new_value, $id]);

// DELETE
$stmt = $pdo->prepare("DELETE FROM table WHERE id = ?");
$stmt->execute([$id]);
?>

## 6. BASIC HTML FORM
<form action="process.php" method="post">
    <input type="text" name="input_name" required>
    <button type="submit" name="submit_name">Submit</button>
</form>

## 7. PREPARED STATEMENTS PATTERN
Step 1: $stmt = $pdo->prepare("SQL WITH ?");
Step 2: $stmt->execute([variable]);

Remember: Number of ? = Number of variables in array