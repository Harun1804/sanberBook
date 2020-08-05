<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h4><strong>Sign Up Form</strong></h4>
    <form action="{{ url('/welcome') }}" method="POST">
        @csrf
        <label>First Name:</label><br><br>
        <input type="text" name="fname"><br><br>
        <label>Last Name:</label><br><br>
        <input type="text" name="lname"><br><br>
        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="female"> Female <br>
        <input type="radio" name="gender" value="other"> Other <br><br>
        <label>Nationality:</label> <br> <br>
        <select name="nationality">
            <option>Indonesian</option>
            <option>Singapure</option>
            <option>Malaysian</option>
            <option>Australian</option>
        </select><br><br>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="lspoken[]" value="bahasa indonesia">Bahasa Indonesia <br>
        <input type="checkbox" name="lspoken[]" value="english">English <br>
        <input type="checkbox" name="lspoken[]" value="other">Other <br><br>
        <label>Bio:</label><br><br>
        <textarea cols="30" rows="10" name="deskripsi" placeholder="Deskripsi"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>
