<h1> Add New Places </h1>

<form action="{{route('cruds.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="role">Role:</label>
    <input type="text" id="role" name="role"><br><br>

    <label for="DB">Date of birth:</label>
    <input type="text" id="DB" name="DB"><br><br>

    <button type="submit">Submit</button>

</form>