<form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez le nom" value="Formation Laravel">
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input name="description" type="text" class="form-control" id="description" placeholder="Description de la formation" value="Formation avancée sur le framework Laravel">
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="nombreChapitres">Nombre chapitres</label>
                                                <input name="nombreChapitres" type="number" class="form-control" id="nombreChapitres" value="27">
                                            </div>

                                            <div class="form-group">
                                                <label for="reference">Reference</label>
                                                <input name="reference" type="url" class="form-control" id="reference" placeholder="Entrez la référence" pattern="https://.*" value="https://grafikart.fr/formations/laravel">
                                                <small id="referenceHelp" class="form-text text-muted">Entrez un lien URL valide (commençant par https://).</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="startDate">Date début</label>
                                                <input name="startDate" type="date" class="form-control" id="startDate" placeholder="Date début" value="2023-05-01">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="endDate">Date fin</label>
                                                <input name="endDate" type="date" class="form-control" id="endDate" placeholder="Date fin" value="2023-05-03">
                                            </div>

                                    </div>

                                    <div class="card-footer">
                                        <a href="./index.php" class="btn btn-default">Cancel</a>
                                        <a href="./index.php" class="btn btn-info" >Submit</a>
                                       
                                    </div>
                                </form>





  






<script>
    tinymce.init({
        selector: '#inputDescription',
        height: 300, // Set the height of the editor
        menubar: false, // Hide the menu bar
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | \
                   alignleft aligncenter alignright alignjustify | \
                   bullist numlist outdent indent | removeformat | help'
    });
</script>