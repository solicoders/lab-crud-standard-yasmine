@foreach($projects as $project)
<tr>
    <th class="border">{{$project->nom}}</th>
    <td class="border">{{$project->description}}</td>
</tr>
@endforeach
<tr>
    <td></td>
    <td colspan="3">
        <div class="w-25 container">
            {!! $projects->links() !!}
        </div>
    </td>

</tr>