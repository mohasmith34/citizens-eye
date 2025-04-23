function toggleUserMenu() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.classList.toggle('show');
  }
  
  // Close the dropdown if clicked outside
  window.onclick = function(event) {
    if (!event.target.matches('.user-icon') && !event.target.closest('.user-icon')) {
      const dropdowns = document.getElementsByClassName("user-dropdown");
      for (let i = 0; i < dropdowns.length; i++) {
        const openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }


