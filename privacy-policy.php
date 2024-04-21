
<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:index.php");
}include 'header.php';
?>
<div class="container mt-4">
    <h1 class="mb-4">Privacy Policy</h1>

    <p>This privacy policy applies to the Payroll System and all related services provided by Tyler and Tommy.</p>

    <h2 class="mt-5">Information We Collect</h2>
    <p>We may collect personal information that you provide voluntarily when you use our website or services. This information may include your name, email address, and phone number.</p>

    <h2 class="mt-5">How We Use Your Information</h2>
    <p>We may use the information we collect for various purposes, including:</p>
    <ul>
        <li>Providing and maintaining our website</li>
        <li>Improving, personalizing, and tailoring our website</li>
        <li>Communicating with you to provide updates and information</li>
        <li>Complying with legal obligations</li>
    </ul>

    <h2 class="mt-5">Third-Party Services</h2>
    <p>We may use third-party services to analyze website usage and process payments. These services may have access to your personal information as needed to perform their functions, but they are not permitted to use it for any other purpose.</p>

    <h2 class="mt-5">Cookies</h2>
    <p>Cookies are not applicable in this current build. Please come back later for updates</p>

    <h2 class="mt-5">Updates to This Privacy Policy</h2>
    <p>We reserve the right to update this privacy policy at any time. We will notify you of any changes by posting the new privacy policy on this page.</p>

    <h2 class="mt-5">Contact Us</h2>
    <p>If you have any questions or concerns about this privacy policy, please contact us at tnoudara@student.fitchburgstate.edu.</p>
</div>

<!-- Bootstrap Bundle with Popper -->
<?php include 'footer.php'; ?>

