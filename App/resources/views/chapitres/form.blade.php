<form action="{{ $dataToEdit ? route('chapitres.update', $dataToEdit->id) : route('chapitres.store') }}" method="POST">
    @csrf
    @if ($dataToEdit)
        @method('PUT')
    @endif
    <div class="card-body">
        <div class="form-group">
            <label for="name">name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Entrez le titre"
                value="{{ $dataToEdit ? $dataToEdit->name : '' }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="date_debut">Date de début</label>
            <input name="date_debut" type="date" class="form-control" id="date_debut"
                placeholder="Sélectionnez la date de début" value="{{ $dataToEdit ? $dataToEdit->date_debut : '' }}">
            @error('date_debut')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="date_de_fin">Date de fin</label>
            <input name="date_de_fin" type="date" class="form-control" id="date_de_fin"
                placeholder="Sélectionnez la date de fin" value="{{ $dataToEdit ? $dataToEdit->date_de_fin : '' }}">
            @error('date_de_fin')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="editor">{{ $dataToEdit ? $dataToEdit->description : '' }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="card-footer">
        <a href="./index.php" class="btn btn-default">Annuler</a>
        <button type="submit" class="btn btn-info">{{ $dataToEdit ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</form>

<!-- Include CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
