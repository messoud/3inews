<!DOCTYPE html>

<html>
    <head>
       
        <meta charset="UTF-8">
        <link href="library/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--<title> // echo $this->getPageTitle(); </title>-->
        <title>3inews </title>   
        [%STYLESHEETS%] 
    </head>
    <body>
        <div id="contener">
            <header>    
                <div id="nav">
                    <nav id="navmode" class = "navbar navbar-inverse" role = "navigation">

                        <div class = "navbar-header">
                            <a class = "navbar-brand" href = "#">3iNews</a>
                        </div>

                        <div >
                            <ul class = "nav navbar-nav">
                                <li ><a href = "#">Diffusion</a></li>
                                <li><a href = "#">Utilisateur</a></li>
                            </ul>
                        </div>
                        <div class="pull-right" >
                            <ul class = "nav navbar-nav">

                                <li>
                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                                        Oulad moussa
                                        <b class = "caret"></b>
                                    </a>

                                    <ul class = "dropdown-menu">
                                        <li><a href = "#">A</a></li>
                                        <li><a href = "#">B</a></li>

                                    </ul>

                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>

                <div id="texte" >
                    <span>Utilisateurs </span>
                    <p></p>
                </div>

                <div id="btnajouter" >
                    <button class="btn">
                        Ajouter
                    </button>
                </div>


            </header>

            <div class="content row">
                <div class="col-lg-3">
                    <?php Tr\Menu_principalHelper::render(); ?>
                </div>

                <div class="col-lg-9">
                    <?php $this->insertView(); ?>
                </div>
            </div>
        </div>

        <script src="vendors/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="vendors/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>

        <?php $this->insertScript(); ?>
    </body>
</html>
