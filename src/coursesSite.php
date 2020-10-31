<!-- Include header -->
<?php
include ("../includes/header.php"); 
?> 
<div class="underAdminContainer">
<?php

session_start();
/* Title of the page */
$page_title = "Admin";
/* Check if user is aldready signed in */
if (!isset($_SESSION['username'])) {
    header("Location: login.php?message=");
}
/* Include header */
include("includes/header2.php");
include("classes/posted.class.php");
?>

<!-- Section start -->
<section class="sectioning">
    <section id="section_admin">
        <article id="left"><br/>
        <h2><a href="admin.php"><- Tillbaka till start </a></h2><br/><br/>

        

    <section id="upd">
        <div id="updateDiv"></div>
    </section><br/><br/><br/>
    <h2>Kurser</h2><br/><br/>
    <div id="courses">
        <!-- Courses from DB -->
    </div>

    <section id="courses1"><br/><br/><br/>
        <h2>Lägg till kurs:</h2>
        <form id="myCourse">
            <label id="acode" for="code">Kurskod:</label><br/>
            <input type="text" name="code" id="code">
            <br>
            <label for="name">Kursnamn:</label><br/>
            <input type="text" name="name" id="name">
            <br>
            <label id="prog" for="progression">Progression:</label><br/>
            <input type="text" name="progression" id="progression">
            <br>
            <label id="syllabus" for="coursesyllabus">Kursplan:</label> <br/>
            <textarea name="coursesyllabus" id="coursesyllabus"></textarea>

            <br>
            <input type="button" value="Lägg till" id="addCourse">
        </form>
    </section> <br/><br/><br/>
 


    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
    <script src="js/main3.js"></script>

    <!-- Include footer -->
    <?php
    include("../includes/footer.php");
    ?>

</div>
