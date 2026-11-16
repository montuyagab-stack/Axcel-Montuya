<?php
// =============================================
// 1. PERSONAL INFORMATION
// Change the values below to update your profile.
// =============================================

$fullName = "Axcel N. Montuya";
$course = "Bachelor of Science in Information Technology";
$school = "Mater Dei College";
$email = "montuyagab@gmail.com";
$profilePhoto = "axcelM.jpg";

$aboutMe = "I'm an IT student who enjoys technology, creativity, and learning new things.";

$skills = [
    "HTML",
    "CSS",
    "PHP",
    "Java",
    "Communication",
    "Teamwork"
];

$hobbies = [
    "Dancing",
    "Choreography",
    "Music",
    "Technology"
];

// Put your photo in this same folder and name it profile.jpg.
// If the photo is not found, the page will show your initials instead.
$profilePhoto = "axcelM.jpg";

// Create initials from the first letters of your name.
$nameParts = explode(" ", $fullName);
$initials = "";
foreach ($nameParts as $part) {
    if ($part !== "") {
        $initials .= strtoupper(substr($part, 0, 1));
    }
}
$initials = substr($initials, 0, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal student portfolio of <?php echo htmlspecialchars($fullName); ?>">
    <title><?php echo htmlspecialchars($fullName); ?> | Student Portfolio</title>

    <style>
        /* =============================================
           2. GENERAL STYLES
           These styles control the whole webpage.
        ============================================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 85px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fa;
            color: #263238;
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1100px, 90%);
            margin: 0 auto;
        }

        /* =============================================
           3. HEADER AND NAVIGATION
        ============================================= */
        header {
            background: rgba(255, 255, 255, 0.96);
            border-bottom: 1px solid #e7ebf0;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .navbar {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            color: #3157a4;
            font-size: 1.25rem;
            font-weight: 800;
            letter-spacing: 1px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
        }

        nav a {
            color: #596579;
            font-size: 0.92rem;
            font-weight: 600;
            transition: color 0.25s ease;
        }

        nav a:hover {
            color: #3157a4;
        }

        /* =============================================
           4. HERO / PROFILE SECTION
        ============================================= */
        .hero {
            padding: 85px 0 70px;
            background: linear-gradient(135deg, #edf3ff, #ffffff 65%);
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 55px;
        }

        .hero-text {
            flex: 1;
        }

        .eyebrow {
            display: inline-block;
            color: #3157a4;
            background: #e3ebff;
            padding: 7px 14px;
            border-radius: 30px;
            font-size: 0.82rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .hero h1 {
            color: #1e293b;
            font-size: clamp(2.3rem, 5vw, 3.8rem);
            line-height: 1.12;
            margin-bottom: 15px;
        }

        .hero h1 span {
            color: #3157a4;
        }

        .hero p {
            color: #647084;
            max-width: 590px;
            font-size: 1.05rem;
            margin-bottom: 25px;
        }

        .button {
            display: inline-block;
            background: #3157a4;
            color: #ffffff;
            padding: 12px 22px;
            border-radius: 8px;
            font-weight: 700;
            transition: background 0.25s ease, transform 0.25s ease;
        }

        .button:hover {
            background: #244481;
            transform: translateY(-3px);
        }

        .profile-photo {
            width: 245px;
            height: 245px;
            flex-shrink: 0;
            border-radius: 50%;
            border: 8px solid #ffffff;
            box-shadow: 0 15px 40px rgba(36, 68, 129, 0.15);
            object-fit: cover;
            background: #dce6fa;
        }

        .photo-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3157a4;
            font-size: 4rem;
            font-weight: 800;
        }

        /* =============================================
           5. GENERAL SECTION AND CARD STYLES
        ============================================= */
        section {
            padding: 65px 0;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-heading h2 {
            color: #1e293b;
            font-size: 2rem;
            margin-bottom: 8px;
        }

        .section-heading p {
            color: #7b8798;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e8edf3;
            border-radius: 14px;
            padding: 27px;
            box-shadow: 0 8px 25px rgba(31, 45, 61, 0.045);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(31, 45, 61, 0.09);
        }

        .card h3 {
            color: #3157a4;
            margin-bottom: 10px;
            font-size: 1.15rem;
        }

        .card p {
            color: #687588;
        }

        /* =============================================
           6. ABOUT AND EDUCATION
        ============================================= */
        .two-column {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .education-label {
            color: #8a96a8;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            margin-bottom: 5px;
        }

        /* =============================================
           7. SKILLS AND HOBBIES
        ============================================= */
        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }

        .tag {
            background: #eaf0ff;
            color: #3157a4;
            border: 1px solid #dce6ff;
            border-radius: 30px;
            padding: 10px 17px;
            font-size: 0.94rem;
            font-weight: 700;
            transition: background 0.25s ease, transform 0.25s ease;
        }

        .tag:hover {
            background: #d9e4ff;
            transform: translateY(-3px);
        }

        .soft-background {
            background: #eef2f7;
        }

        /* =============================================
           8. CONTACT SECTION
        ============================================= */
        .contact-card {
            max-width: 650px;
            margin: 0 auto;
            text-align: center;
        }

        .email-link {
            display: inline-block;
            color: #3157a4;
            font-weight: 700;
            margin-top: 12px;
            overflow-wrap: anywhere;
        }

        .email-link:hover {
            text-decoration: underline;
        }

        /* =============================================
           9. FOOTER
        ============================================= */
        footer {
            background: #1e293b;
            color: #d6deea;
            text-align: center;
            padding: 23px 15px;
            font-size: 0.9rem;
        }

        /* =============================================
           10. RESPONSIVE DESIGN
           These rules adjust the layout for smaller screens.
        ============================================= */
        @media (max-width: 700px) {
            .navbar {
                padding: 15px 0;
                flex-direction: column;
            }

            nav {
                justify-content: center;
                gap: 12px 18px;
            }

            .hero {
                padding: 55px 0;
            }

            .hero-content {
                flex-direction: column-reverse;
                text-align: center;
                gap: 28px;
            }

            .profile-photo {
                width: 190px;
                height: 190px;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .two-column {
                grid-template-columns: 1fr;
            }

            section {
                padding: 48px 0;
            }
        }
    </style>
</head>

<body>

    <!-- =============================================
         11. PAGE HEADER
         The navigation links move to each section.
    ============================================== -->
    <header>
        <div class="container navbar">
            <a href="#home" class="logo">AXCEL.</a>

            <nav aria-label="Main navigation">
                <a href="#about">About</a>
                <a href="#education">Education</a>
                <a href="#skills">Skills</a>
                <a href="#hobbies">Hobbies</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- =============================================
             12. PROFILE / HOME SECTION
        ============================================== -->
        <section class="hero" id="home">
            <div class="container hero-content">
                <div class="hero-text">
                    <span class="eyebrow">STUDENT PORTFOLIO</span>

                    <h1>Hello, I'm <span><?php echo htmlspecialchars($fullName); ?></span></h1>

                    <p>
                        <?php echo htmlspecialchars($course); ?>
                        student at <?php echo htmlspecialchars($school); ?>.
                        Welcome to my personal profile!
                    </p>

                    <a href="#contact" class="button">Get in Touch</a>
                </div>

                <?php if (file_exists($profilePhoto)): ?>
                    <!-- Display the photo if profile.jpg exists. -->
                    <img
                        src="<?php echo htmlspecialchars($profilePhoto); ?>"
                        alt="Profile photo of <?php echo htmlspecialchars($fullName); ?>"
                        class="profile-photo"
                    >
                <?php else: ?>
                    <!-- Show initials until a profile photo is added. -->
                    <div class="profile-photo photo-placeholder" aria-label="Profile photo placeholder">
                        <?php echo htmlspecialchars($initials); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- =============================================
             13. ABOUT ME SECTION
        ============================================== -->
        <section id="about">
            <div class="container">
                <div class="section-heading">
                    <h2>About Me</h2>
                    <p>A little introduction about myself.</p>
                </div>

                <div class="card">
                    <p><?php echo htmlspecialchars($aboutMe); ?></p>
                </div>
            </div>
        </section>

        <!-- =============================================
             14. EDUCATIONAL BACKGROUND SECTION
        ============================================== -->
        <section class="soft-background" id="education">
            <div class="container">
                <div class="section-heading">
                    <h2>Educational Background</h2>
                    <p>My current academic journey.</p>
                </div>

                <div class="two-column">
                    <div class="card">
                        <p class="education-label">School</p>
                        <h3><?php echo htmlspecialchars($school); ?></h3>
                        <p>My current educational institution.</p>
                    </div>

                    <div class="card">
                        <p class="education-label">Course / Program</p>
                        <h3><?php echo htmlspecialchars($course); ?></h3>
                        <p>Currently pursuing my college education.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =============================================
             15. SKILLS SECTION
             PHP loops display each skill from the array.
        ============================================== -->
        <section id="skills">
            <div class="container">
                <div class="section-heading">
                    <h2>My Skills</h2>
                    <p>Some skills I have developed and continue to improve.</p>
                </div>

                <div class="tag-list">
                    <?php foreach ($skills as $skill): ?>
                        <span class="tag"><?php echo htmlspecialchars($skill); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- =============================================
             16. HOBBIES AND INTERESTS SECTION
        ============================================== -->
        <section class="soft-background" id="hobbies">
            <div class="container">
                <div class="section-heading">
                    <h2>Hobbies &amp; Interests</h2>
                    <p>Things I enjoy doing in my free time.</p>
                </div>

                <div class="tag-list">
                    <?php foreach ($hobbies as $hobby): ?>
                        <span class="tag"><?php echo htmlspecialchars($hobby); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- =============================================
             17. CONTACT INFORMATION SECTION
        ============================================== -->
        <section id="contact">
            <div class="container">
                <div class="section-heading">
                    <h2>Contact Me</h2>
                    <p>Feel free to reach out through email.</p>
                </div>

                <div class="card contact-card">
                    <h3>Let's Connect!</h3>
                    <p>You can contact me using the email address below.</p>

                    <a class="email-link" href="mailto:<?php echo htmlspecialchars($email); ?>">
                        <?php echo htmlspecialchars($email); ?>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- =============================================
         18. PAGE FOOTER
    ============================================== -->
    <footer>
        <p>
            &copy; <?php echo date("Y"); ?>
            <?php echo htmlspecialchars($fullName); ?>.
            All rights reserved.
        </p>
        <p>Student Portfolio | <?php echo htmlspecialchars($school); ?></p>
    </footer>

</body>
</html>
