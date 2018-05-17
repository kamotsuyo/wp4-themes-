<footer>
    <?PHP if(is_active_sidebar('footer')): ?>
    <ul>
        <?PHP dynamic_sidebar('footer'); ?>
    </ul>
    <?PHP endif; ?>
    <p>
        Copyright ELD2.3.1
    </p>
</footer>

<!--wp_footer()をbodyタグの直前に追記-->
<?php //wp_footer()?>
</body>

</html>
