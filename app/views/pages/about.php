<?php  $activepage = basename(__FILE__, ".php"); ?>

<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1 class="mt-4"><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>