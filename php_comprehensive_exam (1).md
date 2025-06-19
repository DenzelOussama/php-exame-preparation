# PHP Programming Comprehensive Exam
**Time Limit: 4 hours**  
**Total Points: 120**

## Instructions
- Read all questions carefully before starting
- Code must follow PSR standards and be properly commented
- Test your code before submitting
- Handle errors and edge cases appropriately
- Use proper PHP syntax and security practices

---

## Question 1: PHP Basics and Syntax (20 points)

**a)** Create a PHP script that demonstrates proper use of variables, constants, and data types. Include examples of: strings, integers, floats, booleans, arrays, and NULL. Show type casting and variable interpolation. **(8 points)**

**b)** Write functions that demonstrate:
- Default parameter values
- Variable-length argument lists (using `...$args`)
- Return type declarations
- Anonymous functions (closures)
**(7 points)**

**c)** Create examples showing the difference between `==` and `===`, and demonstrate PHP's type juggling with at least 5 different comparisons. **(5 points)**

---

## Question 2: Object-Oriented Programming Structure (25 points)

Create a `Product` class system with the following requirements:

**a)** Base `Product` class with:
- Private properties: `id`, `name`, `price`, `description`, `created_at`
- Constructor with validation (price must be positive, name not empty)
- Getters and setters with proper validation
- Magic methods: `__toString()`, `__serialize()`, `__unserialize()`
**(10 points)**

**b)** Create an interface `Discountable` with methods:
- `applyDiscount(float $percentage): void`
- `getDiscountedPrice(): float`
**(3 points)**

**c)** Create `ElectronicsProduct` class that:
- Extends `Product`
- Implements `Discountable`
- Adds properties: `warranty_period`, `brand`
- Overrides `__toString()` method
- Has static method `createWithWarranty()`
**(7 points)**

**d)** Demonstrate inheritance, polymorphism, and method overriding with a practical example. **(5 points)**

---

## Question 3: Array Manipulation and Logic (20 points)

**a)** Create a function `processInventory($products)` that:
- Takes an associative array of products
- Filters products by price range using `array_filter()`
- Sorts by price using `usort()` with custom comparison
- Groups products by category using `array_reduce()`
- Returns summary statistics
**(8 points)**

**b)** Write a function `validateUserInput($data)` that:
- Uses control structures (if/else, switch, loops)
- Validates email, phone, age using appropriate logic
- Returns an array of validation errors or success message
- Demonstrates short-circuit evaluation
**(7 points)**

**c)** Create a recursive function `buildCategoryTree($categories, $parent_id = 0)` that builds a nested array structure from flat category data. **(5 points)**

---

## Question 4: Date Functions and Formatting (15 points)

**a)** Create a `DateHelper` class with static methods:
- `formatDate($date, $format)` - Format dates with error handling
- `calculateAge($birthdate)` - Calculate age in years
- `getTimezoneOffset($timezone)` - Get offset from UTC
- `isWeekend($date)` - Check if date falls on weekend
**(8 points)**

**b)** Write a function `generateDateRange($start, $end, $interval = '1 day')` that:
- Creates a DatePeriod object
- Returns array of formatted dates
- Handles different interval types
- Includes proper error handling for invalid dates
**(4 points)**

**c)** Create a method that calculates business days between two dates, excluding weekends and a provided array of holidays. **(3 points)**

---

## Question 5: Regular Expressions and Validation (20 points)

**a)** Create a `Validator` class with methods that use regex patterns:
- `validateEmail($email)` - Comprehensive email validation
- `validatePhone($phone)` - Multiple phone formats
- `validatePassword($password)` - Strong password requirements
- `validateURL($url)` - URL format validation
**(10 points)**

**b)** Write a function `extractDataFromText($text)` that uses regex to:
- Extract all email addresses
- Find phone numbers in various formats
- Extract dates in different formats (MM/DD/YYYY, DD-MM-YYYY, etc.)
- Return structured array with all findings
**(6 points)**

**c)** Create a `sanitizeHTML($input)` function that:
- Uses regex to remove dangerous HTML tags
- Allows only safe tags (p, br, strong, em)
- Sanitizes attributes properly
- Handles edge cases
**(4 points)**

---

## Question 6: PDO Database Operations (25 points)

**a)** Create a `DatabaseConnection` class using Singleton pattern:
- Manages PDO connection with proper error handling
- Supports multiple database types
- Includes connection pooling logic
- Has method to check connection status
**(8 points)**

**b)** Create a `ProductRepository` class that demonstrates:
- Prepared statements for CRUD operations
- Transaction handling
- Error handling with try-catch blocks
- Methods: `create()`, `findById()`, `findAll()`, `update()`, `delete()`
- Pagination support in `findAll()`
**(12 points)**

**c)** Write a function `migrateDatabase()` that:
- Creates necessary tables with proper data types
- Includes foreign key relationships
- Handles migration errors gracefully
- Supports rollback on failure
**(5 points)**

---

## Question 7: Error Handling and Custom Exceptions (15 points)

**a)** Create custom exception hierarchy:
- `AppException` (base exception)
- `ValidationException` extends `AppException`
- `DatabaseException` extends `AppException`
- `AuthenticationException` extends `AppException`
Each with custom properties and methods.
**(6 points)**

**b)** Implement global error handling:
- Custom error handler function
- Exception handler for uncaught exceptions
- Logging mechanism for different error levels
- User-friendly error pages
**(6 points)**

**c)** Create a `Logger` class that:
- Writes to files with rotation
- Supports different log levels
- Formats log entries with timestamp and context
- Handles write permissions errors
**(3 points)**

---

## Bonus Question: Advanced PHP Features (15 extra points)

**a)** Create a simple MVC structure:
- `Router` class for URL routing
- Base `Controller` class
- `View` class for template rendering
- Demonstrate with a working example
**(8 points)**

**b)** Implement a basic caching system:
- File-based cache with expiration
- Cache invalidation strategies
- Serialization of complex data
- Performance comparison methods
**(4 points)**

**c)** Create a `ConfigManager` class that:
- Loads configuration from different sources (PHP, JSON, INI)
- Supports environment-specific configs
- Implements dot notation for nested access
- Validates configuration values
**(3 points)**

---

## Testing and Integration Section (Required)

Write a comprehensive test script that demonstrates:

1. **Database Setup**: Create sample tables and insert test data
2. **Product Management**: Create, read, update, delete products
3. **Validation Testing**: Test all validation functions with valid/invalid data
4. **Date Operations**: Demonstrate all date functions with various inputs
5. **Regex Operations**: Test pattern matching with sample data
6. **Error Handling**: Trigger and handle different types of exceptions
7. **Performance Testing**: Basic timing of database operations

**Example expected output:**
```php
=== PHP Comprehensive Test Results ===
✓ Product created: Laptop #1001 - $999.99
✓ Email validation: test@example.com - VALID
✓ Database connection: SUCCESS
✓ Date calculation: Age 25 years, 3 months
✓ Regex extraction: Found 3 emails, 2 phone numbers
✗ Validation error: Password too weak
✓ Transaction completed: 5 products inserted
=== Performance Report ===
Database operations: 0.045 seconds
Regex processing: 0.002 seconds
Date calculations: 0.001 seconds
```

---

## Sample Database Schema

```sql
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    parent_id INT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## Code Quality Requirements

1. **PSR Standards**: Follow PSR-1, PSR-2, and PSR-4 standards
2. **Security**: Use prepared statements, input validation, output escaping
3. **Documentation**: PHPDoc comments for all classes and methods
4. **Naming**: Descriptive variable and function names
5. **Structure**: Logical file organization and autoloading
6. **Error Handling**: Comprehensive exception handling
7. **Performance**: Efficient algorithms and database queries

---

## Grading Criteria:
- **Functionality (50%)**: Code works as specified
- **PHP Syntax & Best Practices (20%)**: Proper PHP usage and conventions
- **Database Operations (15%)**: Correct PDO usage and SQL
- **Code Quality & Structure (10%)**: Clean, maintainable code
- **Testing & Documentation (5%)**: Comprehensive tests and comments

**Topics Covered:**
- ✅ PHP Syntax and Basics
- ✅ Object-Oriented Programming
- ✅ PDO Database Operations
- ✅ Logic and Control Structures
- ✅ Date Functions and Manipulation
- ✅ Regular Expressions
- ✅ Error Handling and Exceptions
- ✅ File Operations
- ✅ Security Best Practices

**Good luck! This exam covers everything you need to master PHP fundamentals without requiring additional tutorials.**