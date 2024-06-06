<?php include 'header.php'; ?>

<main>
    <h2>Add New User</h2>
    <form method="post" action="index.php?action=addUser">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Add User">
    </form>
    <a href="index.php">Back to User List</a>
</main>

<?php include 'footer.php'; ?>
