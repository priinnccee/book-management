<?php
class BookModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllBooks() {
        $stmt = $this->pdo->query("SELECT * FROM books");
        return $stmt->fetchAll();
    }

    public function getBookById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM books WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function createBook($title, $author, $category, $published_year) {
        $stmt = $this->pdo->prepare("INSERT INTO books (title, author, category, published_year) VALUES (:title, :author, :category, :published_year)");
        return $stmt->execute([
            'title' => $title,
            'author' => $author,
            'category' => $category,
            'published_year' => $published_year
        ]);
    }

    public function updateBook($id, $title, $author, $category, $published_year) {
        $stmt = $this->pdo->prepare("UPDATE books SET title = :title, author = :author, category = :category, published_year = :published_year WHERE id = :id");
        return $stmt->execute([
            'id' => $id,
            'title' => $title,
            'author' => $author,
            'category' => $category,
            'published_year' => $published_year
        ]);
    }

    public function deleteBook($id) {
        $stmt = $this->pdo->prepare("DELETE FROM books WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
