<?php 
declare (strict_types = 1);

// Page setup
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
$db = new ConnectToDatabase;

if(!isset($_GET['id'])){

    // Set message
    setMessage('Input went missing! Please try again.', 'Woops!', 'danger');

    // Redirect back to my_news
    header('location: /my_news.php');
    exit;
}

// Sanitize user input
foreach($_GET as $key => $value){
    $_GET[$key] = strip_tags(htmlentities($value));
}

// Set insert query & parameters
$query = 'DELETE FROM posts WHERE id=:id AND author=:author;';
$params = [
    ':id' => $_GET['id'],
    ':author' => $_SESSION['user']['id']
];

// If data successfully removed
if($db->setData($query, $params)){

    // Set message
    setMessage('Successfully removed the article!', 'Article deleted.', 'success');

    // Redirect back to my news
    header('location: /my_news.php');
    exit;
}else{
    
    // Set message
    setMessage('Failed to remove the article.', 'Could not remove article!', 'danger');

    // Redirect back to my news
    header('location: /my_news.php');
    exit;
}