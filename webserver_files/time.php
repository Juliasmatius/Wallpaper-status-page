<body>
    <?php 
  
// Use ls command to shell_exec 
// function 

date_default_timezone_set("Europe/Helsinki");
$time = date("H:i:s");
$output = shell_exec("..\ascii.exe $time"); 
  
// Display the list of all file 
// and directory 
echo "<pre id=\"outpuzt\">$output</pre>"; 
?> 
</body>
<script>
  // Function to update the content asynchronously
  function updateContent() {
    fetch('time.php')
      .then(response => response.text())
      .then(data => {
        document.getElementById('outpuzt').innerHTML = data;
      });
  }

  // Update the content initially
  updateContent();

  // Schedule updating every minute
  setInterval(updateContent, 1000); // 60000 milliseconds = 1 minute
</script>