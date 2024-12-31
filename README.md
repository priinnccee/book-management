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
    ├── functions/
    │   ├── BookFunction.php
    │   ├── AdminFunction.php
    │   └── CategoryFunction.php
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

mkdir -p library-management/{public/assets/{css,js,images},app/{config,includes,functions,models,admin,books,categories}} && \
touch library-management/public/index.php && \
touch library-management/public/assets/css/style.css && \
touch library-management/public/assets/js/script.js && \
touch library-management/app/config/db.php && \
touch library-management/app/includes/header.php && \
touch library-management/app/includes/footer.php && \
touch library-management/app/functions/BookFunction.php && \
touch library-management/app/functions/AdminFunction.php && \
touch library-management/app/functions/CategoryFunction.php && \
touch library-management/app/models/BookModel.php && \
touch library-management/app/models/AdminModel.php && \
touch library-management/app/models/CategoryModel.php && \
touch library-management/app/admin/login.php && \
touch library-management/app/admin/dashboard.php && \
touch library-management/app/books/index.php && \
touch library-management/app/books/create.php && \
touch library-management/app/books/edit.php && \
touch library-management/app/books/delete.php && \
touch library-management/app/categories/index.php && \
touch library-management/app/categories/create.php && \
touch library-management/app/categories/edit.php && \
touch library-management/app/categories/delete.php


```