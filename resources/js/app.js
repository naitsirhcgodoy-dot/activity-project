// resources/js/app.js
document.addEventListener('DOMContentLoaded', function () {
  const sidebar = document.getElementById('sidebar');
  const toggle = document.getElementById('sidebarToggle');
  const overlay = document.getElementById('overlay');

  if (!sidebar || !toggle) return;

  function openSidebar() {
    sidebar.classList.add('open');
    if (overlay) overlay.classList.add('show');
    document.body.style.overflow = 'hidden';
  }
  function closeSidebar() {
    sidebar.classList.remove('open');
    if (overlay) overlay.classList.remove('show');
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', function (e) {
    e.stopPropagation();
    if (sidebar.classList.contains('open')) closeSidebar();
    else openSidebar();
  });

  // Click overlay to close
  if (overlay) {
    overlay.addEventListener('click', closeSidebar);
  }

  // Click outside sidebar to close (mobile)
  document.addEventListener('click', function (e) {
    if (window.innerWidth > 768) return;
    if (!sidebar.classList.contains('open')) return;
    const inside = sidebar.contains(e.target) || toggle.contains(e.target);
    if (!inside) closeSidebar();
  });

  // Close on Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && sidebar.classList.contains('open')) closeSidebar();
  });
});
