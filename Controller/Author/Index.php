<?php

namespace App\Controller\Author;

use App\Model\AuthorModel;
use App\View\AuthorView;

class Index {
    private $authorModel;
    private $authorView;

    public function __construct() {
        $this->authorModel = new AuthorModel();
        $this->authorView = new AuthorView();
    }

    public function listAuthors(int $page = 1, int $limit = 10) {
        // Get authors from the model
        $authors = $this->authorModel->getAuthors($page, $limit);
        // Render the authors listing view
        return $this->authorView->render($authors);
    }
}