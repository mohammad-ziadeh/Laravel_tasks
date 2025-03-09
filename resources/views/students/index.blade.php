<h1>Show All Students</h1>
<button><a href="{{ route('students.create') }}">Add New</a></button>

<table>
    <thead>
        <tr>  
            <th>Name</th>  
            <th>Email</th>  
            <th>Phone</th>
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($students as $student)
            <tr> 
                
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <button><a href="{{ route('students.edit', $student->id) }}">Edit</a></button>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
            </tr> 
        @endforeach 
    </tbody>
</table>