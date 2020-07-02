<?php
    $fichier = 'source.xml';
    //simplexml_load_file = Convertit un fichier XML en objet
    $contenu = simplexml_load_file($fichier);
    
    //CONDITION POUR AFFICHER LE CONTENU SELON MENU CLIQUÉ
    $title = 'projet-php';
    $content = '';

    if (isset($_GET['id'])){
        switch ($_GET['id']) {
            case 1:
                $title =  $contenu->page[0]->title ;
                $content = $contenu->page[0]->content;
                break;
            case 2:
                $title =  $contenu->page[1]->title ;
                $content = $contenu->page[1]->content;
                break;
            case 3:
                $title =  $contenu->page[2]->title ;
                $content = $contenu->page[2]->content;
                break;
            case 4:
                $title =  $contenu->page[3]->title ;
                $content = $contenu->page[3]->content;
                break;
            default : 
            $title =  $contenu->page[0]->title ;
            $content = $contenu->page[0]->content;
            }
    }

    // if (isset($_GET['id'])){
    //     if($_GET['id'] == 1){
    //         $title =  $contenu->page[0]->title;
    //         $content = $contenu->page[0]->content;
    //     }
    //     if($_GET['id'] == 2){
    //         $title =  $contenu->page[1]->title;
    //         $content = $contenu->page[1]->content;
    //     }
    //     if($_GET['id'] == 3){
    //         $title =  $contenu->page[2]->title ;
    //         $content = $contenu->page[2]->content;
    //     }
    //     if($_GET['id'] == 4){
    //         $title =  $contenu->page[3]->title ;
    //         $content = $contenu->page[3]->content;
    //     }else {
    //         $title =  $contenu->page[0]->title ;
    //         $content = $contenu->page[0]->content;
    //     } 
    // }else {
    //     $title =  $contenu->page[0]->title ;
    //     $content = $contenu->page[0]->content;
    // } 
?>
<!DOCTYPE html>
<html lang="FR" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link style="text/css" rel="stylesheet" href="assets/css/style.css" />
    <title><?= $title ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php foreach($contenu as $page){ 
                    ?><a class="navbar col-3 text-center" href="<?= $page['id']?>.html"><?= $page->menu ?></a><?php
                } ?>
        </div>
    </div>
    <div class="container">
        <?= $content ?> 
    </div>
    <footer class="page-footer">
       <div class="container">
           <div class="row">
               <div class="col-4 mt-5">
                   <p>Maçonnerie Ocordo © 2020 Copyright.</p>
               </div>
               <div class="col-4">
                    <h5 class="text-uppercase">adresse</h5>
                    <p>Ocordo Travaux Nantes</p>
                    <p>11 Allée de l'Île Gloriette,</p>
                    <p>44000 Nantes</p>
               </div>
               <div class="col-4">
                   <h5 class="text-uppercase">Nos réseaux sociaux</h5>
                   <ul class="list-unstyled text-center">
                       <li>
                           <a href="#!">Facebook</a>
                       </li>
                       <li>
                           <a href="#!">Twitter</a>
                       </li>
                       <li>
                           <a href="#!">Instagram</a>
                       </li>
                       <li>
                           <a href="#!">Youtube</a>
                       </li>
                   </ul>
               </div>
    </footer>
</body>
