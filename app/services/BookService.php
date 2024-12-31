<?php
require_once __DIR__ . '/../models/BookModel.php';

class BookService {
    private $bookModel;

    public function __construct($pdo) {
        $this->bookModel = new BookModel($pdo);
    }

    public function getAllBooks() {
        return $this->bookModel->getAllBooks();
    }

    public function getBookDetails($id) {
        return $this->bookModel->getBookById($id);
    }

    public function addBook($data) {
        return $this->bookModel->createBook($data['title'], $data['author'], $data['category'], $data['published_year']);
    }

    public function updateBook($id, $data) {
        return $this->bookModel->updateBook($id, $data['title'], $data['author'], $data['category'], $data['published_year']);
    }

    public function removeBook($id) {
        return $this->bookModel->deleteBook($id);
    }
}
