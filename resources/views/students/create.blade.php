<h1> Add New Places </h1>

<form action="{{route('students.store')}}" method="POST">

    @csrf

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="email">email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="phone">Date of birth:</label>
    <input type="text" id="phone" name="phone"><br><br>

    <button type="submit">Submit</button>

</form>