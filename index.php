<form action="register.php" method="POST">
    Full Name: <input type="text" name="full_name" required><br>
    Age: <input type="number" name="age" required><br>
    Sex:
    <select name="sex" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br>
    <input type="submit" value="Register">
</form>
