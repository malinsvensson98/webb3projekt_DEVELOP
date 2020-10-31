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
    header("Location: login.php?message=" . "<br><span style='color:red'></span>");
}
/* Include header */
include("includes/header2.php");
include("classes/posted.class.php");
?>

<!-- Section begins -->
<section class="sectioning">
    <section id="section_admin">
        <article id="left">        <br/><br/>
        <h2><a href="admin.php"><- Tillbaka till start </a></h2><br/><br/>

    <section id="updWork">
        <div id="updateDivWork"></div>
    </section>
<br/><br/>
<br/>

    <h2>Jobb</h2>
    <div id="work">
</div>

<section id="courses2"><br/><br/><br/><br/>
        <h2>Lägg till jobb:</h2>
        <form id="myWork">
            <label id="acompany" for="company">Company:</label><br/>
            <input type="text" name="company" id="company">
            <br>
            <label for="title">Title:</label><br/>
            <input type="text" name="title" id="title">
            <br>
            <label id="alength" for="progression">Length:</label><br/>
            <input type="text" name="length" id="length">
            <br>
            <br>
            <input type="button" value="Lägg till" id="addWork">
        </form>
    </section> <br/><br/><br/><br/><br/><br/><br/><br/>



    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
    <script src="js/main3.js"></script>

    <!-- Include footer -->
    <?php
    include("../includes/footer.php");
    ?>

</div>