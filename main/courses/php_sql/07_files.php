<h1>File Operations and Uploads</h1>
<p>PHP was originally built for file processing, and it remains one of the best languages for handling server-side file I/O and user uploads.</p>

<h2>Basic File Operations</h2>
<p>The <code>fopen()</code> function is the starting point for manual file handling. It requires a <strong>mode</strong>:</p>
<ul>
    <li><code>r</code>: Read only.</li>
    <li><code>w</code>: Write only (overwrites existing content).</li>
    <li><code>a</code>: Append (adds to the end of the file).</li>
</ul>

<pre><code class="language-php">&lt;?php
  $file_path = "logs.txt";
  
  // opening for appending
  $handle = fopen($file_path, "a") or die("Permission denied!");
  $txt = "User logged in at " . date("H:i:s") . "\n";
  
  fwrite($handle, $txt);
  fclose($handle);
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Shorter Alternative:</strong> For simple tasks, use <code>file_get_contents()</code> and <code>file_put_contents()</code>. They handle opening and closing the file automatically.
</div>

<h2>Secure File Uploads</h2>
<p>Uploading files is a high-risk operation. If not handled correctly, a user could upload a <code>.php</code> script and take over your entire server.</p>

<h3>Step 1: The HTML Form</h3>
<p>The form <strong>must</strong> use <code>method="POST"</code> and <code>enctype="multipart/form-data"</code>.</p>

<pre><code class="language-html">&lt;form action="uplaod.php" method="POST" enctype="multipart/form-data"&gt;
  &lt;input type="file" name="profile_pic"&gt;
  &lt;button type="submit"&gt;Upload&lt;/button&gt;
&lt;/form&gt;</code></pre>

<h3>Step 2: Processing with $_FILES</h3>
<pre><code class="language-php">&lt;?php
  $target_dir = "uploads/";
  $file_name = basename($_FILES["profile_pic"]["name"]);
  $target_path = $target_dir . $file_name;
  
  // Validation Checklist
  $size_limit = 500000; // 500KB
  $extension = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));
  
  if ($_FILES["profile_pic"]["size"] > $size_limit) {
      die("File too large!");
  }
  
  if ($extension != "jpg" && $extension != "png") {
      die("Only JPG and PNG allowed.");
  }

  if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_path)) {
      echo "Upload successful!";
  }
?&gt;</code></pre>

<div class="alert alert-warning">
    <strong>Security Rule:</strong> Never trust the filename provided by the user. Use <code>uniqid()</code> to generate a new filename on the server to prevent attackers from overwriting important system files or executing scripts.
</div>

<h2>Directory Management</h2>
<p>You can also use PHP to manage folders using <code>mkdir()</code>, <code>rmdir()</code>, and <code>scandir()</code>.</p>

<pre><code class="language-php">&lt;?php
  if (!file_exists('user_data')) {
      mkdir('user_data', 0777, true);
  }
?&gt;</code></pre>
