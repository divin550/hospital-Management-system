// (function ($) {
//   'use strict';

//   $(function () {
//     var links = [
//       ['Dashboard', 'index.php', 'fa-dashboard'],
//       ['Appointments', 'appointments.php', 'fa-calendar'],
//       ['Patients', 'patients.php', 'fa-users'],
//       ['Doctors', 'doctors.php', 'fa-user-md'],
//       ['Departments', 'departments.php', 'fa-hospital-o'],
//       ['News', 'news.php', 'fa-newspaper-o'],
//       ['Reports', 'reports.php', 'fa-file-text-o'],
//       ['Settings', 'settings.php', 'fa-cog']
//     ];
//     var pageName = window.location.pathname.split('/').pop() || 'index.php';

//     if ($('body').hasClass('admin-page')) {
//       var $content = $('.admin-content');
//       var $sidebar = $('<aside class="admin-sidebar"><a class="admin-brand" href="index.php"><span class="admin-logo-mark">H</span>Health Center</a><ul class="admin-nav"></ul></aside>');
//       $.each(links, function (_, item) {
//         var active = item[1] === pageName ? ' active' : '';
//         $sidebar.find('.admin-nav').append('<li><a class="' + active.trim() + '" href="' + item[1] + '"><i class="fa ' + item[2] + '"></i>' + item[0] + '</a></li>');
//       });
//       $sidebar.find('.admin-nav').append('<li><a href="login.php"><i class="fa fa-sign-out"></i>Logout</a></li>');

//       var title = $('body').data('title') || 'Dashboard';
//       var $main = $('<div class="admin-main"></div>');
//       var $topbar = $('<header class="admin-topbar"><button class="admin-toggle" type="button" aria-label="Toggle sidebar"><i class="fa fa-bars"></i></button><div class="admin-search"><i class="fa fa-search"></i><input type="search" class="form-control admin-global-search" placeholder="Search..." aria-label="Search tables"></div><div class="admin-topbar-right"><a href="#" class="admin-notification" aria-label="Notifications"><i class="fa fa-bell"></i><span class="notification-badge"></span></a><div class="dropdown admin-user-menu"><a href="#" data-toggle="dropdown" aria-expanded="false"><img src="../images/avatar.svg" class="admin-avatar" alt="Admin avatar"><span class="admin-user-label">Admin</span><i class="fa fa-angle-down" style="margin-left:8px"></i></a><ul class="dropdown-menu"><li><a href="settings.php#profile"><i class="fa fa-user"></i> Profile</a></li><li><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li><li class="divider"></li><li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li></ul></div></div></header>');
//       var $heading = $('<div class="admin-page-heading"><h1>' + title + '</h1><div class="admin-breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; ' + title + '</div></div>');

//       $content.prepend($heading);
//       $content.wrap($main);
//       $('body').prepend($sidebar);
//       $('.admin-main').prepend($topbar);
//       $('body').append('<div class="admin-toast" role="status" aria-live="polite"></div>');
//     }

//     function showToast(message) {
//       $('.admin-toast').stop(true, true).text(message).fadeIn(150).delay(1800).fadeOut(250);
//     }

//     function filterTables() {
//       var query = $.trim($('.admin-global-search').val() || $('.table-filter-search').val() || '').toLowerCase();
//       var department = ($('.table-filter-select').val() || '').toLowerCase();
//       var status = ($('.table-filter-status').val() || '').toLowerCase();
//       var date = $('.table-filter-date').val() || '';
//       $('.searchable-table tbody tr').each(function () {
//         var $row = $(this);
//         var text = $row.text().toLowerCase();
//         var matches = (!query || text.indexOf(query) !== -1) &&
//           (!department || text.indexOf(department) !== -1) &&
//           (!status || text.indexOf(status) !== -1) &&
//           (!date || $row.attr('data-date') === date || text.indexOf(date) !== -1);
//         $row.toggle(matches);
//       });
//     }

//     $('.admin-toggle').on('click', function () {
//       $('.admin-sidebar').toggleClass('open');
//     });
//     $('.admin-sidebar a').on('click', function () {
//       if (window.innerWidth < 768) $('.admin-sidebar').removeClass('open');
//     });
//     $('.admin-global-search, .table-filter-search, .table-filter-select, .table-filter-status, .table-filter-date').on('input change', filterTables);
//     if (window.location.hash && $('.admin-settings-tabs a[href="' + window.location.hash + '"]').length) {
//       $('.admin-settings-tabs a[href="' + window.location.hash + '"]').tab('show');
//     }

//     $(document).on('click', '[data-delete]', function () {
//       if (window.confirm('Are you sure you want to delete this item?')) {
//         $(this).closest('tr, .admin-doctor-card').remove();
//         showToast('Item removed');
//       }
//     });
//     $(document).on('click', '[data-cancel]', function () {
//       if (window.confirm('Cancel this appointment?')) {
//         $(this).closest('tr').find('.label').removeClass('label-approved label-pending').addClass('label-cancelled').text('Cancelled');
//         showToast('Appointment cancelled');
//       }
//     });
//     $(document).on('click', '[data-approve]', function () {
//       $(this).closest('tr').find('.label').removeClass('label-pending label-cancelled').addClass('label-approved').text('Approved');
//       showToast('Appointment approved');
//     });
//     $(document).on('click', '[data-view]', function () {
//       window.alert($(this).attr('data-view'));
//     });
//     $(document).on('click', '[data-edit]', function () {
//       showToast('Edit form is ready');
//     });
//     $(document).on('click', '[data-download]', function () {
//       showToast('Report download is a UI-only action');
//     });
//     $('.save-form').on('submit', function (event) {
//       event.preventDefault();
//       $(this).closest('.modal').modal('hide');
//       showToast('Saved successfully');
//     });
//     $('#admin-login-form').on('submit', function (event) {
//       event.preventDefault();
//       window.location.href = 'index.php';
//     });
//     $('.admin-pagination a').on('click', function (event) {
//       event.preventDefault();
//       $('.admin-pagination li').removeClass('active');
//       $(this).parent().addClass('active');
//     });
//   });
// }(jQuery));
