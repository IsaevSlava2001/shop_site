<?php
echo "<script>var conf=confirm('Вы уверены, что хотите удалить?');</script>";
echo "<script>alert(conf);</script>";
echo "<script>window.location.href='delete_product.php?error=success';</script>"
?>