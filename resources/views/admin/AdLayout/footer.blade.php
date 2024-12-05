<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery-2.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/materialize.min.js') }}"></script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script src="js/chart.js"></script>
<script>
    // Hide Sections
    $(".section").hide();

    setTimeout(function() {
        $(document).ready(function() {
            // Show Sections
            $(".section").fadeIn();

            // Hide Preloader
            $(".loader").fadeOut();

            // INIT SIDENAV
            $(".button-collapse").sideNav();

            //INIT MODAL
            $(".modal").modal();

            //INIT SELECT
            $("select").material_select();

            // Counter
            $(".count").each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

            // Comments - Approve & Deny
            $(".approve").click(function(e) {
                Materialize.toast("Comment Approved", 3000);
                e.preventDefault();
            });

            $(".deny").click(function(e) {
                Materialize.toast("Comment Denied", 3000);
                e.preventDefault();
            });

            // Quick Todos
            $("#todo-form").submit(function(e) {
                const output = `<li class="collection-item">
                    <div>${$("#todo").val()}
                        <a href="#!" class="secondary-content delete">
                        <i class="material-icons">close</i>
                        </a>
                    </div>
                    </li>`;
                $(".todos").append(output);

                Materialize.toast("Todo Added", 3000);
                e.preventDefault();
            });

            // Delete Todos
            $(".todos").on("click", ".delete", function(e) {
                $(this).parent().parent().remove();
                Materialize.toast("Todo Removed", 3000);
                e.preventDefault();
            });

            CKEDITOR.replace('body');

        }, 1000);
    });
</script>
</body>

</html>
