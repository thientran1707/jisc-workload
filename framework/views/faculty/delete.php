<div class="form-container">
<?php
    echo '<h2>Faculty &ldquo;' . htmlentities($faculty->name,ENT_COMPAT,'utf-8') . '&rdquo; was successfully deleted.</h2>';
    echo '<a href="/faculty/view/" title="Go back to faculty list">Go back to faculty list</a>';
?>
</div>