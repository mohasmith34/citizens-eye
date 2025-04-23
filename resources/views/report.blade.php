<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report an Issue</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/report.css">
</head>
<body>
    <div class="container">
        <h1>Report a Public Issue</h1>
        <form action="/report" method = "POST" id="reportForm" enctype="multipart/form-data">
            @csrf
            <!-- Image Upload -->
            <div class="form-group">
    <label for="images" class="upload-label">Upload Images:</label>
    <div class="file-input-container">
        <input type="file" id="images" name="images[]" accept="image/*" multiple class="file-input">
        <label for="images" class="file-input-label">
            <span class="browse-text">Choose files</span>
            <span class="drag-text">or drag and drop</span>
        </label>
    </div>
    <div id="imagePreview" class="image-preview-container"></div>
</div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" placeholder="Describe the issue..."></textarea>
            </div>

            <!-- Category -->
            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="category">
                    <option value="">Select a category</option>
                    <option value="pothole">Pothole</option>
                    <option value="streetlight">Broken Streetlight</option>
                    <option value="garbage">Garbage</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Location -->
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter location (e.g., street name)">
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit Report</button>
        </form>
    </div>
    <script src="js/report.js"></script>
</body>
</html>