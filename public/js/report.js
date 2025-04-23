// Preview uploaded images
document.getElementById('images').addEventListener('change', function(e) {
    const previewContainer = document.getElementById('imagePreview');
    previewContainer.innerHTML = '';
    
    if (this.files) {
        Array.from(this.files).forEach(file => {
            if (file.type.match('image.*')) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'preview-image';
                    previewContainer.appendChild(img);
                }
                
                reader.readAsDataURL(file);
            }
        });
    }
});