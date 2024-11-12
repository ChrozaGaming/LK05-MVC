<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
<h1>Users List</h1>
<a href="/create">Add New User</a>
<ul>
    <?php foreach($users as $user): ?>
        <li>
            <?php echo $user['name']; ?> - <?php echo $user['email']; ?>
            <a href="/edit/<?php echo $user['id']; ?>">Edit</a>
            <a href="/delete/<?php echo $user['id']; ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
