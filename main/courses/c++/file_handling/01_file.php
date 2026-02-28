<h1>File Handling (fstream)</h1>
<p>
    Almost every useful program eventually needs to save data persistently to the hard drive, or read configuration data from a file when it starts up. 
    In C++, file handling is performed using the <code class="language-cpp">&lt;fstream&gt;</code> (File Stream) library. 
</p>
<p>
    This library provides three main classes for working with files, which interface remarkably similarly to how <code class="language-cpp">cin</code> and <code class="language-cpp">cout</code> work for the console screen!
</p>
<ul>
    <li><code class="language-cpp">ofstream</code>: (Output File Stream) Creates new files and writes data into them.</li>
    <li><code class="language-cpp">ifstream</code>: (Input File Stream) Reads data out of existing files.</li>
    <li><code class="language-cpp">fstream</code>: (File Stream) A combination class capable of both reading and writing simultaneously.</li>
</ul>

<h2>Writing to a File (<code class="language-cpp">ofstream</code>)</h2>
<p>
    To write to a file, you create an <code class="language-cpp">ofstream</code> object. 
    Just like pushing text to the screen using <code class="language-cpp">cout &lt;&lt; "Text"</code>, you push text to the file using your object name followed by the exact same insertion operator <code class="language-cpp">&lt;&lt;</code>!
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;fstream&gt; // Remember to include the fstream library!
using namespace std;

int main() {
  // 1. Create and open a text file. If it doesn't exist, it is created.
  ofstream MyFile("player_data.txt");

  // 2. Write formatted data to the file
  MyFile &lt;&lt; "Player Name: Admin\n";
  MyFile &lt;&lt; "Level: 99\n";
  MyFile &lt;&lt; "Gold: 5025\n";

  // 3. Close the file!
  MyFile.close();
  
  cout &lt;&lt; "Writing to file completed successfully!" &lt;&lt; endl;
  return 0;
}</code></pre>
<div class="alert alert-warning">
    <strong>Always Close Your Files:</strong> Calling <code class="language-cpp">close()</code> is critical. It forces the computer to flush the final bits of data from temporary RAM onto the hard drive and unlocks the file so other programs (or the user) can open it without it acting corrupted.
</div>

<h2>Appending to a File</h2>
<p>
    By default, opening a file with <code class="language-cpp">ofstream()</code> will completely erase the existing file and overwrite it with whatever new data you provide. If you want to continuously build a log file without deleting the old history, you must open it in <strong>Append Mode</strong>.
</p>
<pre><code class="language-cpp">// Open specifically in Append Mode using 'ios::app'
ofstream LogFile("system_log.txt", ios::app);
LogFile &lt;&lt; "New event recorded at 12:00PM\n";
LogFile.close();</code></pre>

<h2>Reading from a File (<code class="language-cpp">ifstream</code>)</h2>
<p>
    To read from a file, create an <code class="language-cpp">ifstream</code> object. We commonly use a <code class="language-cpp">while</code> loop alongside the <code class="language-cpp">getline()</code> function to read a text document line-by-line until we hit the end of the file.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;fstream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
  // Create a string to temporarily hold the data being pulled from the file
  string myText;

  // Open the file in read mode
  ifstream ReadFile("player_data.txt");
  
  // Check if the file actually exists and opened successfully!
  if (!ReadFile.is_open()) {
      cout &lt;&lt; "Error: Could not open file. Does it exist?" &lt;&lt; endl;
      return 1;
  }

  // Use a while loop together with getline() to read the file line-by-line
  // getline() returns false when there are no more lines to read!
  while(getline(ReadFile, myText)) {
    // Output the text from the file onto the screen
    cout &lt;&lt; myText &lt;&lt; "\n";
  }

  // Close the file when finished
  ReadFile.close();
  
  return 0;
}</code></pre>
