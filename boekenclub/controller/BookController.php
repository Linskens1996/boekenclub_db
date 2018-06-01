<?php

require(ROOT . "model/BookModel.php");

function index()
{
	render("book/index", array(
		'books' => getAllBooks()
	));

}
function create()
{
	render("book/create");
}
function addBook()
{
	insertBook($_POST);
	index();
	header("Location:" . URL . "book/index");
}

function delete($id)
{
	bookDeletion($id);
	render("book/index", array(
		'books' => getAllBooks()
	));
	header("Location:" . URL . "book/index");
}
function update()
{
	$id = $_GET["id"];
	render("book/update", array(
		'books' => book($id)
	));
}
