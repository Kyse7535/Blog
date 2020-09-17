<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Article</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/blog.css">
    <link rel="stylesheet" href="CSS/article.css">
</head>

<body>
    <?php require("header.php"); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-9 text-right">
                    <h2>Titre</h2>
                    <div class="date_auteur">
                        <p>29.06.2016 | Par auteur</p>
                        <p>0 commentaire</p>
                    </div>
                    <figure>
                        <img src="CSS/blue-hour.jpg" alt="" class="img-fluid">
                        <figcaption>contenu text</figcaption>
                    </figure>
                </div>
                <div class="col-2 offset-md-1">
                    <h2 class="text-center categorie py-3">Categories</h2>
                    <ul>
                        <li><a href="#">Categorie 1</a></li>
                        <li><a href="#">Categorie 2</a></li>
                    </ul>
                </div>
                <div class="col-8 link">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i> Partager sur Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i> Partager sur Twitter</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin"></i>Partager sur linkedIn</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 offset-md-1">
                    <h2 class="text-center py-3">Articles recents</h2>
                    <div class="latest_article_list">
                        <div class="item">
                            <figure class="py-1">
                                <img class="img-fluid" src="./CSS/blue-hour.jpg" alt="article">
                                <figcaption class="py-2">
                                    <b>Titre</b> , 27 Juin 2020
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="py-1">
                                <img class="img-fluid" src="./CSS/blue-hour.jpg" alt="article">
                                <figcaption class="py-2">
                                    <b>Titre</b> , 27 Juin 2020
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="py-1">
                                <img class="img-fluid" src="./CSS/blue-hour.jpg" alt="article">
                                <figcaption class="py-2">
                                    <b>Titre</b> , 27 Juin 2020
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <h3>commentaires</h3>
                    <div class="commentaire">
                        <p>les commentaires</p>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-9">
                    <h3>Laisser un commentaire</h3>
                    <form action="article.post.html" method="POST">
                        <label for=""><input type="text" placeholder="Nom" name="nom"> *</label>
                        <label for=""><input type="text" placeholder="Email" name="email"> *</label>
                        <label class="text" for=""><textarea name="" id="" cols="30" rows="4"
                                placeholder="commentaire"></textarea>
                            <span>*</span></label><br>
                        <p>* champ obligatoire</p>

                        <input type="submit" value="Envoyer">
                    </form>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
    </main>
    <?php require("footer.php"); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</body>

</html>