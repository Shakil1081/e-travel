
<?php

$root = "http://localhost/e-travel";

?>

<script src="<?php echo $root ?>/assets/js/bootstrap.min.js"></script>

<!-- chart js -->
<script src="<?php echo $root ?>/assets/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="<?php echo $root ?>/assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo $root ?>/assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="<?php echo $root ?>/assets/js/icheck/icheck.min.js"></script>

<script src="<?php echo $root ?>/assets/js/custom.js"></script>
<!-- form validation -->
<script src="<?php echo $root ?>/assets/js/validator/validator.js"></script>


<script type="text/javascript" src="<?php echo $root ?>/assets/js/tableExport.js"></script>
    <script type="text/javascript" src="<?php echo $root ?>/assets/js/jquery.base64.js"></script>
<script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
        .on('keyup blur', 'input', function () {
            validator.checkField.apply($(this).siblings().last()[0]);
        });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function (e) {
        e.preventDefault();
        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();
        return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function () {
        $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function () {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>





<script>


    $(document).ready(function() {
        $("#hotel_name").change(function () {
            var id = $(this).val();

            var dataString = 'get_location=' + id;
            $.ajax
            ({
                type: "POST",
                url: "get_location.php",
                data: dataString,
                cache: false,
                success: function (html) {
                    $("#hotel_location").html(html);
                }
            });
        });
    });
</script>

</body>

</html>