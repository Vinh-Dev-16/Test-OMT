<div class="container main-admin mt-2">
    <footer class="main-footer bottom-0 mb-2">
        <strong>Copyright &copy; 2023 <a href="<?php url('Admin/dashboard/index'); ?>">NEWS</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Xuân Vinh</b>
        </div>
    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" ></script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {

        $('.sidebar-dropdown-menu').slideUp('fast');
        $('.has-dropdown > a ').click(function(e) {
            e.preventDefault();

            $(this).next().slideToggle('fast');
            $(this).parent().toggleClass('focused');
        })
        $('.sidebar-toggle').click(function() {
            $('.sidebar').toggleClass('collapsed')
            $('.main-admin').toggleClass('active');

            $('.sidebar.collapsed').mouseleave(function() {
                // $('.main-admin').toggleClass('active');
                $('.sidebar-dropdown-menu').slideUp('fast')
                $('.sidebar-menu-item.has-dropdown, .sidebar-dropdown-menu-item.has-dropdown').removeClass('focused')
            })
        })

        $('.sidebar-overlay').click(function() {
            $('.sidebar').addClass('collapsed');
            $('.main-admin').addClass('active');
            $('.sidebar-dropdown-menu').slideUp('fast')
            $('.sidebar-menu-item.has-dropdown, .sidebar-dropdown-menu-item.has-dropdown').removeClass('focused')
        })

        if(window.innerWidth < 768) {
            $('.sidebar').addClass('collapsed');
            $('.main-admin').addClass('active');
        }
    })

    let table = new DataTable('#myTable', {
        responsive: true
    });
</script>

<?php
    require_once PUBLIC_SRC . 'JS/main.js';
?>
</body>
