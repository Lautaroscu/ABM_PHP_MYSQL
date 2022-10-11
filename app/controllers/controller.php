<?php
require 'app/models/chapter.model.php';
require 'app/views/chapter.view.php';
require 'app/models/season.model.php';
require 'app/views/season.view.php';
require 'app/helpers/auth.helper.php';

class Controller
{
    private $chapter_model;
    private $chapter_view;
    private $season_model;
    private $season_view;
    private $helper;

    function __construct()
    {
        $this->chapter_model = new ChapterModel();
        $this->chapter_view = new ChapterView();
        $this->season_model = new SeasonModel();
        $this->season_view = new SeasonView();
        $this->helper = new AuthHelper();
    }
    function showHome()
    {
        $seasons = $this->season_model->getAllSeason();
        $this->chapter_view->showHeader($seasons);
        $this->season_view->showSeason($seasons);
    }
    function showChaptersbySeason($id = null)
    {
        $seasons = $this->season_model->getAllSeason();
        $chapters = $this->chapter_model->getChaptersBySeason($id);
        $this->chapter_view->showHeader($seasons);
        $this->chapter_view->showChapterFilter($chapters);
    }
    function showForm2()
    {
        $this->helper->checkLoggedIn();
        $season = $this->season_model->getAllSeason();
        $this->chapter_view->showForm2($season);
    }
    function aboutChapters($id_cap = null)
    {
        $chapter = $this->chapter_model->aboutChaptersById($id_cap);
        $this->chapter_view->showHeader();
        $this->chapter_view->showChapterById($chapter);
    }
    function  addChapter()
    {

        if (!empty($_POST['title'] && $_POST['description'] && $_POST['numero_cap'] && $_POST['season'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $numero_cap = $_POST['numero_cap'];
            $season = $_POST['season'];
            if (!empty($_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png")) {
                $image = $_FILES['image'];
                $this->chapter_model->insertChapter($title, $description, $numero_cap, $season, $image);
            } else $this->chapter_model->insertChapter($title, $description, $numero_cap, $season);
        }


        header("Location: " . BASE_URL );
    }


    function showEditChapter($id)
    {
        $this->helper->checkLoggedIn();
        $chapter = $this->chapter_model->aboutChaptersById($id);
        $this->chapter_view->showFormUpdate($chapter);
    }
    function updateChapter()
    {
        if (!empty($_POST['id'] && $_POST['title'] && $_POST['description'] && $_FILES['image'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            if (!empty($_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png")) {
                $img = $_FILES['image']['type'];
                $this->helper->checkLoggedIn();
                $this->chapter_model->updateChapter($title, $description, $img, $id);
            } else  $this->chapter_model->updateChapter($title, $description, $img = null, $id);
            header("Location: " . BASE_URL);
        }
    }

    function deleteChapter($id = null)
    {

        $this->helper->checkLoggedIn();
        $this->chapter_model->deleteChapter($id);
        header("Location: " . BASE_URL);
    }
    function addSeason()
    {
        $this->helper->checkLoggedIn();

        if (!empty($_POST['title'] && $_POST['description'] && $_POST['premiere'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $premiere = $_POST['premiere'];
        }
        $this->season_model->insertSeason($title, $description, $premiere);
        header("Location: " . BASE_URL);
    }
    function deleteSeason($id)
    {
        $this->helper->checkLoggedIn();

        $this->season_model->removeSeason($id);
        header("Location: " . BASE_URL);
    }

    function showUpdateSeason($id)
    {
        $season = $this->season_model->getSeasonById($id);
        $this->season_view->showUpdateSeason($season);
    }
    function updateSeason()
    {
        if (!empty($_POST['title'] && $_POST['description'] && $_POST['premiere'] && $_POST['id'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $premiere = $_POST['premiere'];
            $id =  $_POST['id'];
        }
        $this->season_model->updateSeason($title, $description, $premiere, $id);
        header("Location: " . BASE_URL);
    }
}
