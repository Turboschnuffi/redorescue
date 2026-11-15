<h1>Welcome</h1>
<h3>Select an option</h3>

<p>Easily create a snapshot of your system or completely restore from one. Click an option to begin:</p>

<style>
  .custom-btn {
    background: none;
    border: none;
    padding: 0;
    margin: 0 15px;
    cursor: pointer;
    transition: transform 0.15s ease;
  }
  .custom-btn:hover {
    transform: scale(1.06);
  }
  .custom-btn:focus {
    outline: none;
  }
</style>

<div id="welcome">
  <p class="text-center">

    <button onClick="showPage('backup-1');" class="custom-btn" title="Backup">
      <img src="/images/button_backup.png" width="140" alt="Backup">
    </button>

    <button onClick="showPage('verify-1');" class="custom-btn" title="Verify">
      <img src="/images/button_verify.png" width="140" alt="Verify">
    </button>

    <button onClick="showPage('restore-1');" class="custom-btn" title="Restore">
      <img src="/images/button_restore.png" width="140" alt="Restore">
    </button>

  </p>
</div>

<!-- Load fonts immediately in a hidden container -->
<div id="font-awesome-loader" style="height: 0px; width: 0px; overflow: hidden;">
  <i class="fas fa-asterisk"></i>
</div>

<script>
function showPage(id) {
        $('#content').html('<?php print LOADING_HTML; ?>').load('action.php?page='+id);
}
</script>
