<h1>Web Scraping Basics</h1>
<p>Web scraping is the process of extracting data from websites. Python is the world's most popular language for this task because of its simple libraries that can "parse" (read) HTML like a human browser.</p>

<h2>The Two Main Tools</h2>
<ul>
    <li><strong>Requests:</strong> A library used to "fetch" the raw HTML of a website.</li>
    <li><strong>BeautifulSoup (bs4):</strong> A library used to "navigate" and extract specific pieces of data (like prices or titles) from that HTML.</li>
</ul>

<h2>A Simple Scraper</h2>
<pre><code class="language-python">import requests
from bs4 import BeautifulSoup

# 1. Fetch the raw HTML
url = "https://example.com"
response = requests.get(url)

# 2. Parse the HTML
soup = BeautifulSoup(response.text, "html.parser")

# 3. Extract the H1 title
title = soup.find("h1").text
print(f"Page Title: {title}")

# 4. Extract all links
links = soup.find_all("a")
for link in links:
    print(link.get("href"))</code></pre>

<div class="alert alert-info">
    <strong>Browser Automation:</strong> If a website is "dynamic" (the data is loaded with JavaScript after the page opens), <code>requests</code> won't see it. In those cases, we use <strong>Selenium</strong> or <strong>Playwright</strong> to control a real web browser.
</div>

<div class="alert alert-warning">
    <strong>Ethics & Legal:</strong> Before scraping, always check the website's <code>/robots.txt</code> file (e.g., <code>amazon.com/robots.txt</code>). Don't scrape too fast or you might get your IP address banned!
</div>
