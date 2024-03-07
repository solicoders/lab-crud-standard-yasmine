<form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <select name="chapterSelect" class="form-control" id="chapterSelect">
                                                <option value="1">laravel</option>
                                                <option value="2">Kotlin</option>
                                                <!-- Add more chapters as needed -->
                                            </select>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input name="description" type="text" class="form-control" id="description" placeholder="Entrez la description" value="it's">
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
                                        <a href="./index.php" class="btn btn-info">Submit</a>

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