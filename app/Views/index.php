<!DOCTYPE html>
<html lang="en">
<head>
<title>T2 Badang</title>
</head>
<body>
   <h2> Activity List</h2>
   <a href="/activity/create">Add New Activity</a>
   <ul>
    <?php foreach ($activities as $activity): ?>
    <li><strong><?= esc($activity['description']) ?></li>

    <?php endforeach; ?>
    </ul>

    
</body>
</html>