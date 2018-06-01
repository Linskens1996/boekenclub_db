<?php

function getAllBooks() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM booklist ORDER BY book_name ASC, book_author ASC";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}
function insertBook($bookData)
{
	$name = $bookData["name"];
	$author = $bookData["author"];
	$comment = $bookData["comment"];

	$db = openDatabaseConnection();
	$sql = "INSERT INTO booklist (`book_name`, `book_author`, `book_comment`) VALUES ('$name', '$author', '$comment')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;

	index();
	header("Location:" . URL . "book/index");
}
function bookDeletion($id)
{
	$db = openDatabaseConnection();
	$sql = "DELETE FROM booklist WHERE `booklist`.`book_id` = $id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}
function book($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM booklist WHERE `booklist`.`book_id` = $id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetch();
}
function updateBook()
{
	$id = $_POST["book_id"];
	$name = $_POST["book_name"];
	$author = $_POST["book_author"];
	$comment = $_POST["book_comment"];
	
	$db = openDatabaseConnection();
	$sql = "UPDATE booklist SET book_name='$name', book_author='$author', book_comment='$comment' WHERE book_id=$id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;

	index();
	header("Location:" . URL . "book/index");
}

