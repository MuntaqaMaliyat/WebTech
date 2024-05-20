<?php
require_once('C:\xampp\htdocs\prac\project\models\alldb.php');

function statusUpdate()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $current_score = calculateScore();
        $current_date = date('Y-m-d H:i:s');

        $previous_status = prevStatus($username);

        if (isset($previous_status['prev_score'])) {
            $previous_score = $previous_status['prev_score'];
        } else {
            $previous_score = 'N/A';
        }

        if (isset($previous_status['prev_date'])) {
            $previous_date = $previous_status['prev_date'];
        } else {
            $previous_date = 'N/A';
        }

        updateStatus($username, $current_score, $current_date);

        return [ 
            'current_score' => $current_score,
            'previous_score' => $previous_score,
            'previous_date' => $previous_date,
            'feedback' => generateFeedback($current_score)
        ];
    }
    return null;
}

function calculateScore()
{
    $totalScore = 0;
    $questions = ['depression', 'anxiety', 'hopeful', 'overwhelmed', 'helplessness', 'despair', 'guilt', 'shame', 'worthlessness', 'anguish'];

    foreach ($questions as $question) {
        if (isset($_POST[$question])) {
            $totalScore += intval($_POST[$question]);
        }
    }
    return $totalScore;
}

function generateFeedback($score)
{
    if ($score >= 0 && $score <= 9) {
        return "Your total score suggests low risk, indicating good mental health.";
    } elseif ($score > 9 && $score <= 20) {
        return "Your total score suggests moderate risk, indicating some symptoms of distress.";
    } else {
        return "Your total score suggests high risk, indicating significant symptoms of distress and possibly a need for professional support.";
    }
}
