// Script for sticky navbar
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('bg-black');
        navbar.classList.add('shadow-md');
    } else {
        navbar.classList.remove('bg-black');
        navbar.classList.remove('shadow-md');
    }
});

// Mobile sidebar toggle
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileSidebar = document.getElementById('mobile-sidebar');
const closeSidebarButton = document.getElementById('close-sidebar');
const menuOverlay = document.getElementById('menu-overlay');

// Open sidebar
mobileMenuButton.addEventListener('click', function () {
    mobileSidebar.style.width = "280px";
    menuOverlay.classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
});

// Close sidebar
function closeSidebar() {
    mobileSidebar.style.width = "0";
    menuOverlay.classList.add('hidden');
    document.body.style.overflow = ''; // Re-enable scrolling
}

closeSidebarButton.addEventListener('click', closeSidebar);
menuOverlay.addEventListener('click', closeSidebar);

// Mobile dropdown toggle
const mobileDropdownButton = document.getElementById('mobile-dropdown-button');
const mobileDropdownButton2 = document.getElementById('mobile-dropdown-button-2');
const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
const mobileDropdownMenu2 = document.getElementById('mobile-dropdown-menu-2');

mobileDropdownButton.addEventListener('click', function () {
    mobileDropdownMenu.classList.toggle('hidden');
});
mobileDropdownButton2.addEventListener('click', function () {
    mobileDropdownMenu2.classList.toggle('hidden');
});

// Close sidebar when menu items are clicked
const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');

mobileMenuItems.forEach(item => {
    item.addEventListener('click', function () {
        closeSidebar();
        // Also close the dropdown menu if it's open
        mobileDropdownMenu.classList.add('hidden');
    });
});