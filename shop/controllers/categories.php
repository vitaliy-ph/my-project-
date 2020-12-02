<?php


require_once __DIR__ . '/../models/categories.php';


function actionShowAll()
{

    $categories = getCategories();


}

function actionShowCategory()
{
    require_once __DIR__ . '/../views/categories/ShowCategory.php';
}

function actionCreate()
{


    if ($_POST && createCategory($_POST)) {
        header('Location: /shop/categories/show-all');
        exit;
    }

    require_once __DIR__ . '/../views/categories/create.php';


}



function actionDelete()
{
    require_once __DIR__ . '/../views/categories/delete.php';
    $result = Delete($_POST);
    if (empty($result)){
        DeleteCategory($_POST);
    }
    else{
        $Exit = '';
        $count = count($result);
        for ($i = 0; $i < $count; $i++){
            $Exit .= '"' . $result[$i]['title'] . '"'. PHP_EOL;
        }
        exit("You can only delete child categories {$Exit}");
    }
}


function actionUpdate()
{
    require_once __DIR__ . '/../views/categories/update.php';

    updateCategory($_POST);

}


