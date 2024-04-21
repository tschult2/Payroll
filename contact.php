<?php
session_start();
if (!isset($_SESSION["username"])) {

    header("location:index.php");
}include 'header.php';
?>

<div class="container mt-4 mb-5">
    <h1>Contact Us</h1>
    <form action="send-email.php" method = "POST">
        <div class="mb-3">
            <label class="form-label">Subject</label>
            <input type="text" class="form-control" name="subject" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
    </form>
</div>

<?php include 'footer.php'; ?>
