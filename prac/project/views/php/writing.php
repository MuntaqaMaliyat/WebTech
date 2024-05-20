<?php
session_start();
require_once ('../../models/condb.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

function getRandomTopic() {
    $conn = conn();
    $query = "SELECT * FROM topics ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function saveWriting($username, $topic_id, $story) {
    $conn = conn();
    $stmt = $conn->prepare("INSERT INTO writings (username, topic_id, story) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $username, $topic_id, $story);
    $stmt->execute();
    $stmt->close();
}

function getUserWritings($username) {
    $conn = conn();
    $stmt = $conn->prepare("SELECT writings.story, writings.created_at, topics.topic FROM writings JOIN topics ON writings.topic_id = topics.id WHERE writings.username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $writings = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $writings;
}

$randomTopic = getRandomTopic();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_story'])) {
    $story = $_POST['story'];
    $topic_id = $_POST['topic_id'];
    saveWriting($username, $topic_id, $story);
    $userWritings = getUserWritings($username);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Topic Writing</title>
    <link rel="stylesheet" href="../css/styleWritting.css">
</head>
<body>
    <div class="container">
        <h1>Random Topic Writing</h1>

        <div class="random-topic">
            <h2>Topic: <?php echo htmlspecialchars($randomTopic['topic']); ?></h2>
            <img src="<?php echo htmlspecialchars($randomTopic['image_url']); ?>" alt="<?php echo htmlspecialchars($randomTopic['topic']); ?>">
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="hidden" name="topic_id" value="<?php echo $randomTopic['id']; ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="story">Your Story:</label>
                <textarea name="story" rows="5" required></textarea>
            </div>
            <button type="submit" name="submit_story">Submit</button>
        </form>

        <?php if (isset($userWritings) && count($userWritings) > 0): ?>
            <div class="user-writings">
                <h2>Your Previous Writings</h2>
                <?php foreach ($userWritings as $writing): ?>
                    <div class="writing">
                        <h3>Topic: <?php echo htmlspecialchars($writing['topic']); ?></h3>
                        <p><?php echo nl2br(htmlspecialchars($writing['story'])); ?></p>
                        <small>Written on: <?php echo htmlspecialchars($writing['created_at']); ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
