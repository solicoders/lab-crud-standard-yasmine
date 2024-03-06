@extends('layouts.layout')



    
@section('content')
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-info">
                                <div class="card-header">
                                    <h2 class="card-title"> <i class="nav-icon fas fa-tasks"></i> Ajouter Une châpitre</h2>
                                </div>
                                <!-- Inclusion du formulaire -->
                                <?php include_once "./form.php" ?>
                                @include('layouts.aside')
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