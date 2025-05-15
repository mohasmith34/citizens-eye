document.addEventListener('DOMContentLoaded', function() {
    // Menu Navigation
    const menuItems = document.querySelectorAll('.menu-item');
    const contentSections = document.querySelectorAll('.content-section');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all menu items and content sections
            menuItems.forEach(i => i.classList.remove('active'));
            contentSections.forEach(section => section.classList.remove('active'));
            
            // Add active class to clicked menu item
            this.classList.add('active');
            
            // Show corresponding content section
            const target = this.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
        });
    });
    
    // Modal functionality
    const modal = document.getElementById('reportModal');
    const closeModalBtn = document.querySelector('.close-modal');
    const cancelBtn = document.querySelector('.cancel-btn');
    
    function openModal() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Close modal when clicking X, cancel button, or outside modal
    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // View report function
    window.viewReport = function(reportId) {
        // In a real app, you would fetch the report data from the server
        // For now, we'll simulate it with sample data
        const sampleReport = {
            id: reportId,
            user: 'John Doe',
            category: 'Pothole',
            location: '123 Main Street',
            date: 'June 15, 2023',
            status: 'pending',
            description: 'Large pothole causing traffic issues. Needs immediate attention as it\'s damaging vehicles.',
            images: [
                'https://via.placeholder.com/800x600?text=Pothole+1',
                'https://via.placeholder.com/800x600?text=Pothole+2'
            ]
        };
        
        // Populate modal with report data
        document.getElementById('modal-user').textContent = sampleReport.user;
        document.getElementById('modal-category').textContent = sampleReport.category;
        document.getElementById('modal-location').textContent = sampleReport.location;
        document.getElementById('modal-date').textContent = sampleReport.date;
        document.getElementById('modal-status').value = sampleReport.status;
        document.getElementById('modal-description').textContent = sampleReport.description;
        
        // Clear and add images
        const imagesContainer = document.querySelector('.report-images');
        imagesContainer.innerHTML = '';
        
        sampleReport.images.forEach(imgUrl => {
            const img = document.createElement('img');
            img.src = imgUrl;
            img.alt = 'Report Image';
            imagesContainer.appendChild(img);
        });
        
        openModal();
    };
    
    // Edit report function
    window.editReport = function(reportId) {
        viewReport(reportId); // For now, same as view but with edit capabilities
    };
    
    // View user function
    window.viewUser = function(userId) {
        alert('View user ' + userId);
        // Implement user viewing functionality
    };
    
    // Edit user function
    window.editUser = function(userId) {
        alert('Edit user ' + userId);
        // Implement user editing functionality
    };
    
    // Delete user confirmation
    window.confirmDeleteUser = function(userId) {
        if (confirm('Are you sure you want to delete this user?')) {
            alert('User ' + userId + ' deleted');
            // Implement user deletion functionality
        }
    };
    
    // Initialize the first content section as active
    document.querySelector('.menu-item.active').click();
});