<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do</title>
    <link href="/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<section class="section">
    <div class="addTask">
        <form  action="/" method="get">
            <label for="newTask">Add New Task</label>
            <input type="text" id="newTask" name="newTask">
            <input class="button" type="submit" value="Submit">
        </form>
    </div>
</section>
<section class="section">
    <h2>My Tasks</h2>
    <ul class="tasks">
        <?php
        foreach ($tasks as $task) {
            echo '<li>' . ($task["task"]) . '</li>';
        }
        ?>
    </ul>
</section>
<section class="section">
    <h2>Completed Tasks</h2>
    <ul class="tasks">
    </ul>
</section>
<footer>
    <div>
    </div>
    <div>
    </div>
</footer>
</body>
</html>
