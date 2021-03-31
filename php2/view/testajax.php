<script type="text/javascript" src="js/jquery-3.3.1.min.js"> </script>
<script>
$(document).ready(function() {
    $(#selector).load(function() {
        var getproduct = "showProduct";
        $.get("abc.php", {
            a: getproduct
        }, function(data) {
            if (data == 0) {
                echo "phan";
            } else {
                echo "phan đep trai";
            }
        })
    });
});
</script>
<p id="selector"></p>