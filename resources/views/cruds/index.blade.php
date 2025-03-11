<h1>This is Crud Task</h1>
<button><a href="{{ route('cruds.create') }}">Add New</a></button>
<table>
    <thead>
        <tr>
            <th>#:</th>
            <th>Name:</th>
            <th>Role:</th>
            <th>Date of birth:</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cruds as $crud)
            <tr>
                <td>{{ $crud->id }}</td>
                <td>{{ $crud->name }}</td>
                <td>{{ $crud->role }}</td>
                <td>{{ $crud->DB }}</td>
                <td>
                    <a href="{{ route( 'cruds.edit', $crud->id) }}" class="btn">Edit</a>
                    <form action="{{ route('cruds.destroy', $crud->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
