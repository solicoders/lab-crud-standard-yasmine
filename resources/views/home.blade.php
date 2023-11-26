@extends('layouts.layout')
@extends('layouts.nav')
@section('content')
<div class="container mt-5">
<div class="mb-3">
            <select name="projetId" id="filterCriteria">
              <option value="Filtrer par projet" selected>Filtrer par projet</option>
                @foreach($projectData as $project)
                <option value="{{$project->nom}}">{{$project->nom}}</option>
                @endforeach
            </select>
        </div>
  <table class="table table-striped text-nowrap container border text-center">
    <thead>
      <tr>
        <th scope="col" class="border">Nom</th>
        <th scope="col" class="border">Description</th>
        <th scope="col" class="border">Tâches</th>
      </tr>
    </thead>
    <tbody id="search-result">
      @include('projectSearch')
    </tbody>
    <input type="hidden" id='page' value="1">
  </table>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    function fetchData(page, searchValue ,criteria) {
      $.ajax({
        url: '/?page=' + page + '&searchValue=' + searchValue + '&criteria=' + criteria,
        success: function (data) {
          $('tbody').html('');
          $('tbody').html(data);
        }
      });
      console.log(criteria);
      console.log(searchValue);
    }

    $('body').on('click', '.pagination a', function (param) {

      param.preventDefault();

      var page = $(this).attr('href').split('page=')[1];
      var searchValue = $('#search-input').val();
      var criteria = $('#filterCriteria').val();

      fetchData(page, searchValue,criteria);

    });

    $('body').on('keyup', '#search-input', function () {
      var page = $('#page').val();
      var searchValue = $('#search-input').val();
      var criteria = $('#filterCriteria').val();

      fetchData(page, searchValue , criteria);
    });

    $('#filterCriteria').on('change', function () {
      var page = $('#page').val();
      var searchValue = $('#search-input').val();
      var criteria = $(this).val();
      fetchData(page, searchValue, criteria);
    });

  });
</script>
@endsection