<?php

namespace Inews;

defined('INEWS') or die('Acces interdit');
/*
 *  Messoud fatimetou
 */
?>
<h2>Utilisateurs</h2>
<div class="col-md-16">
    
<table class="table table-bordered table-condensed table-striped table-hover">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Login</th>
            <th>Connexion</th>
            <th>Commandes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->user as $user) {
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['nom']; ?></td>
                <td><?php echo $user['prenom']; ?></td>
                <td><?php echo $user['login']; ?></td>
                <td><?php echo $user['connexion']; ?></td>
                <td>  
                    <button name="id" value="<?php echo $user['id']; ?>" form="edit-form" class="btn btn-default btn-xs" title="editer"><span class="glyphicon glyphicon-edit" aria-hiden="true"></span></button>
                    <button name="id" value="<?php echo $user['id']; ?>" form="delete-form" class="btn btn-default btn-xs" title="supprimer"><span class="glyphicon glyphicon-trash"></span></button>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
<form id="delete-form" action="/web/3inews/index.php?controller=user&action=supprimer" method="POST"></form>
<form id="edit-form" action="/web/3inews/index.php?controller=user&action=editer" method="POST"></form>