<?php
session_start();
if (!isset($_SESSION["username"])) {

    header("location:index.php");
}
include 'header.php';
?>
<div class="container mt-4">
    <h1 class="mb-4">Terms of Service</h1>

        <h2 class="mt-5">1. Welcome to Our Payroll Platform</h2>
        <p>Welcome to Payroll Management. These terms and conditions outline the rules and regulations for the use of our payroll services.</p>

        <h2 class="mt-5">2. Your Payroll Data</h2>
        <p>Your payroll data is sacred to us. We ensure the highest level of security and confidentiality for all your sensitive information. Rest assured, your data is in good hands.</p>

        <h2 class="mt-5">3. Using Our Services</h2>
        <p>By using our payroll services, you agree to abide by these terms and conditions. Failure to comply with these terms may result in the termination of our services at our discretion.</p>

        <h2 class="mt-5">4. Access and Security</h2>
        <p>You are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer or device. You agree to accept responsibility for all activities that occur under your account or password.</p>

        <h2 class="mt-5">5. Limitation of Liability</h2>
        <p>We strive to provide accurate and reliable payroll services, but we cannot guarantee the accuracy, completeness, or timeliness of the information provided. In no event shall Payroll Management be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of our services.</p>

        <h2 class="mt-5">6. Changes to Terms</h2>
        <p>We reserve the right to modify these terms and conditions at any time, and such modifications shall be effective immediately upon posting on our website. You agree to review these terms periodically to be aware of any changes.</p>

        <h2 class="mt-5">7. Governing Law & Jurisdiction</h2>
        <p>These terms and conditions are governed by and construed in accordance with the laws of Payroll Management. Any dispute arising out of or in connection with these terms and conditions shall be subject to the exclusive jurisdiction of the courts of Massachusetts.</p>

        <h2 class="mt-5">Contact Us</h2>
        <p>If you have any questions or concerns about these Terms of Service, please contact us at tnoudara@student.fitchburgstate.edu.</p>
</div>
<?php include 'footer.php'; ?>