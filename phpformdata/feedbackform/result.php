<html>
<?= header("Location: index.php");?>
    <h1>Submitted Entry</h1>
    <p>Your name (optional):    <?= $_POST['name'] ?></p>
    <p>Course Title:    <?= $_POST['course'] ?></p>
    <p>Given score (1-10):  <?= $_POST['score'] ?></p>
    <p>Reason:   <?= $_POST['reason'] ?></p>
    
</html>

