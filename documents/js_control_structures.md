# JavaScript Control Structures

## What are Control Structures?

Control structures are programming constructs that allow you to control the flow of your program's execution. Instead of running code line by line from top to bottom, control structures let you make decisions, repeat code, and create more complex logic.

**Types of control structures:**
- **Conditional statements** - Make decisions (if, else, switch)
- **Loops** - Repeat code (for, while, do-while)
- **Jump statements** - Alter flow (break, continue, return)

In this guide, we'll focus on conditional statements and decision-making structures.

## If Statements

The `if` statement is the most basic control structure. It executes code only when a specific condition is true.

### Basic If Statement

```javascript
let age = 18;

if (age >= 18) {
    console.log("You are an adult");
}
```

**Syntax breakdown:**
- `if` - keyword that starts the conditional
- `(condition)` - expression that evaluates to true or false
- `{ }` - code block that runs if condition is true

### If-Else Statement

Use `else` to specify code that runs when the condition is false:

```javascript
let temperature = 15;

if (temperature > 25) {
    console.log("It's hot outside!");
} else {
    console.log("It's cool outside!");
}
```

### If-Else If-Else Chain

For multiple conditions, use `else if`:

```javascript
let score = 85;

if (score >= 90) {
    console.log("Grade: A");
} else if (score >= 80) {
    console.log("Grade: B");
} else if (score >= 70) {
    console.log("Grade: C");
} else if (score >= 60) {
    console.log("Grade: D");
} else {
    console.log("Grade: F");
}
```

**Important:** Conditions are checked in order. Once one is true, the rest are skipped.

### Nested If Statements

You can put if statements inside other if statements:

```javascript
let age = 25;
let hasLicense = true;

if (age >= 18) {
    if (hasLicense) {
        console.log("You can drive!");
    } else {
        console.log("You need to get a license first.");
    }
} else {
    console.log("You're too young to drive.");
}
```

**Tip:** Too much nesting makes code hard to read. Try to limit nesting to 2-3 levels.

## Comparison Operators

Conditions use comparison operators to evaluate expressions:

```javascript
let x = 10;
let y = 5;

// Equality
console.log(x == y);   // false (loose equality)
console.log(x === y);  // false (strict equality)

// Inequality
console.log(x != y);   // true (loose inequality)
console.log(x !== y);  // true (strict inequality)

// Greater than / Less than
console.log(x > y);    // true
console.log(x < y);    // false
console.log(x >= 10);  // true
console.log(x <= 5);   // false
```

### Strict vs Loose Equality

```javascript
let num = 5;
let str = "5";

console.log(num == str);   // true (converts types)
console.log(num === str);  // false (checks type too)

console.log(num != str);   // false
console.log(num !== str);  // true
```

**Best practice:** Always use `===` and `!==` to avoid unexpected type coercion.

## Logical Operators

Combine multiple conditions with logical operators:

### AND Operator (&&)

Both conditions must be true:

```javascript
let age = 25;
let hasTicket = true;

if (age >= 18 && hasTicket) {
    console.log("You can enter the concert");
}

// More examples
let isWeekend = true;
let isSunny = true;

if (isWeekend && isSunny) {
    console.log("Perfect day for a picnic!");
}
```

### OR Operator (||)

At least one condition must be true:

```javascript
let day = "Saturday";

if (day === "Saturday" || day === "Sunday") {
    console.log("It's the weekend!");
}

// Another example
let hasCard = false;
let hasCash = true;

if (hasCard || hasCash) {
    console.log("You can make a purchase");
}
```

### NOT Operator (!)

Reverses a boolean value:

```javascript
let isRaining = false;

if (!isRaining) {
    console.log("No umbrella needed!");
}

// More examples
let isLoggedIn = true;

if (!isLoggedIn) {
    console.log("Please log in");
} else {
    console.log("Welcome back!");
}
```

### Combining Logical Operators

```javascript
let age = 25;
let hasID = true;
let isVIP = false;

// Complex condition
if ((age >= 21 && hasID) || isVIP) {
    console.log("Entry granted");
}

// Another example
let isMorning = true;
let hasCoffee = false;
let isWeekday = true;

if (isMorning && !hasCoffee && isWeekday) {
    console.log("Need coffee ASAP!");
}
```

**Tip:** Use parentheses `()` to make complex conditions clearer.

## Truthy and Falsy Values

JavaScript considers some values as "falsy" (treated as false) and others as "truthy" (treated as true):

### Falsy Values

```javascript
// These are all falsy:
if (false) { }           // false
if (0) { }               // zero
if ("") { }              // empty string
if (null) { }            // null
if (undefined) { }       // undefined
if (NaN) { }             // Not a Number

// Example
let username = "";

if (username) {
    console.log(`Welcome, ${username}`);
} else {
    console.log("Please enter a username");
}
```

### Truthy Values

Everything else is truthy:

```javascript
if (true) { }            // true
if (1) { }               // any non-zero number
if ("hello") { }         // any non-empty string
if ([]) { }              // arrays (even empty)
if ({}) { }              // objects (even empty)

// Example
let items = [1, 2, 3];

if (items.length) {
    console.log("Cart has items");
}
```

## Ternary Operator

A shorthand for simple if-else statements:

### Basic Syntax

```javascript
condition ? valueIfTrue : valueIfFalse
```

### Examples

```javascript
// Instead of this:
let age = 20;
let status;

if (age >= 18) {
    status = "adult";
} else {
    status = "minor";
}

// Write this:
let status = age >= 18 ? "adult" : "minor";

// More examples
let score = 85;
let result = score >= 60 ? "Pass" : "Fail";
console.log(result); // "Pass"

let isMember = true;
let price = isMember ? 10 : 15;
console.log(`Price: $${price}`); // "Price: $10"
```

### Nested Ternary (Use Sparingly)

```javascript
let score = 85;
let grade = score >= 90 ? "A" : 
            score >= 80 ? "B" : 
            score >= 70 ? "C" : "F";

console.log(grade); // "B"
```

**Warning:** Nested ternaries can be hard to read. Use if-else for complex logic.

## Switch Statements

The `switch` statement is useful when you have many possible values to check:

### Basic Switch

```javascript
let day = "Monday";

switch (day) {
    case "Monday":
        console.log("Start of the work week");
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        console.log("Middle of the week");
        break;
    case "Friday":
        console.log("Almost weekend!");
        break;
    case "Saturday":
    case "Sunday":
        console.log("Weekend!");
        break;
    default:
        console.log("Invalid day");
}
```

### Switch Syntax Breakdown

```javascript
switch (expression) {
    case value1:
        // code to execute if expression === value1
        break;
    case value2:
        // code to execute if expression === value2
        break;
    default:
        // code to execute if no cases match
}
```

**Key points:**
- Uses strict equality (`===`) for comparison
- `break` prevents fall-through to next case
- `default` is optional but recommended
- Multiple cases can share the same code block

### Switch vs If-Else

```javascript
// Switch is cleaner for many exact matches:
let fruit = "apple";

switch (fruit) {
    case "apple":
        console.log("Apples are $1");
        break;
    case "banana":
        console.log("Bananas are $0.50");
        break;
    case "orange":
        console.log("Oranges are $0.75");
        break;
    default:
        console.log("Unknown fruit");
}

// If-else is better for ranges and complex conditions:
let score = 85;

if (score >= 90) {
    console.log("A");
} else if (score >= 80) {
    console.log("B");
} else if (score >= 70) {
    console.log("C");
}
```

### Switch with Fall-Through

Sometimes you want fall-through behavior (omit `break`):

```javascript
let month = 2;
let days;

switch (month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        days = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        days = 30;
        break;
    case 2:
        days = 28;
        break;
    default:
        days = "Invalid month";
}

console.log(`This month has ${days} days`);
```

### Switch with Expressions

```javascript
let grade = 85;
let letterGrade;

switch (true) {
    case grade >= 90:
        letterGrade = "A";
        break;
    case grade >= 80:
        letterGrade = "B";
        break;
    case grade >= 70:
        letterGrade = "C";
        break;
    case grade >= 60:
        letterGrade = "D";
        break;
    default:
        letterGrade = "F";
}

console.log(letterGrade);
```

**Note:** This technique works but if-else is usually clearer for range checks.

## Common Patterns and Best Practices

### 1. Guard Clauses (Early Returns)

Instead of deep nesting, handle edge cases first:

```javascript
// Not ideal (nested):
function checkAge(age) {
    if (age !== undefined) {
        if (age >= 0) {
            if (age < 120) {
                console.log("Valid age");
            } else {
                console.log("Age too high");
            }
        } else {
            console.log("Age cannot be negative");
        }
    } else {
        console.log("Age is required");
    }
}

// Better (guard clauses):
function checkAge(age) {
    if (age === undefined) {
        console.log("Age is required");
        return;
    }
    
    if (age < 0) {
        console.log("Age cannot be negative");
        return;
    }
    
    if (age >= 120) {
        console.log("Age too high");
        return;
    }
    
    console.log("Valid age");
}
```

### 2. Default Values

```javascript
let userRole = userInput || "guest";

// Or with ternary:
let theme = isDarkMode ? "dark" : "light";

// Or with nullish coalescing (modern):
let username = providedName ?? "Anonymous";
```

### 3. Avoid Magic Numbers

```javascript
// Bad:
if (userType === 1) {
    console.log("Admin");
}

// Good:
const USER_TYPE_ADMIN = 1;
const USER_TYPE_USER = 2;
const USER_TYPE_GUEST = 3;

if (userType === USER_TYPE_ADMIN) {
    console.log("Admin");
}
```

### 4. Keep Conditions Simple

```javascript
// Hard to read:
if (!(!isLoggedIn || !hasPermission || isBlocked)) {
    // do something
}

// Clearer:
let canAccess = isLoggedIn && hasPermission && !isBlocked;
if (canAccess) {
    // do something
}
```

## Practice Exercises

### Exercise 1: Grade Calculator

```javascript
// Create a grade calculator
let score = 87;

// Write code to determine letter grade
// A: 90-100, B: 80-89, C: 70-79, D: 60-69, F: below 60

if (score >= 90) {
    console.log("Grade: A");
} else if (score >= 80) {
    console.log("Grade: B");
} else if (score >= 70) {
    console.log("Grade: C");
} else if (score >= 60) {
    console.log("Grade: D");
} else {
    console.log("Grade: F");
}
```

### Exercise 2: Number Checker

```javascript
// Check if a number is positive, negative, or zero
let num = -5;

if (num > 0) {
    console.log("Positive number");
} else if (num < 0) {
    console.log("Negative number");
} else {
    console.log("Zero");
}
```

### Exercise 3: Leap Year Calculator

```javascript
// Determine if a year is a leap year
let year = 2024;

if (year % 4 === 0) {
    if (year % 100 === 0) {
        if (year % 400 === 0) {
            console.log(`${year} is a leap year`);
        } else {
            console.log(`${year} is not a leap year`);
        }
    } else {
        console.log(`${year} is a leap year`);
    }
} else {
    console.log(`${year} is not a leap year`);
}
```

### Exercise 4: Simple Login System

```javascript
// Check username and password
const correctUsername = "admin";
const correctPassword = "pass123";

let username = "admin";
let password = "pass123";

if (username === correctUsername && password === correctPassword) {
    console.log("Login successful!");
} else if (username !== correctUsername) {
    console.log("Invalid username");
} else {
    console.log("Invalid password");
}
```

### Exercise 5: Day Type Checker

```javascript
// Determine if a day is a weekday or weekend
let day = "Saturday";

switch (day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        console.log("Weekday");
        break;
    case "Saturday":
    case "Sunday":
        console.log("Weekend");
        break;
    default:
        console.log("Invalid day");
}
```

### Exercise 6: Traffic Light

```javascript
// Simulate a traffic light
let light = "yellow";

switch (light) {
    case "red":
        console.log("Stop!");
        break;
    case "yellow":
        console.log("Slow down!");
        break;
    case "green":
        console.log("Go!");
        break;
    default:
        console.log("Invalid light color");
}
```

### Exercise 7: Temperature Advisor

```javascript
// Give advice based on temperature
let temp = 15;

if (temp < 0) {
    console.log("It's freezing! Wear a heavy coat.");
} else if (temp < 10) {
    console.log("It's cold! Wear a jacket.");
} else if (temp < 20) {
    console.log("It's cool. A light jacket would be good.");
} else if (temp < 30) {
    console.log("It's warm! T-shirt weather.");
} else {
    console.log("It's hot! Stay hydrated.");
}
```

### Exercise 8: Age Category

```javascript
// Categorize age groups
let age = 45;

if (age < 13) {
    console.log("Child");
} else if (age < 20) {
    console.log("Teenager");
} else if (age < 60) {
    console.log("Adult");
} else {
    console.log("Senior");
}
```

## Common Mistakes to Avoid

### 1. Forgetting Break in Switch

```javascript
// Wrong - will execute all cases after match:
let value = 2;

switch (value) {
    case 1:
        console.log("One");
    case 2:
        console.log("Two");    // Executes this
    case 3:
        console.log("Three");  // And this!
    default:
        console.log("Other");  // And this!
}

// Correct:
switch (value) {
    case 1:
        console.log("One");
        break;
    case 2:
        console.log("Two");
        break;
    case 3:
        console.log("Three");
        break;
    default:
        console.log("Other");
}
```

### 2. Using Assignment (=) Instead of Comparison (===)

```javascript
// Wrong:
if (x = 5) {  // This assigns 5 to x!
    console.log("This always runs");
}

// Correct:
if (x === 5) {
    console.log("x equals 5");
}
```

### 3. Confusing && and ||

```javascript
// Wrong logic:
let age = 15;
if (age < 18 || age > 65) {
    console.log("Discount eligible");  // Only one needs to be true
}

// Probably meant:
if (age < 18) {
    console.log("Youth discount");
} else if (age > 65) {
    console.log("Senior discount");
}
```

### 4. Unnecessary Conditions

```javascript
// Redundant:
if (isTrue === true) {
    console.log("Yes");
}

// Simpler:
if (isTrue) {
    console.log("Yes");
}

// Redundant:
if (isReady === true) {
    return true;
} else {
    return false;
}

// Simpler:
return isReady;
```

### 5. Order of Conditions

```javascript
// Wrong - first condition catches everything:
let score = 95;

if (score >= 60) {
    console.log("Pass");
} else if (score >= 90) {  // Never reached!
    console.log("Excellent");
}

// Correct - most specific first:
if (score >= 90) {
    console.log("Excellent");
} else if (score >= 60) {
    console.log("Pass");
}
```

## When to Use What

### Use If-Else When:
- Checking ranges of values
- Using complex conditions
- Combining multiple conditions with && or ||
- Condition logic varies significantly

### Use Switch When:
- Checking exact values (strings, numbers)
- Many possible discrete values
- Code readability is priority
- Fall-through behavior is useful

### Use Ternary When:
- Simple condition with two outcomes
- Assigning values based on condition
- Want concise, inline expressions
- Not nesting multiple ternaries

## Next Steps

Now that you understand control structures, you're ready to learn:

- Loops (for, while, do-while)
- Functions and scope
- Arrays and array methods
- Objects and properties
- Error handling (try-catch)
- Modern JavaScript features

## Key Takeaways

1. **If statements** let you make decisions in your code
2. **Comparison operators** (===, !==, >, <, >=, <=) evaluate conditions
3. **Logical operators** (&&, ||, !) combine conditions
4. **Ternary operator** provides shorthand for simple if-else
5. **Switch statements** are great for checking exact values
6. **Always use** `===` instead of `==`
7. **Break statements** prevent fall-through in switch
8. **Keep conditions simple** and readable
9. **Guard clauses** reduce nesting
10. **Practice regularly** to build intuition

Remember: Control structures are the building blocks of program logic. Master these, and you'll be able to build more complex and interesting applications!

---

*Happy coding! 🎯*
