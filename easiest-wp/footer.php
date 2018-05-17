<footer>
    <?PHP if(is_active_sidebar('footer')): ?>
    <ul>
        <?PHP dynamic_sidebar('footer'); ?>
    </ul>
    <?PHP endif; ?>

</footer>

<!--wp_footer()をbodyタグの直前に追記-->
<?php //wp_footer()?>
</body>

</html>
