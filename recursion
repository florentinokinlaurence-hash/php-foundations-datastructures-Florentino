<?php
// =============================================
// PART I — Recursive Directory Display
// =============================================

// Step 1: Create a nested array to simulate library categories
$library = [
    "Fiction" => [
        "Fantasy" => ["Harry Potter", "The Hobbit"],
        "Mystery" => ["Sherlock Holmes", "Gone Girl"]
    ],
    "Non-Fiction" => [
        "Science" => ["A Brief History of Time", "The Selfish Gene"],
        "Biography" => ["Steve Jobs", "Becoming"]
    ]
];

// Step 2: Create a recursive function to display categories and books
function displayLibrary($library, $indent = 0)
{
    foreach ($library as $category => $items) {
        // Print the category name with indentation
        echo str_repeat("&nbsp;", $indent * 4) . "<div><b>$category</b></div>";

        // Step 3: If the value is an array, call the function again
        if (is_array($items)) {
            displayLibrary($items, $indent + 1);
        } else {
            // Step 4: Otherwise, print the book title
            echo str_repeat("&nbsp;", ($indent + 1) * 4) . "$items<br>";
        }
    }
}

// Step 5: Run the function
echo "<h3>Library Categories (Recursion)</h3>";
displayLibrary($library);
?>
