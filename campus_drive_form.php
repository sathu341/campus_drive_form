<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camerin Innovation - Campus Drive Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Camerin Innovation - Campus Drive Registration Form</h2>
        <form action="process_form.php" method="post">
            <div class="form-group">
                <label for="fullname">Full Name *</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="tel" id="contact" name="contact">
            </div>
            <div class="form-group">
                <label for="parent_contact">Parent Contact Number *</label>
                <input type="tel" id="parent_contact" name="parent_contact" required>
            </div>
            <div class="form-group">
                <label for="stream">Stream for Interview *</label>
                <select id="stream" name="stream" required>
                    <option value="">Select Stream</option>
                    <option value="IT">IT</option>
                    <option value="Non-IT">Non-IT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="college">College Details</label>
                <input type="text" id="college" name="college">
            </div>
            <div class="form-group">
                <label for="profile">Profile for Interview *</label>
                <select id="profile" name="profile" required>
                    <option value="">Select Profile</option>
                    <option value="Flutter associate developer">Flutter associate developer</option>
                    <option value="Java associate developer">Java associate developer</option>
                    <option value="React nodeJS associate developer">React nodeJS associate developer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" id="qualification" name="qualification">
            </div>
            <div class="form-group">
                <label for="college_name">College Name</label>
                <input type="text" id="college_name" name="college_name">
            </div>
            <div class="form-group">
                <label for="graduation_month">Graduation Month *</label>
                <input type="month" id="graduation_month" name="graduation_month" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
