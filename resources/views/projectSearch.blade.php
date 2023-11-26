@foreach($projects as $project)
    <tr>
        <th>{{$project->nom}}</th>
        <td>{{$project->description}}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="3" aligne="center">
            {!! $projects->links() !!}
        </td>
    </tr>