<?php
require_once('../../controllers/statusControl.php');
$status = statusUpdate();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Questionnaire</title>
    <link rel="stylesheet" href="../css/styleStatus.css">
</head>

<body>
    <div class="container">
        <h1>Quick Assesment</h1>
        <?php if ($status) { ?>
            <div class="status-result">
                <h2>Current Score: <?php echo htmlspecialchars($status['current_score']); ?></h2>
                <p>Previous Score: <?php echo htmlspecialchars($status['previous_score']); ?></p>
                <p>Previous Date: <?php echo htmlspecialchars($status['previous_date']); ?></p>
                <p>Feedback: <?php echo htmlspecialchars($status['feedback']); ?></p>
            </div>
        <?php } ?>
        <form id="questionnaireForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="question">
                <label for="username">Enter your username</label>
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="question">
                <label for="depression">How often have you felt symptoms of depression in the past week?</label>
                <select id="depression" name="depression" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Not at all</option>
                    <option value="1">Occasionally</option>
                    <option value="2">Frequently</option>
                    <option value="3">Almost always</option>
                </select>
            </div>
            <div class="question">
                <label for="anxiety">Have you experienced symptoms of anxiety recently?</label>
                <select id="anxiety" name="anxiety" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Not at all</option>
                    <option value="1">Occasionally</option>
                    <option value="2">Frequently</option>
                    <option value="3">Almost always</option>
                </select>
            </div>
            <div class="question">
                <label for="hopeful">Do you feel hopeful about the future?</label>
                <select id="hopeful" name="hopeful" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Very hopeful</option>
                    <option value="1">Somewhat hopeful</option>
                    <option value="2">Neutral</option>
                    <option value="3">Not very hopeful</option>
                    <option value="4">Not hopeful at all</option>
                </select>
            </div>
            <div class="question">
                <label for="overwhelmed">How often do you feel overwhelmed by feelings of hopelessness?</label>
                <select id="overwhelmed" name="overwhelmed" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Rarely</option>
                    <option value="1">Sometimes</option>
                    <option value="2">Often</option>
                    <option value="3">Almost always</option>
                </select>
            </div>
            <div class="question">
                <label for="helplessness">Have you experienced feelings of helplessness lately?</label>
                <select id="helplessness" name="helplessness" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Never</option>
                    <option value="1">Rarely</option>
                    <option value="2">Sometimes</option>
                    <option value="3">Often</option>
                </select>
            </div>
            <div class="question">
                <label for="despair">How often do you experience feelings of despair?</label>
                <select id="despair" name="despair" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Never</option>
                    <option value="1">Rarely</option>
                    <option value="2">Sometimes</option>
                    <option value="3">Often</option>
                </select>
            </div>
            <div class="question">
                <label for="guilt">Do you often feel guilty about past actions or decisions?</label>
                <select id="guilt" name="guilt" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Never</option>
                    <option value="1">Rarely</option>
                    <option value="2">Sometimes</option>
                    <option value="3">Often</option>
                </select>
            </div>
            <div class="question">
                <label for="shame">How often do you experience feelings of shame?</label>
                <select id="shame" name="shame" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Never</option>
                    <option value="1">Rarely</option>
                    <option value="2">Sometimes</option>
                    <option value="3">Often</option>
                </select>
            </div>
            <div class="question">
                <label for="worthlessness">How would you rate your feelings of worthlessness?</label>
                <select id="worthlessness" name="worthlessness" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">High</option>
                    <option value="1">Moderate</option>
                    <option value="2">Low</option>
                    <option value="3">Very low</option>
                </select>
            </div>
            <div class="question">
                <label for="anguish">Do you often feel a sense of anguish?</label>
                <select id="anguish" name="anguish" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="0">Never</option>
                    <option value="1">Rarely</option>
                    <option value="2">Sometimes</option>
                    <option value="3">Often</option>
                </select>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>