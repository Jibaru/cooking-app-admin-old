    <!-- Data Tables -->
    <script type="text/javascript" src="./assets/lib/datatables/datatables.min.js"></script>
    
    <?php
        /*
            Obtiene el js de la pagina actual
        */
        if (empty($group)) {
            echo "<script type=\"text/javascript\" src=\"./js/" . $page . ".js\"></script>";
        } else {
            echo "<script type=\"text/javascript\" src=\"./js/" . $group . "/" . $page . ".js\"></script>";
        }
    ?>
</body>
</html>