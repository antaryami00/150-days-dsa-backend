# Day 8 – Strings Basics

In programming, a string is simply a sequence of characters (letters, numbers, symbols, or even spaces) treated as a single piece of text.

# Creating Strings

$name = "Ram";

// Single quotes: Literal
echo 'Hello, $name'; 
// Output: Hello, $name

// Double quotes: Interpreted
echo "Hello, $name"; 
// Output: Hello, Ram


# Concatenation (Joining Strings)

$firstName = "John";
$lastName = "Doe";

// Joining three strings together
$fullName = $firstName . " " . $lastName;

echo $fullName; // Output: John Doe


Function,       What it does,                           Example
strlen(),       Returns the length of the string,       "strlen(""Hey"") → 3"
str_replace(),  Replaces specific words,                "str_replace(""World"", ""PHP"", ""Hello World"")"
strtoupper(),   Converts to ALL CAPS,                   "strtoupper(""hello"") → HELLO"
substr(),       Grabs a portion of a string,            "substr(""Language"", 0, 4) → Lang"
trim(),         Removes extra spaces from ends,         "trim(""  space  "") → ""space"""


Key operations:
• Length → O(n)
• Access by index → O(1)
• Traversal → O(n)

