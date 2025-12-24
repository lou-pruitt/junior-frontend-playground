<?php
// HTTP Request/Response Procedure:
// 1. Your browser (the client) sends an HTTP request to the server (e.g., for index.php).
// 2. The server processes the request, runs any PHP code, and sends back an HTTP response.
// 3. The response contains HTML (and possibly CSS, JS, etc.), which the browser renders.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chyort's PHP Experiment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome to chyort's PHP Experiment</h1>
    <p>This page demonstrates the basics of HTTP and HTML, as introduced by Tim Berners-Lee.</p>

    <section style="margin:2em 0;padding:1em;background:#e0f7fa;border-radius:5px;">
        <h2>Book Chapters</h2>
        <ul>
        <?php
        $chapters = [
            'Introduction to Dynamic Web Content',
            'Setting Up a Development Server',
            'Introduction to PHP',
            'Expressions and Control Flow in PHP',
            'PHP Functions and Objects',
            'PHP Arrays',
            'Practical PHP',
            'Introduction to MySQL',
            'Mastering MySQL',
            'Accessing MySQL using PHP',
            'Form Handling',
            'Cookies, Sessions, and Authentication',
            'Exploring javascript',
            'Expressions and Control Flow in javascript',
            'Javascript Functions, Objects, and Arrays',
            'Javascript and PHP validation and error handling',
            'Using asynchronous communication',
            'Advanced CSS',
            'Accessing CSS from javascript',
            'Introduction to React',
            'Introduction to Node.js',
            'Bringing it all together'
        ];
        foreach ($chapters as $i => $title) {
            $num = str_pad($i+1, 2, '0', STR_PAD_LEFT);
            echo "<li><a href='chapters/chapter{$num}/README.md' target='_blank'>Chapter " . ($i+1) . ": $title</a></li>\n";
        }
        ?>
        </ul>
    </section>
    <pre style="background:#f4f4f4;padding:1em;border-radius:5px;">
Client (Browser)  --HTTP Request-->  Server (index.php)
Client (Browser)  <--HTTP Response--  Server (HTML, CSS, JS)
    </pre>

    <section style="margin:2em 0;padding:1em;background:#e8f6ff;border-radius:5px;">
        <h2>Benefits of PHP, MySQL, JavaScript, CSS, and HTML</h2>
        <ul>
            <li><strong>HTML</strong>: Structures web content; the backbone of every web page.</li>
            <li><strong>CSS</strong>: Styles and visually enhances HTML content for better user experience.</li>
            <li><strong>JavaScript</strong>: Adds interactivity and dynamic behavior to web pages in the browser.</li>
            <li><strong>PHP</strong>: Generates dynamic web content on the server; processes forms, interacts with databases, and more.</li>
            <li><strong>MySQL</strong>: Stores and manages data efficiently; works with PHP to create data-driven websites.</li>
        </ul>
    </section>
    <?php
    // Example of dynamic content:
    echo "<p>Today's date is " . date('Y-m-d') . "</p>";
    ?>
    <script src="js/script.js"></script>
</body>
</body>

<section style="margin:2em 0;padding:1em;background:#f0f8ff;border-radius:5px;">
    <h2>Using PHP, MySQL, JavaScript, CSS, and HTML5</h2>
    <ul>
        <li><strong>Using PHP:</strong> Server-side scripting to generate dynamic content. <br>
            <code>&lt;?php echo 'Hello from PHP!'; ?&gt;</code>
        </li>
        <li><strong>Using MySQL:</strong> Storing and retrieving data for your website. <br>
            <code>SELECT * FROM users WHERE active = 1;</code>
        </li>
        <li><strong>Using JavaScript:</strong> Making web pages interactive in the browser. <br>
            <code>&lt;script&gt;alert('Hello from JavaScript!');&lt;/script&gt;</code>
        </li>
        <li><strong>Using CSS:</strong> Styling and visually enhancing your web pages. <br>
            <code>body { background: #f0f8ff; }</code>
        </li>
        <li><strong>HTML5:</strong> The latest version of HTML, supporting modern web features like video, audio, and semantic tags. <br>
            <code>&lt;video src="movie.mp4" controls&gt;&lt;/video&gt;</code>
        </li>
    </ul>
</section>
</html>
</body>

<section style="margin:2em 0;padding:1em;background:#ffe8e8;border-radius:5px;">
    </section>

    <section style="margin:2em 0;padding:1em;background:#e8ffe8;border-radius:5px;">
        <h2>Open Source: Bringing It All Together</h2>
        <p>PHP, MySQL (and MariaDB), JavaScript, CSS, HTML5, Apache, and Node.js are all open source technologies. This means their source code is freely available, and anyone can use, modify, and share them.</p>
        <ul>
            <li><strong>Open source</strong> encourages collaboration, rapid innovation, and a large community of contributors.</li>
            <li>These technologies form the backbone of modern web development, powering everything from personal blogs to major web applications.</li>
            <li>By combining them, you can build powerful, interactive, and data-driven websites and apps—without licensing fees.</li>
        </ul>
        <p>Together, they make web development accessible to everyone, everywhere.</p>
    </section>

    <section style="margin:2em 0;padding:1em;background:#f9f9f9;border-radius:5px;">
        <h2>Chapter 1: Review Questions</h2>
        <ol>
            <li>
                <strong>What four components (at the minimum) are needed to create a fully dynamic web page?</strong>
                <br>
                <em>Answer:</em> <br>
                1. A web server (e.g., Apache or Node.js) to handle HTTP requests and serve files.<br>
                2. A server-side scripting language (e.g., PHP) to generate dynamic content.<br>
                3. A database system (e.g., MySQL or MariaDB) to store and retrieve data.<br>
                4. A client-side browser (with HTML, CSS, and JavaScript) to display and interact with the web page.
            </li>
            <li>
                <strong>What does HTML stand for?</strong><br>
                <em>Answer:</em> <br>
                HTML stands for <strong>HyperText Markup Language</strong>.
            </li>
            <li>
                <strong>Why does the name MySQL contain the letters SQL?</strong><br>
                <em>Answer:</em> <br>
                The letters SQL in MySQL stand for <strong>Structured Query Language</strong>, which is the standard language used to manage and query databases. MySQL is a database system that uses SQL for interacting with data.
            </li>
            <li>
                <strong>PHP and JavaScript are both programming languages that generate dynamic results for web pages. What is their main difference, and why would you use both?</strong><br>
                <em>Answer:</em> <br>
                The main difference is where they run: <strong>PHP</strong> runs on the server and generates HTML before it is sent to the browser, while <strong>JavaScript</strong> runs in the browser (client-side) and can change the page after it loads. You use both to create fully interactive and dynamic web applications—PHP for server-side logic (like database access), and JavaScript for client-side interactivity (like form validation or animations).
            </li>
            <li>
                <strong>What does CSS stand for?</strong><br>
                <em>Answer:</em> <br>
                CSS stands for <strong>Cascading Style Sheets</strong>.
            </li>
            <li>
                <strong>List three major new elements introduced in HTML5.</strong><br>
                <em>Answer:</em> <br>
                Three major new elements in HTML5 are:
                <ul>
                    <li><code>&lt;video&gt;</code> – for embedding video content</li>
                    <li><code>&lt;section&gt;</code> – for defining sections of a document</li>
                    <li><code>&lt;canvas&gt;</code> – for drawing graphics via scripting (JavaScript)</li>
                </ul>
            </li>
            <li>
                <strong>If you encounter a bug (which is rare) in one of the open source tools, how do you think you could get it fixed?</strong><br>
                <em>Answer:</em> <br>
                You can report the bug to the tool’s developers, usually by creating an issue on their official website or code repository (like GitHub or GitLab). You can also contribute a fix yourself if you have the skills, or wait for the community or maintainers to address it. Open source projects often have active communities that help resolve bugs quickly.
            </li>
            <li>
                <strong>Why is a framework such as jQuery or React so important for developing modern websites and web apps?</strong><br>
                <em>Answer:</em> <br>
                Frameworks like jQuery and React simplify and speed up web development. They provide pre-built functions, handle browser differences, and help organize code, making it easier to build interactive, efficient, and maintainable web apps. React, for example, enables building complex user interfaces with reusable components, while jQuery makes DOM manipulation and event handling much simpler.
            </li>
            <li>
                <strong>Why is the event-driven model of Node.js superior to the Apache web server?</strong><br>
                <em>Answer:</em> <br>
                Node.js uses an event-driven, non-blocking model, which allows it to handle many connections at once without creating a new thread for each request. This makes Node.js highly efficient and scalable for real-time applications (like chat or games). Apache, in contrast, uses a thread- or process-based model, which can be less efficient under heavy load. Node.js is especially superior for applications that require fast, concurrent handling of many connections.
            </li>
            <!-- Add more questions and answers as you progress through the chapter -->
        </ol>
        <p style="font-size:0.95em;color:#555;">As you move through each chapter, you can add more questions and answers here. This can become an interactive learning app as you progress!</p>
    </section>
    <h2>Node.js: An Alternative to Apache</h2>
    <p><strong>Node.js</strong> is a JavaScript runtime that lets you run JavaScript on the server, just like PHP runs on Apache. Unlike Apache, which is a traditional web server, Node.js lets you build your own web server in code.</p>
    <ul>
        <li><strong>Apache</strong>: Serves static and dynamic content, often using PHP for server-side scripting.</li>
        <li><strong>Node.js</strong>: Uses JavaScript for both server and client code, and is event-driven and non-blocking for high performance.</li>
    </ul>
    <p>Example: A simple Node.js web server</p>
    <pre><code>const http = require('http');
http.createServer((req, res) => {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello from Node.js!');
}).listen(3000);
console.log('Server running at http://localhost:3000/');
</code></pre>
    <p style="font-size:0.95em;color:#555;">Node.js is popular for real-time apps and when you want to use JavaScript everywhere.</p>
</section>
