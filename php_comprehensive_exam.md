# Complete PHP Basics Mastery Exam

## Part 1: PHP Syntax & Fundamentals (25 exercises)

### Variables & Data Types
1. **Variable Declaration**: Create variables for name, age, height, and isStudent (boolean)
2. **Type Juggling**: Create a variable with integer 5, then change it to string "5", then to float 5.5
3. **Constants**: Define constants for PI, SITE_NAME, and MAX_USERS using both `define()` and `const`
4. **Variable Variables**: Create a variable `$type = "color"` and use it to create `$$type = "blue"`
5. **Reference Variables**: Create two variables where changing one affects the other using references

### Strings
6. **String Concatenation**: Combine first name and last name with a space between
7. **String Interpolation**: Use double quotes to embed variables in a sentence
8. **Heredoc/Nowdoc**: Create a multi-line string using both heredoc and nowdoc syntax
9. **String Functions**: Use `strlen()`, `substr()`, `strpos()`, `str_replace()` on a sample string
10. **String Formatting**: Format a number as currency using `number_format()`

### Arrays
11. **Indexed Arrays**: Create an array of 5 fruits and access the 3rd element
12. **Associative Arrays**: Create a person array with keys: name, age, city, email
13. **Multidimensional Arrays**: Create an array of 3 students, each with name, grades array
14. **Array Functions**: Use `array_push()`, `array_pop()`, `count()`, `in_array()`
15. **Array Iteration**: Loop through an associative array showing keys and values

### Control Structures
16. **If/Else Logic**: Check if a number is positive, negative, or zero
17. **Switch Statement**: Create a grade calculator (A, B, C, D, F) based on score
18. **Ternary Operator**: Use ternary to set a default value if variable is empty
19. **Null Coalescing**: Use `??` operator to provide fallback values
20. **Match Expression**: Use `match()` to return different messages based on user role

### Loops
21. **For Loop**: Print numbers 1-10, but skip 5 using `continue`
22. **While Loop**: Generate random numbers until you get one greater than 0.8
23. **Foreach**: Loop through an array and modify each element by reference
24. **Nested Loops**: Create a multiplication table (1-5) using nested loops
25. **Loop Control**: Use `break` to exit a loop when a condition is met

### Date & Time Functions
26. **Current Date/Time**: Display current date in different formats (Y-m-d, d/m/Y, F j, Y)
27. **Date Creation**: Create specific dates using `mktime()` and `strtotime()`
28. **Date Arithmetic**: Add/subtract days, months, years from a given date
29. **Date Comparison**: Compare two dates and find the difference in days
30. **Timezone Handling**: Work with different timezones using `DateTime` class
31. **Date Validation**: Validate if a given date string is valid
32. **Age Calculator**: Calculate person's age from birthdate
33. **Working Days**: Calculate working days between two dates (excluding weekends)
34. **Date Formatting**: Format timestamps into readable strings
35. **Relative Time**: Create "time ago" function (5 minutes ago, 2 hours ago, etc.)

### Regular Expressions (PCRE)
36. **Basic Pattern Matching**: Use `preg_match()` to find patterns in strings
37. **Email Validation**: Create regex pattern to validate email addresses
38. **Phone Number Validation**: Validate different phone number formats
39. **Password Strength**: Check password requirements (length, uppercase, digits, symbols)
40. **Text Extraction**: Use `preg_match_all()` to extract multiple matches
41. **String Replacement**: Use `preg_replace()` to replace patterns
42. **Data Cleaning**: Remove unwanted characters using regex
43. **URL Validation**: Validate and extract URLs from text
44. **Credit Card Masking**: Mask credit card numbers (show only last 4 digits)
45. **Input Sanitization**: Clean user input with regex patterns

## Part 2: Functions & Scope (15 exercises)

### Function Basics
46. **Simple Function**: Create a function that calculates the area of a rectangle
47. **Default Parameters**: Function with optional parameters for formatting a name
48. **Variable Arguments**: Function using `...$args` to sum unlimited numbers
49. **Return Types**: Function with strict return type declaration
50. **Anonymous Functions**: Create and use an anonymous function assigned to a variable

### Advanced Functions
51. **Closures**: Create a closure that captures a variable from parent scope
52. **Arrow Functions**: Convert a regular function to arrow function syntax
53. **Callback Functions**: Create a function that accepts another function as parameter
54. **Higher-Order Functions**: Use `array_map()` and `array_filter()` with callbacks
55. **Recursive Function**: Calculate factorial using recursion

### Scope & Superglobals
56. **Variable Scope**: Demonstrate local, global, and static variables
57. **Global Keyword**: Access global variables inside functions
58. **Superglobals**: Use `$_GET`, `$_POST`, `$_SESSION`, `$_COOKIE`
59. **Static Variables**: Function that remembers how many times it was called
60. **Include/Require**: Split code into multiple files and include them

## Part 3: Object-Oriented Programming (20 exercises)

### Class Basics
61. **Simple Class**: Create a Car class with properties and methods
62. **Constructor**: Add `__construct()` method to initialize object properties
63. **Destructor**: Add `__destruct()` method that runs when object is destroyed
64. **Property Visibility**: Use public, private, and protected properties
65. **Method Visibility**: Create public, private, and protected methods

### Inheritance & Polymorphism
66. **Class Inheritance**: Create Vehicle parent class and Car child class
67. **Method Override**: Override parent method in child class
68. **Abstract Classes**: Create abstract Shape class with concrete Circle class
69. **Interfaces**: Define and implement a Drawable interface
70. **Traits**: Create a trait and use it in multiple classes

### Magic Methods
71. **__toString()**: Make object printable as string
72. **__get()/__set()**: Handle dynamic property access
73. **__call()**: Handle calls to undefined methods
74. **__clone()**: Control object cloning behavior
75. **__serialize()**: Custom serialization logic

### Advanced OOP
76. **Static Methods**: Create utility methods that don't need object instance
77. **Constants**: Define class constants and access them
78. **Type Hinting**: Use type hints for method parameters and return values
79. **Namespaces**: Organize classes into namespaces and use them
80. **Autoloading**: Implement class autoloading with `spl_autoload_register()`

## Part 4: Error Handling & Validation (10 exercises)

### Error Handling
81. **Try-Catch**: Handle exceptions with proper error messages
82. **Custom Exceptions**: Create and throw custom exception classes
83. **Finally Block**: Use finally block for cleanup operations
84. **Multiple Catch**: Catch different exception types with different handlers
85. **Error Logging**: Log errors to file instead of displaying them

### Data Validation
86. **Form Validation**: Validate email, phone, and required fields
87. **Filter Functions**: Use `filter_var()` to validate and sanitize input
88. **Regular Expressions**: Validate password strength with regex
89. **CSRF Protection**: Implement basic CSRF token validation
90. **Input Sanitization**: Clean user input to prevent XSS

## Part 5: File Handling & Sessions (10 exercises)

### File Operations
91. **File Reading**: Read entire file and line by line
92. **File Writing**: Write data to file with proper error handling
93. **File Upload**: Handle file upload with validation
94. **Directory Operations**: List, create, and delete directories
95. **File Permissions**: Check and modify file permissions

### Sessions & Cookies
96. **Session Management**: Start session, store data, destroy session
97. **Login System**: Basic login/logout with session persistence
98. **Remember Me**: Implement "remember me" functionality with cookies
99. **Session Security**: Regenerate session ID and handle session fixation
100. **Shopping Cart**: Session-based shopping cart functionality

## Part 6: Database Operations with PDO (15 exercises)

### PDO Basics
101. **Database Connection**: Connect to MySQL using PDO with error handling
102. **Connection Configuration**: Use DSN string and set PDO attributes
103. **Error Modes**: Set different PDO error modes and handle them
104. **Connection Reuse**: Create reusable database connection class
105. **Multiple Databases**: Connect to different databases in same script

### CRUD Operations
106. **Insert Data**: Insert new records using prepared statements
107. **Select Data**: Fetch data with different fetch modes
108. **Update Records**: Update existing records safely
109. **Delete Records**: Delete records with confirmation
110. **Batch Operations**: Insert multiple records in single query

### Advanced PDO
111. **Prepared Statements**: Use named and positional parameters
112. **Transactions**: Implement database transactions with rollback
113. **Stored Procedures**: Call MySQL stored procedures
114. **Result Pagination**: Implement LIMIT/OFFSET pagination
115. **Data Binding**: Bind different parameter types (INT, STR, BOOL)

## Part 7: Web Development Essentials (10 exercises)

### HTTP & Forms
116. **Form Processing**: Process GET and POST form data
117. **File Upload Forms**: Create and process file upload forms
118. **Form Validation**: Client and server-side form validation
119. **HTTP Headers**: Set custom headers and handle redirects
120. **REST API**: Create simple REST endpoints (GET, POST, PUT, DELETE)

### Security & Best Practices
121. **SQL Injection Prevention**: Demonstrate vulnerable vs secure code
122. **XSS Prevention**: Escape output and sanitize input
123. **Password Hashing**: Use `password_hash()` and `password_verify()`
124. **HTTPS Enforcement**: Force SSL and secure cookie settings
125. **Rate Limiting**: Implement basic rate limiting for API endpoints

## Practical Projects (5 comprehensive exercises)

### Project 1: User Management System
**Requirements:**
- User registration with validation
- Secure login/logout
- Password reset functionality
- User profile management
- Session management
- Database integration with PDO

### Project 2: Event Management System
**Requirements:**
- Create events with date/time scheduling
- Calculate event duration and time remaining
- Handle different timezones for global events
- Age verification for event attendance
- Generate reports by date ranges
- Send reminders based on time calculations

### Project 3: Shopping Cart
**Requirements:**
- Product catalog with categories
- Add/remove items from cart
- Session-based cart persistence
- Order processing
- Inventory management
- User accounts

### Project 4: File Manager
**Requirements:**
- Upload, download, delete files
- Directory navigation
- File type validation
- Image thumbnail generation
- Access control
- Bulk operations

### Project 5: API with Authentication
**Requirements:**
- RESTful API endpoints
- JWT authentication
- Rate limiting
- Input validation
- Error handling
- API documentation

## Answer Key Guidelines

For each exercise, your solution should include:
1. **Working code** that solves the problem
2. **Error handling** where appropriate
3. **Comments** explaining complex logic
4. **Security considerations** for web-facing code
5. **Best practices** implementation

## Evaluation Criteria

### Beginner Level (Exercises 1-40)
- Correct syntax
- Working functionality
- Basic error handling

### Intermediate Level (Exercises 41-80)
- Object-oriented principles
- Proper error handling
- Security awareness
- Code organization

### Advanced Level (Exercises 81-105 + Projects)
- Database integration
- Security best practices
- Performance considerations
- Professional code structure

## Study Tips

1. **Practice Daily**: Do 5-10 exercises per day
2. **Test Everything**: Run every piece of code you write
3. **Read Documentation**: Refer to PHP manual for functions
4. **Debug Actively**: Use `var_dump()`, `print_r()` for debugging
5. **Security First**: Always consider security implications
6. **Refactor Code**: Improve your solutions after they work
7. **Build Projects**: Complete all 5 practical projects

## Next Steps After Completion

1. **Framework Learning**: Laravel, Symfony, or CodeIgniter
2. **Advanced Topics**: Composer, unit testing, design patterns
3. **Modern PHP**: PHP 8+ features, attributes, enums
4. **Performance**: Caching, optimization, profiling
5. **DevOps**: Docker, deployment, CI/CD

Complete this exam thoroughly, and you'll have a solid PHP foundation that rivals any tutorial series!