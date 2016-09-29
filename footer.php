<?php
/**
 * Created by Sudipta Deb
 * Date: 23/9/15
 * Time: 9:04 AM
 */
?>

<div class="bg-info" style="width: 100%;margin: 0px;padding: 0px">
    <div class="container text-center " style="padding: 5px;font-size: 14px">
        Website <i class="glyphicon glyphicon-heart"></i> created and hosted <i
            class="glyphicon    glyphicon-cloud-upload"></i> by
        <a style="color: white !important;" href="http://debmego.in" alt="Debmego Technologies">Debmego
            Technologies</a>
    </div>
</div>

<!--===================== Script Files =======================-->
<script src="<?php echo $baselocation ?>js/jquery.min.js"></script>
<script src="<?php echo $baselocation ?>js/bootstrap.min.js"></script>
<script src="<?php echo $baselocation ?>js/angular.min.js"></script>
<script src="<?php echo $baselocation ?>js/angular-route.js"></script>
<script src="<?php echo $baselocation ?>js/angular-animate.min.js"></script>
<script src="<?php echo $baselocation ?>js/angular-resource.js"></script>
<script src="<?php echo $baselocation ?>js/angular-sanitize.min.js"></script>

<script src="<?php echo $baselocation ?>js/plugins.js"></script>
<script src="<?php echo $baselocation ?>js/main.js"></script>
<!--==============================================================-->

<!--===================== Google Analytics =======================-->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>
<!--==============================================================-->

</body>
</html>