<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../layouts/aside.php" ?>



        <div class="content-wrapper" style="min-height: 1302.4px;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Détails du châpitre</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="./index.php" class="btn btn-default float-right"> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <label for="nom">Nom:</label>
                                        <p>Model binding</p>
                                    </div>

                                    <!-- Projects Title -->
                                    <div class="col-sm-12">
                                        <label for="description">Nom d'autoformation:</label>
                                        <p> Laravel</p>
                                    </div>

                                    <!-- Description Field -->
                                    <div class="col-sm-12">
                                        <label for="description">Description:</label>
                                        <p>   it's</p>
                                    </div>

                                

                                    <!-- Description Field -->
                                    <div class="col-sm-12">
                                        <label for="description">Date:</label>
                                        <p>Date de début: 11-7-2014</p>
                                        <p>Date de fin: 11-7-2014</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>


        <!-- Inclure le pied de page -->
        <?php include_once "../layouts/footer.php" ?>

    </div>

    <!-- Inclure le script -->
    <?php include_once "../layouts/script-link.php" ?>
</body>

</html>