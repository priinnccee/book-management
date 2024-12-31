# Book Management

## Folder Structure

```bash

book-management/
│
├── public/
│   ├── assets/
│   │   ├── css/
│   │   ├── js/
│   │   └── images/
│   └── index.php
│
└── app/
    ├── config/
    │   └── db.php
    ├── includes/
    │   ├── header.php
    │   └── footer.php
    ├── services/
    │   ├── BookService.php
    │   ├── AdminService.php
    │   └── CategoryService.php
    ├── models/
    │   ├── BookModel.php
    │   ├── AdminModel.php
    │   └── CategoryModel.php
    ├── admin/
    │   ├── login.php
    │   └── dashboard.php
    ├── books/
    │   ├── index.php
    │   ├── create.php
    │   ├── edit.php
    │   └── delete.php
    └── categories/
        ├── index.php
        ├── create.php
        ├── edit.php
        └── delete.php


```

## Command to Create Folder Structure

```bash

mkdir -p book-management/{public/assets/{css,js,images},app/{config,includes,services,models,admin,books,categories}} && \
touch book-management/public/index.php && \
touch book-management/public/assets/css/style.css && \
touch book-management/public/assets/js/script.js && \
touch book-management/app/config/db.php && \
touch book-management/app/includes/header.php && \
touch book-management/app/includes/footer.php && \
touch book-management/app/services/BookService.php && \
touch book-management/app/services/AdminService.php && \
touch book-management/app/services/CategoryService.php && \
touch book-management/app/models/BookModel.php && \
touch book-management/app/models/AdminModel.php && \
touch book-management/app/models/CategoryModel.php && \
touch book-management/app/admin/login.php && \
touch book-management/app/admin/dashboard.php && \
touch book-management/app/books/index.php && \
touch book-management/app/books/create.php && \
touch book-management/app/books/edit.php && \
touch book-management/app/books/delete.php && \
touch book-management/app/categories/index.php && \
touch book-management/app/categories/create.php && \
touch book-management/app/categories/edit.php && \
touch book-management/app/categories/delete.php


```