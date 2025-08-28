<!-- index.php -->
<body style="background: url('bg.jpg') no-repeat center center/cover; padding: 60px; text-align: center; color: white;">
<?php include 'includes_header.php'; ?>

<h1>Search Between More Than <span style="color:yellow;">50,000</span> Open Jobs</h1>

<form action="search_result.php" method="get" class="search-box" style="margin-top:20px;">
    <select name="title" style="padding:10px; margin:5px;">
        <option value="">Select Job Title</option>
        <option value="Software Developer">Software Developer</option>
        <option value="Accountant">Accountant</option>
        <option value="Web Designer">Web Designer</option>
    </select>

    <select name="city" style="padding:10px; margin:5px;">
        <option value="">Select Area</option>
        <option value="INDIA">INDIA</option>
        <option value="AFRICA">AFRICA</option>
        <option value="CANADA">CANADA</option>
    </select>

    <select name="sector" style="padding:10px; margin:5px;">
        <option value="">Select Sector</option>
        <option value="IT">IT</option>
        <option value="Marketing">Marketing</option>
        <option value="Finance">Finance</option>
        <option value="Education">Education</option>
    </select>
    
    <button type="submit" style="padding:10px 20px; background:#0056b3; color:white; border:none; cursor:pointer;">
        Find Job
    </button>
</form>

<section style="padding:40px; text-align:center;">
    <h2>Popular Categories</h2>
    <p>20+ categories waiting for you</p>
</section>

<?php include 'includes_footer.php'; ?>
