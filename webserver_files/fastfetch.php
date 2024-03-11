<style>
    body {
        background-color: #00040f;
        color: #FFFFFF;
    }
</style>
<?php
$cwd = getcwd();
$output = shell_exec("$cwd/../fastfetch/fastfetch.exe --config main.jsonc");
echo "<pre id=\"output\">$output</pre>";

?>


<script>
  // Function to update the content asynchronously
  function updateContent() {
    fetch('fastfetch.php')
      .then(response => response.text())
      .then(data => {
        document.getElementById('output').innerHTML = data;
      });
  }

  // Update the content initially
  updateContent();

  // Schedule updating every minute
  setInterval(updateContent, 600000); // 60000 milliseconds = 1 minute
</script>