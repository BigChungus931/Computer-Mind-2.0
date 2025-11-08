## Variables and Data Types

### Declaring Variables

JavaScript has three ways to declare variables:

```javascript
var oldWay = "Don't use this anymore";
let modernWay = "Use this for variables that change";
const constantWay = "Use this for values that don't change";
```

**Best practices:**
- Use `const` by default
- Use `let` when you need to reassign the variable
- Avoid `var` (legacy syntax with confusing scope rules)

### Data Types

JavaScript has several built-in data types:

#### Primitive Types

**String** - Text data
```javascript
let firstName = "John";
let lastName = 'Doe';
let message = `Hello, ${firstName}!`; // Template literal
```

**Number** - Integers and decimals
```javascript
let age = 25;
let price = 99.99;
let negative = -10;
```

**Boolean** - True or false values
```javascript
let isStudent = true;
let isGraduated = false;
```

**Undefined** - Variable declared but not assigned
```javascript
let undefinedVariable;
console.log(undefinedVariable); // undefined
```

**Null** - Intentionally empty value
```javascript
let emptyValue = null;
```

#### Checking Data Types
```javascript
console.log(typeof "Hello");    // "string"
console.log(typeof 42);         // "number"
console.log(typeof true);       // "boolean"
console.log(typeof undefined);  // "undefined"
```

## Basic Operations

### Arithmetic Operators
```javascript
let a = 10;
let b = 3;

console.log(a + b);  // Addition: 13
console.log(a - b);  // Subtraction: 7
console.log(a * b);  // Multiplication: 30
console.log(a / b);  // Division: 3.333...
console.log(a % b);  // Modulus (remainder): 1
console.log(a ** b); // Exponentiation: 1000
```

### Assignment Operators
```javascript
let x = 10;
x += 5;  // Same as: x = x + 5 (now x is 15)
x -= 3;  // Same as: x = x - 3 (now x is 12)
x *= 2;  // Same as: x = x * 2 (now x is 24)
x /= 4;  // Same as: x = x / 4 (now x is 6)
```

### Comparison Operators
```javascript
let num1 = 5;
let num2 = "5";

console.log(num1 == num2);   // true (loose equality)
console.log(num1 === num2);  // false (strict equality)
console.log(num1 != num2);   // false (loose inequality)
console.log(num1 !== num2);  // true (strict inequality)
console.log(num1 > 3);       // true
console.log(num1 < 10);      // true
```

**Important:** Always use `===` and `!==` instead of `==` and `!=` to avoid unexpected type conversions.

## Working with Strings

### String Methods
```javascript
let text = "JavaScript is awesome!";

console.log(text.length);          // 21
console.log(text.toUpperCase());   // "JAVASCRIPT IS AWESOME!"
console.log(text.toLowerCase());   // "javascript is awesome!"
console.log(text.charAt(0));       // "J"
console.log(text.indexOf("Script")); // 4
console.log(text.slice(0, 10));    // "JavaScript"
```

### String Concatenation
```javascript
let firstName = "John";
let lastName = "Doe";

// Method 1: Using +
let fullName = firstName + " " + lastName;

// Method 2: Template literals (recommended)
let fullName2 = `${firstName} ${lastName}`;
let greeting = `Hello, ${firstName}! You are ${age} years old.`;
```

## Practice Exercises

### Exercise 1: Variable Declaration
Create variables for your personal information and display them:

```javascript
const name = "Your Name";
const age = 25;
const isStudent = true;
const favoriteColor = "blue";

console.log(`My name is ${name}`);
console.log(`I am ${age} years old`);
console.log(`Am I a student? ${isStudent}`);
console.log(`My favorite color is ${favoriteColor}`);
```

### Exercise 2: Simple Calculator
Create a simple calculator that performs basic operations:

```javascript
const num1 = 15;
const num2 = 4;

console.log(`${num1} + ${num2} = ${num1 + num2}`);
console.log(`${num1} - ${num2} = ${num1 - num2}`);
console.log(`${num1} * ${num2} = ${num1 * num2}`);
console.log(`${num1} / ${num2} = ${num1 / num2}`);
```

### Exercise 3: String Manipulation
Practice working with strings:

```javascript
const sentence = "I love learning JavaScript";

console.log(`Original: ${sentence}`);
console.log(`Length: ${sentence.length}`);
console.log(`Uppercase: ${sentence.toUpperCase()}`);
console.log(`First word: ${sentence.slice(0, 1)}`);
console.log(`Last character: ${sentence.charAt(sentence.length - 1)}`);
```

## Common Beginner Mistakes to Avoid

### 1. Forgetting to Declare Variables
```javascript
// Wrong
myVariable = 5;

// Correct
let myVariable = 5;
```

### 2. Using == Instead of ===
```javascript
// Can cause unexpected results
if (5 == "5") { /* This is true! */ }

// Better
if (5 === "5") { /* This is false, as expected */ }
```

### 3. Case Sensitivity Issues
```javascript
let userName = "John";
console.log(username); // Error! Variable not defined
```

### 4. Missing Quotes in Strings
```javascript
// Wrong
let message = Hello World;

// Correct
let message = "Hello World";
```

## Next Steps

After mastering these fundamentals, you'll be ready to learn about:

- Functions and scope
- Conditional statements (if/else)
- Loops (for, while)
- Arrays and objects
- DOM manipulation
- Event handling
- Asynchronous JavaScript

## Useful Resources

- **MDN Web Docs**: Comprehensive JavaScript documentation
- **JavaScript.info**: Modern JavaScript tutorial
- **freeCodeCamp**: Interactive coding challenges
- **Codecademy**: Structured JavaScript courses
- **YouTube**: Countless free video tutorials

## Tips for Learning JavaScript

1. **Practice regularly** - Code every day, even if it's just for 15 minutes
2. **Build projects** - Apply what you learn to real projects
3. **Read other people's code** - Learn from open-source projects
4. **Join communities** - Stack Overflow, Reddit, Discord servers
5. **Don't rush** - Take time to understand concepts thoroughly
6. **Debug actively** - Use console.log() to understand your code
7. **Keep it simple** - Start with small programs and gradually increase complexity

Remember: Everyone learns at their own pace. Don't get discouraged if something doesn't click immediately. Keep practicing, and you'll get there!

---

*Happy coding! 🚀*