<?php
// =============================================
// PART III — Binary Search Tree (BST)
// =============================================

// Step 1: Define Node class
class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

// Step 2: Define BinarySearchTree class
class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    // Insert a new node
    public function insert($data) {
        $this->root = $this->_insert($this->root, $data);
    }

    private function _insert($node, $data) {
        if ($node === null) return new Node($data);
        if ($data < $node->data)
            $node->left = $this->_insert($node->left, $data);
        else
            $node->right = $this->_insert($node->right, $data);
        return $node;
    }

    // Search for a node
    public function search($data) {
        return $this->_search($this->root, $data);
    }

    private function _search($node, $data) {
        if ($node === null) return false;
        if ($data == $node->data) return true;
        if ($data < $node->data)
            return $this->_search($node->left, $data);
        else
            return $this->_search($node->right, $data);
    }

    // Inorder traversal
    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->data . "<br>";
            $this->inorderTraversal($node->right);
        }
    }
}

// Step 3: Example usage
$bst = new BinarySearchTree();
$books = ["Harry Potter", "The Hobbit", "Gone Girl", "Sherlock Holmes", "Becoming"];
foreach ($books as $book) {
    $bst->insert($book);
}

echo "<h3>Books in Alphabetical Order (BST)</h3>";
$bst->inorderTraversal($bst->root);

echo "<h3>Search Example</h3>";
$title = "Gone Girl";
echo $bst->search($title) ? "✅ $title found." : "❌ $title not found.";
?>
