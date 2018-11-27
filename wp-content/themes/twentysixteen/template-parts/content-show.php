<h1>Home page</h1>
<hr>
<form method="post" >
<label> Name: </label>
<input type="text" name="txtname" size="5">
<br>
<input type="submit" name="submit_name" value="Submit">
</form>
<br>
<?php if(isset($_POST['submit_name'])): ?>

    <?php $name  = isset($_POST['txtname'])? $_POST['txtname'] : ''; ?>
    <p><?php echo 'Hello, '. $name ?></p>


<?php endif; ?>