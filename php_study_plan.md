# Complete PHP Web Development Course - M107

## 📚 Chapter 1: PHP Fundamentals

### 1.1 Variables and Data Types

**Variables in PHP** start with the `$` symbol and are case-sensitive:

```php
<?php
$name = "Ali";           // String
$age = 25;               // Integer
$height = 1.75;          // Float
$isStudent = true;       // Boolean
?>
```

**Important Rules:**
- Variable names must start with a letter or underscore
- Can contain letters, numbers, and underscores
- No spaces allowed

**Type Juggling:**
PHP automatically converts between types:
```php
$x = "5";    // String
$y = 3;      // Integer
echo $x + $y; // Output: 8 (string "5" becomes integer 5)
```

### 1.2 Arrays

**Indexed Arrays:**
```php
$fruits = ["apple", "banana", "orange"];
// or
$fruits = array("apple", "banana", "orange");

// Accessing elements
echo $fruits[0]; // Output: apple
echo $fruits[1]; // Output: banana
```

**Associative Arrays:**
```php
$student = [
    "name" => "Sara",
    "age" => 20,
    "grade" => "A"
];

// Accessing elements
echo $student["name"];  // Output: Sara
echo $student["age"];   // Output: 20
```

**Multi-dimensional Arrays:**
```php
$students = [
    ["name" => "Ali", "grade" => "A"],
    ["name" => "Sara", "grade" => "B"],
    ["name" => "Omar", "grade" => "A"]
];

echo $students[0]["name"]; // Output: Ali
```

### 1.3 Operators

**Arithmetic Operators:**
```php
$a = 10;
$b = 3;

echo $a + $b;  // 13 (Addition)
echo $a - $b;  // 7  (Subtraction)
echo $a * $b;  // 30 (Multiplication)
echo $a / $b;  // 3.33... (Division)
echo $a % $b;  // 1  (Modulus - remainder)
```

**Comparison Operators:**
```php
$x = 5;
$y = "5";

var_dump($x == $y);   // true  (equal value)
var_dump($x === $y);  // false (equal value AND type)
var_dump($x != $y);   // false (not equal value)
var_dump($x !== $y);  // true  (not equal value OR type)
var_dump($x > 3);     // true
var_dump($x <= 5);    // true
```

## 📚 Chapter 2: Control Structures

### 2.1 Conditional Statements

**If-Else Statements:**
```php
$age = 19;
$majority = 18;

if ($age >= $majority) {
    echo "Majeur";
} else {
    echo "Mineur";
}
```

**Ternary Operator (Shorthand):**
```php
$age = 19;
$majority = 18;
echo ($age >= $majority) ? "Majeur" : "Mineur";
// Same as if-else above
```

**Multiple Conditions:**
```php
$score = 85;

if ($score >= 90) {
    echo "Excellent";
} elseif ($score >= 80) {
    echo "Très bien";
} elseif ($score >= 70) {
    echo "Bien";
} else {
    echo "Peut mieux faire";
}
```

### 2.2 Loops

**For Loop:**
```php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}
// Output: Number: 1, Number: 2, ..., Number: 5
```

**Foreach Loop (for arrays):**
```php
$colors = ["red", "blue", "green"];

foreach ($colors as $color) {
    echo $color . "<br>";
}
// Output: red, blue, green (each on new line)
```

**Foreach with Keys:**
```php
$student = ["name" => "Ali", "age" => 20, "city" => "Rabat"];

foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
// Output: 
// name: Ali
// age: 20  
// city: Rabat
```

**While Loop:**
```php
$i = 1;
while ($i <= 3) {
    echo "Count: $i<br>";
    $i++;
}
```

## 📚 Chapter 3: Functions

### 3.1 Built-in Functions

**Array Functions:**
```php
$numbers = [1, 2, 3, 4, 5];

echo count($numbers);        // 5 (number of elements)
echo sizeof($numbers);       // 5 (same as count)

// Adding/removing elements
array_push($numbers, 6);     // Add to end
array_pop($numbers);         // Remove from end
unset($numbers[2]);          // Remove specific element
```

**String Functions:**
```php
$text = "  Hello World  ";

echo strlen($text);          // 15 (length including spaces)
echo trim($text);            // "Hello World" (removes spaces)
echo strtoupper($text);      // "  HELLO WORLD  "
echo strtolower($text);      // "  hello world  "
echo substr($text, 2, 5);    // "Hello" (from position 2, length 5)
```

**Variable Testing Functions:**
```php
$name = "Ali";
$age = null;

var_dump(isset($name));      // true (variable exists and not null)
var_dump(isset($age));       // false (variable exists but is null)
var_dump(empty($name));      // false (not empty)
var_dump(is_numeric("123")); // true (is a number)
var_dump(is_string($name));  // true (is a string)
```

### 3.2 Custom Functions

**Basic Function:**
```php
function greet($name) {
    return "Hello, $name!";
}

echo greet("Ali");  // Output: Hello, Ali!
```

**Function with Multiple Parameters:**
```php
function calculateTVA($price, $rate = 0.2) {
    return $price * $rate;
}

echo calculateTVA(100);     // 20 (using default rate)
echo calculateTVA(100, 0.1); // 10 (using custom rate)
```

**Function with Conditional Logic:**
```php
function marquerPresence($prenom, $genre) {
    if ($genre === "Masculin") {
        echo "$prenom est présent.";
    } elseif ($genre === "Féminin") {
        echo "$prenom est présente.";
    } else {
        echo "Genre non valide";
    }
}

marquerPresence("Ali", "Masculin");   // Ali est présent.
marquerPresence("Sara", "Féminin");   // Sara est présente.
```

## 📚 Chapter 4: File Operations

### 4.1 File Modes

**Understanding File Modes:**
- `"r"` - Read only. File pointer starts at beginning
- `"w"` - Write only. Truncates file to zero or creates new file
- `"a"` - Write only. File pointer starts at end (append)
- `"r+"` - Read/write. File pointer starts at beginning
- `"w+"` - Read/write. Truncates file or creates new file
- `"a+"` - Read/write. File pointer starts at end

### 4.2 File Operations

**Reading from Files:**
```php
// Open file for reading
$file = fopen("data.txt", "r");

if ($file) {
    // Read entire file
    $content = fread($file, filesize("data.txt"));
    echo $content;
    
    // Close file
    fclose($file);
} else {
    echo "Error opening file";
}
```

**Writing to Files:**
```php
// Open file for writing (overwrites existing content)
$file = fopen("output.txt", "w");

if ($file) {
    fwrite($file, "Hello World!\n");
    fwrite($file, "This is line 2");
    fclose($file);
    echo "File written successfully";
}
```

**Appending to Files:**
```php
// Open file for appending (adds to end)
$file = fopen("log.txt", "a");

if ($file) {
    fwrite($file, "New log entry\n");
    fclose($file);
}
```

## 📚 Chapter 5: Web Forms and HTTP

### 5.1 HTML Forms

**Basic Form Structure:**
```html
<form method="POST" action="process.php">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Submit">
</form>
```

**Form with Different Input Types:**
```html
<form method="POST" action="handle.php">
    <input type="text" name="name" required>
    <input type="number" name="age" min="1" max="100">
    <select name="city">
        <option value="rabat">Rabat</option>
        <option value="casa">Casablanca</option>
        <option value="tanger">Tanger</option>
    </select>
    <textarea name="message" rows="4" cols="50"></textarea>
    <input type="submit" value="Send">
</form>
```

### 5.2 Processing Form Data

**GET vs POST:**

**GET Method:**
- Data sent in URL
- Visible in browser address bar
- Limited data size (usually 2048 characters)
- Can be bookmarked
- Not secure for sensitive data

**POST Method:**
- Data sent in request body
- Not visible in URL
- No size limit (practically)
- Cannot be bookmarked
- More secure for sensitive data

**Processing GET Data:**
```php
// URL: page.php?name=Ali&age=25
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name";
}

if (isset($_GET['age'])) {
    $age = $_GET['age'];
    echo "You are $age years old";
}
```

**Processing POST Data:**
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        
        // Validate data
        if (!empty($username) && !empty($password)) {
            echo "Processing login for: $username";
        } else {
            echo "Please fill all fields";
        }
    }
}
```

### 5.3 Form Validation

**Complete Form Validation Example:**
```php
$errors = [];
$name = $email = $age = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = "Name is required";
    } else {
        $name = trim($_POST['name']);
        if (strlen($name) < 2) {
            $errors[] = "Name must be at least 2 characters";
        }
    }
    
    // Validate email
    if (empty($_POST['email'])) {
        $errors[] = "Email is required";
    } else {
        $email = trim($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }
    
    // Validate age
    if (empty($_POST['age'])) {
        $errors[] = "Age is required";
    } else {
        $age = $_POST['age'];
        if (!is_numeric($age) || $age < 1 || $age > 120) {
            $errors[] = "Age must be between 1 and 120";
        }
    }
    
    // Process if no errors
    if (empty($errors)) {
        echo "Form submitted successfully!";
        // Process the data here
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
```

## 📚 Chapter 6: Database Operations with PDO

### 6.1 Database Connection

**Setting up PDO Connection:**
```php
try {
    $host = 'localhost';
    $dbname = 'mydb';
    $username = 'user';
    $password = 'pass';
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
```

**Connection in Separate File (db_conn.php):**
```php
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=livs", "livsuser", "vPaa98g");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
```

### 6.2 SELECT Operations

**Basic SELECT:**
```php
$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch one row
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo $user['name'];

// Or fetch all rows
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user) {
    echo $user['name'] . "<br>";
}
```

**SELECT with WHERE clause:**
```php
$userId = 5;
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    echo "User found: " . $user['name'];
} else {
    echo "User not found";
}
```

**SELECT with Multiple Conditions:**
```php
$sql = "SELECT * FROM livraisons WHERE telephone_livreur = ? AND MONTH(date) = MONTH(CURDATE())";
$stmt = $pdo->prepare($sql);
$stmt->execute([$telephone]);
$livraisons = $stmt->fetchAll(PDO::FETCH_ASSOC);
```

### 6.3 INSERT Operations

**Basic INSERT:**
```php
$sql = "INSERT INTO users (name, email, age) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['Ali', 'ali@email.com', 25]);
echo "User added successfully";
```

**INSERT with Form Data:**
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = $_POST['age'];
    
    $sql = "INSERT INTO users (name, email, age) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$name, $email, $age])) {
        echo "User registered successfully";
    } else {
        echo "Error registering user";
    }
}
```

### 6.4 UPDATE and DELETE Operations

**UPDATE:**
```php
$sql = "UPDATE users SET email = ?, age = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(['newemail@test.com', 26, 5]);
echo "User updated";
```

**DELETE:**
```php
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([5]);
echo "User deleted";
```

### 6.5 User Authentication Example

**Login System:**
```php
// login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $telephone = trim($_POST['telephone']);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM livreur WHERE telephone_livreur = ? AND mot_de_passe = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$telephone, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        // Login successful
        header("Location: liste_livraisons.php?tel=" . $telephone);
        exit();
    } else {
        echo "Invalid credentials";
    }
}
```

## 📚 Chapter 7: Object-Oriented Programming

### 7.1 Classes and Objects

**Basic Class Definition:**
```php
class Voiture {
    // Properties
    public $marque;
    public $couleur;
    private $vitesse;
    
    // Constructor
    public function __construct($marque, $couleur) {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = 0;
    }
    
    // Methods
    public function demarrer() {
        echo "Vroum !";
    }
    
    public function accelerer($increment) {
        $this->vitesse += $increment;
        echo "Vitesse: " . $this->vitesse . " km/h";
    }
    
    public function getVitesse() {
        return $this->vitesse;
    }
}
```

**Using the Class:**
```php
// Create object
$maVoiture = new Voiture("Toyota", "Rouge");

// Access properties
echo $maVoiture->marque;  // Toyota
echo $maVoiture->couleur; // Rouge

// Call methods
$maVoiture->demarrer();   // Vroum !
$maVoiture->accelerer(50); // Vitesse: 50 km/h
```

### 7.2 Visibility and Encapsulation

**Property Visibility:**
```php
class Student {
    public $name;        // Accessible everywhere
    protected $grade;    // Accessible in this class and subclasses
    private $password;   // Only accessible in this class
    
    public function __construct($name, $grade, $password) {
        $this->name = $name;
        $this->grade = $grade;
        $this->password = $password;
    }
    
    public function getGrade() {
        return $this->grade;  // Access private property through method
    }
    
    private function validatePassword($pass) {
        return $this->password === $pass;
    }
}
```

### 7.3 Inheritance

**Parent Class:**
```php
class Animal {
    protected $name;
    protected $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function eat() {
        echo $this->name . " is eating";
    }
    
    public function sleep() {
        echo $this->name . " is sleeping";
    }
}
```

**Child Class:**
```php
class Dog extends Animal {
    private $breed;
    
    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age);  // Call parent constructor
        $this->breed = $breed;
    }
    
    public function bark() {
        echo $this->name . " says Woof!";
    }
    
    // Override parent method
    public function eat() {
        echo $this->name . " the dog is eating dog food";
    }
}
```

**Using Inheritance:**
```php
$dog = new Dog("Rex", 3, "German Shepherd");
$dog->eat();   // Rex the dog is eating dog food
$dog->sleep(); // Rex is sleeping
$dog->bark();  // Rex says Woof!
```

### 7.4 Magic Methods

**__toString() Method:**
```php
class Livraison {
    private $numero;
    private $date;
    private $frais;
    
    public function __construct($numero, $date, $frais) {
        $this->numero = $numero;
        $this->date = $date;
        $this->frais = $frais;
    }
    
    public function __toString() {
        return "Livraison #{$this->numero} - {$this->date} - {$this->frais}€";
    }
    
    public function afficher() {
        return "<tr><td>{$this->numero}</td><td>{$this->date}</td><td>{$this->frais}</td></tr>";
    }
}

$livraison = new Livraison("L001", "2025-01-15", 25.50);
echo $livraison;  // Calls __toString() automatically
```

## 📚 Chapter 8: Sessions and Cookies

### 8.1 Sessions

**Starting a Session:**
```php
session_start();  // Must be at the top of the page

// Set session variables
$_SESSION['username'] = 'Ali';
$_SESSION['user_id'] = 123;
$_SESSION['role'] = 'admin';

echo "Session started for " . $_SESSION['username'];
```

**Using Sessions for Login:**
```php
// login.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate user credentials (from database)
    $username = $_POST['username'];
    
    if (validateUser($username, $_POST['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid credentials";
    }
}
```

**Protecting Pages:**
```php
// protected_page.php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

echo "Welcome, " . $_SESSION['username'];
```

**Destroying Sessions:**
```php
session_start();

// Destroy specific session variable
unset($_SESSION['username']);

// Destroy all session variables
session_destroy();
```

### 8.2 Cookies

**Setting Cookies:**
```php
// Set cookie for 1 hour
setcookie("user_preference", "dark_mode", time() + 3600);

// Set cookie for 30 days
setcookie("remember_user", "Ali", time() + (30 * 24 * 60 * 60));

// Set cookie with path and domain
setcookie("site_lang", "fr", time() + 86400, "/", "example.com");
```

**Reading Cookies:**
```php
if (isset($_COOKIE['user_preference'])) {
    $theme = $_COOKIE['user_preference'];
    echo "User prefers: $theme";
} else {
    echo "No preference set";
}

// Check if cookie exists in array
if (array_key_exists('remember_user', $_COOKIE)) {
    $user = $_COOKIE['remember_user'];
    echo "Welcome back, $user";
}
```

**Deleting Cookies:**
```php
// Delete by setting expiration in the past
setcookie("user_preference", "", time() - 3600);
```

## 📚 Chapter 9: Complete Application Examples

### 9.1 Login System with Database

**Database Structure:**
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    email VARCHAR(100),
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

**Registration Form (register.html):**
```html
<form method="POST" action="register.php">
    <input type="text" name="username" required>
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <input type="submit" value="Register">
</form>
```

**Registration Processing (register.php):**
```php
<?php
require_once 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username, $email, $password]);
        echo "Registration successful";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
```

**Login Processing (login.php):**
```php
<?php
session_start();
require_once 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Invalid credentials";
    }
}
?>
```

### 9.2 File Upload System

**Upload Form:**
```html
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="uploaded_file" required>
    <input type="submit" value="Upload File">
</form>
```

**File Upload Processing:**
```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "File already exists.";
        $uploadOk = 0;
    }
    
    // Check file size (limit to 5MB)
    if ($_FILES["uploaded_file"]["size"] > 5000000) {
        echo "File is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    $allowed = array("jpg", "jpeg", "png", "gif", "pdf", "txt");
    if (!in_array($imageFileType, $allowed)) {
        echo "Only JPG, JPEG, PNG, GIF, PDF & TXT files are allowed.";
        $uploadOk = 0;
    }
    
    // Upload file if everything is ok
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully.";
        } else {
            echo "Upload failed.";
        }
    }
}
?>
```

## 🎯 Practice Exercises

### Exercise 1: Grade Calculator
Create a function that takes an array of scores and returns the average grade with a letter grade (A, B, C, D, F).

### Exercise 2: User Management System
Build a complete system with:
- User registration
- Login/logout
- Profile editing
- Password change

### Exercise 3: Simple Blog
Create a blog system with:
- Post creation
- Post listing
- Post editing
- Comments

### Exercise 4: File Manager
Build a file manager that can:
- List files in a directory
- Upload new files
- Delete files
- Download files

These exercises will help you practice combining all the concepts you've learned!