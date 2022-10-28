<?php
$con = mysqli_connect("localhost","resumeinfo","");
mysqli_select_db($con,"resumeinfo");

$query = "SELECT * FROM resumeinfo";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$name = $row['name'];
$email = $row['email'];
$phoneno = $row['phoneno'];
$url = $row['url'];
$address = $row['address'];
$perc12 = $row['perc12'];
$perc10 = $row['perc10'];
$cgpa = $row['cgpa'];

?>


<html>
 <head>
<link type="text/css" rel="stylesheet" href="resume.css"/>
<title>My Website</title> 
</head>
<body>
<div id="header">
<p id="name"><?php echo $name?></p>
         <a href="mailto:<?php echo $email?>" target="_blank"><p id="email"><?php echo $email?></p></a>
     </div>
     <div class="right">
            <p>
            <ul id="personal-info" style="list-style-type: none;">
            <li><strong style="text-decoration:underline;">Personal Info : </strong></li>
                <li>Phone number : <?php echo $phoneno?></li>
                <li>Profile URL: <a href="<?php echo $url ?>">Profile URL</a></li>
                <li>Address : <?php echo $address?></li>
                <li>12th Percentage : <?php echo $perc12?>%</li>
                <li>10th Percentage : <?php echo $perc10?>%</li>
                <li>CGPA : <?php echo $cgpa?></li>
            </ul>
            </p>
            <h3>CV Highlights</h3>
            <p>
            <ul>
                <li>Currently going through B.tech CSE</li>
                <li>Learnt basic Python, JavaScript, HTML, CSS</li>
                <li>An independent, dedicated, efficient person. These attributes are proved through the series of courses I have taken or I am taking as of now independently through online platforms.</li>
                <li>Good Communication Skills, Presentation Skills, attitude towards leadership, authorisation and delegation, conflict resolution and negotiation and a very good team worker.</li></ul>
            </p>
            <h3>Educational Qualifications</h3>
            <p>
                <ul>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed at esse porro sapiente aspernatur optio perspiciatis perferendis quidem aut laudantium?</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae vel, ex itaque doloremque blanditiis quisquam magni harum assumenda in enim quae, deleniti natus voluptatem reiciendis, neque minus pariatur consequatur ducimus.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, minus debitis perspiciatis harum aliquid quo quia. Corporis laudantium nemo quod distinctio sunt sequi maxime quisquam ab vero quia? Debitis placeat facere facilis iure nulla deleniti eligendi inventore esse autem rerum?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic officia fugiat dolores iste animi? Recusandae!</li></ul>
                </p>
            <h3>Independent Courses</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">HTML & CSS for Beginners – Web Fundamentals</span> – Codecademy.com</li>
                <li>
                <span id="course-name">Python – Fundamentals and Dynamic Programming </span> - Codecademy.com</li>
                <li>
                <span id="course-name">JavaScript – Programming Basics, JS Apps and Build Games </span> - Codecademy.com</li>
                <li>
                <span id="course-name">Introduction to Finance</span> - Coursera.org & University of Michigan</li>
            </ul>
            <h3>Technical Skills</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Operating Systems:</span> DOS, Windows 98, Windows 2000, Windows XP, Windows NT, Windows Server 2003, Windows Vista, Windows 7, Macintosh Computers (OS X), Linux (Ubuntu, Fedora)</li>
                <li>
                <span id="course-name">Application Software:</span> Office 97-2003; Office XP, Office 2007, Office for Mac 2011, iWork ’09, Sage Accounting Software, Sage 50 (Accounting Software), Excel 2003/2007 for Financial Modelling spreadsheets.</li>
                <li>
                <span id="course-name">Programming Skills:</span>HTML, CSS, Python, JavaScript, learning C and C++</li></ul>
            </p>
            <h3>Certifications / Awards:</h3>
            <p>
            <ul>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur optio ipsa assumenda deserunt vitae recusandae vero.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur iusto est cumque laboriosam, perspiciatis dolorum ex quod reiciendis?</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odio a consectetur excepturi magni. Deserunt cupiditate sunt ex repellendus architecto.</li></ul>
            </p>
            <h3>Other Information:</h3>
            <p>
            <ul>
                <li>
                A young, determined hard and smart working person. I believe in task based roles and complete ownership of work.
                <li>
                <span id="course-name">Languages Known:</span>English, Hindi, Gujarati and Sindhi</li>
                <li>
                <span id="course-name">Hobbies:</span>I love reading Finance and IT related books / magazines, playing Chess, swimming, listening music, surfing Internet, self-learning through e-courses.</li>
                <li>
                <span id="course-name">Expected Salary:</span>As per company standards</li>
                <li>
                <span id="course-name">Area of Interest:</span>Software Development, Programming, Start-ups, Coding, App Development, Technical Support, Support Engineer, Customer Happiness, Client service, Investment Banking, Corporate Finance, Hedge Funds, Mergers & Acquisitions, Analyst, Equity Research, Business Analysis</li>
                <li>
                <span id="course-name">Joining Date:</span>Immediate</li></ul>
            </p>
            <h3>Declaration</h3>
            <p>
            I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
     </div>
     <div id="footer"></div>
    </body>
</html>