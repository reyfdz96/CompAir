<?php
$title = 'About Us';
define('FILENAME', pathinfo(__FILE__, PATHINFO_FILENAME) . ".php");

require_once './templates/header.php';
require_once './templates/sidebar.php';
require_once './templates/footer.php';

$sidebar = getSidebar('form-schedule.php');

echo <<< _END
$header

    <div class="main container">
        <section id="main">
            <div id="main-heading">
                <h1>$title</h1>
            </div>

            <p> Started <span id="years">in 2012</span>, by father Orlando and son Ronaldo Hernandez, CompAir was founded with one mission in mind; to
            provide a better service, at a lower price. Family-owned and operated, we understand the frustration of having our
            appliances shut down at the worst time possible. That is why we are committed to offering emergency services 24/7,
            or (if the problem is bad enough) temporary replacements, all so that the comfort of your life is not immediately
            stopped by a minor inconvenience. </p>

            <p> We pride ourselves with providing an individualized service for each and every customer. We believe that each
            presents a unique opportunity for a lasting business relationship, and as such they deserve special attention and
            quality results. Whether you need a new AC installed, or your refrigerator stopped running, or the water heater is
            not doing its job, we are prepared to deal with all of it with skill and professionalism. If you live in the areas
            of Kendall, Coral Gables, Doral, Palmetto Bay, or other surrounding areas, just <em><strong>give us a call</strong></em>
            and we will send you the right person for the job. Choose CompAir and rest easy knowing that you will have your desired
            level of comfort in no time.</p>

            <div class="image">
                <img class="fit" src="./img/delivery-van.png" alt="CompAir Van">
            </div>

            <h2>Facts About Us</h2>

            <ol>
                <li>Started in 2012</li>
                <li>Faimily-owned and operated</li>
                <li>Emergency services offered 24/7</li>
                <li>Detailed estimates and scheduling at your convinence</li>
                <li>Reasonable and upfront pricing</li>
                <li>Skilled, fast, and well-trained technicians</li>
                <li>Professional HVAC installation, maintenance, replacement, and repair</li>
                <li>Residential, commercial and industrial services</li>
                <li>Free HVAC system troubleshooting assistance by phone</li>
                <li>Customer satisfaction guaranteed</li>
            </ol>

            <h2>Service Areas</h2>

            <ul>
                <li>Kendall</li>
                <li>Coral Gables</li>
                <li>Doral</li>
                <li>Palmetto Bay</li>
            </ul>
            <p>*We also offer services to surrounding areas.</p>

            <p>We are headquartered at <i>3162 Ridenour Street, Miami, FL 33176</i>:</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28771.2255397859!2d-80.37598608257406!3d25.657925955762252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9c6ceb77db401%3A0x2eace53248d8248b!2sMiami%2C%20FL%2033176!5e0!3m2!1sen!2sus!4v1607592981103!5m2!1sen!2sus" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>

        <script>
            function yearsAgo(pastDate)
            {
                // Create a variable to hold a new Date object (defaults to now)
                var today = new Date();

                // Get the year this year
                var year = today.getFullYear();

                // Get difference between then & now in milliseconds
                var difference = today.getTime() - pastDate.getTime();

                // Divide by number of milliseconds to get years
                difference = (difference / 31556900000);

                return Math.floor(difference);
            }

            // Set the date that the company was established
            var est = new Date('12/21/2012');

            // Create a variable called yearsAgo to hold the element whose id attribute has a value of message
            var years = document.getElementById('years');

            // Write the message into that element.
            years.textContent = yearsAgo(est) + ' years ago';
        </script>

        $sidebar
    </div>

$footer
_END;
?>