<?php
namespace Controller;
use Model\ItemManager;
use View\View;
use Twig_Loader_Filesystem;
use Twig_Environment;

class ItemController
{
    private $twig;
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../View');
        $this->twig = new Twig_Environment($loader);
    }
    public function index()
    {
        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems();
        $view = new View();
        return $this->twig->render('item.html.twig', ['items' => $items]);

    }

    public function show(int $id)
    {
        $itemManager = new ItemManager();
        $item = $itemManager->selectOneItem($id);
        return $this->twig->render('showItem.html.twig', ['items' => $item]);
    }
}

