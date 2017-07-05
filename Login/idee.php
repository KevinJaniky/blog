<?php
require_once "autoload.php";

if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $display = new Display();
    $display->head('Boite a idée');
    $display->navTop();
    $display->sideBar();
    $data = new Idee();
    $tab = $data->select();
    $_CATEGORIE = ['Musique', 'Web', 'Lifestyle', 'Culture', 'Humeur'];
    ?>
    <body class="blue-grey lighten-5">
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="sweetAlert/sweetalert.min.js"></script>
    <div class="container">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Idee</th>
                <th>date</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            <?php
            $count = count($tab);
            for ($i = 0; $i < $count; $i++) {
                echo '<tr>';
                echo '<td>' . $tab[$i]['id'] . '</td>';
                echo '<td>' . $tab[$i]['nom'] . '</td>';
                echo '<td>' . $tab[$i]['prenom'] . '</td>';
                echo '<td>' . $tab[$i]['mail'] . '</td>';
                echo '<td>' . $tab[$i]['idee'] . '</td>';
                echo '<td>' . date('d/m/Y',strtotime($tab[$i]['date'])) . '</td>';
                echo '<td><a href="#" data-id="' . $tab[$i]['id'] . '" class="delete"><i class="material-icons red-text text-darken-2">delete</i></a></td>';
                echo '</tr>';

            }
            ?>
            <tr>
                <td></td>
            </tr>
            </tbody>
        </table>

    </div>
    </body>
    <script>
        $(".button-collapse").sideNav();

        $('.delete').click(function () {
            var id = $(this).data('id');
            var element = ($(this).parent().parent());
            swal({
                    title: "Etes vous sur ?",
                    text: "La suppression sera definitive",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dd5044",
                    confirmButtonText: "Oui, je confirme",
                    cancelButtonText: "Non, surtout pas ",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {

                        $.post("delete_idee.php",
                            {id: id},
                            function (data) {
                                element.remove();
                            });


                        swal("Supprimé!", "Suppression reussie", "success");
                    } else {
                        swal("Annuler", "Aucune suppression n'a été éffectué", "error");
                    }
                });
        })
    </script>

    <?php

} else {
    header('location:Home');
    die();
}
