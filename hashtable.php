<?php
// =============================================
// PART II — Hash Table for Book Details
// =============================================

// Step 1: Create associative array (hash table) for book info
$bookInfo = [
    "Harry Potter" => ["author" => "J.K. Rowling", "year" => 1997, "genre" => "Fantasy"],
    "The Hobbit" => ["author" => "J.R.R. Tolkien", "year" => 1937, "genre" => "Fantasy"],
    "Sherlock Holmes" => ["author" => "Arthur Conan Doyle", "year" => 1892, "genre" => "Mystery"],
    "Gone Girl" => ["author" => "Gillian Flynn", "year" => 2012, "genre" => "Mystery"],
    "A Brief History of Time" => ["author" => "Stephen Hawking", "year" => 1988, "genre" => "Science"],
    "The Selfish Gene" => ["author" => "Richard Dawkins", "year" => 1976, "genre" => "Science"],
    "Steve Jobs" => ["author" => "Walter Isaacson", "year" => 2011, "genre" => "Biography"],
    "Becoming" => ["author" => "Michelle Obama", "year" => 2018, "genre" => "Biography"]
];

// Step 2: Define function to retrieve details by book title
function getBookInfo($title, $bookInfo)
{
    if (array_key_exists($title, $bookInfo)) {
        $info = $bookInfo[$title];
        echo "<h3>Book Details</h3>";
        echo "Title: $title<br>";
        echo "Author: " . $info['author'] . "<br>";
        echo "Year: " . $info['year'] . "<br>";
        echo "Genre: " . $info['genre'] . "<br>";
    } else {
        echo "Book not found.";
    }
}

// Step 3: Example call
getBookInfo("Harry Potter", $bookInfo);
?>
