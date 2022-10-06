<?php
require 'app/models/chapter.model.php';
require 'app/views/chapter.view.php';
require 'app/models/season.model.php';
require 'app/views/season.view.php';

class Controller
{
    private $chapter_model;
    private $chapter_view;
    private $season_model;
    private $season_view;

    function __construct()
    {
        $this->chapter_model = new ChapterModel();
        $this->chapter_view = new ChapterView();
        $this->season_model = new SeasonModel();
        $this->season_view = new SeasonView();
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
    function aboutChapters($id_cap = null)
    {
        $chapter = $this->chapter_model->aboutChaptersById($id_cap);
        $this->chapter_view->showHeader();
        $this->chapter_view->showFormUpdate($chapter);
        $this->chapter_view->showChapterById($chapter);
    }
    function addChapter()
    {
        if (!empty($_POST['title'] && $_POST['description'] && $_POST['num_cap'] && $_POST['season'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $num_cap = $_POST['num_cap'];
            $season = $_POST['season'];
             $this->chapter_model->insertChapter($title, $description, $num_cap, $season);

            header("Location: " . BASE_URL);
        }
    }
    function editChapter($id = null)
    {
        $chapter = $this->chapter_model->aboutChaptersById($id);
        $this->chapter_view->showFormUpdate($chapter);
        //var_dump($chapter) ;
    }

    function deleteChapter($id)
    {
        $this->chapter_model->deleteChapter($id);
        header("Location: " . BASE_URL);
    }
}
