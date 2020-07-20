<?php

namespace Inews;

defined('INEWS') or die('Acces interdit');
/*
 *  Messoud fatimetou
 */
?>
<h2> Mes news</h2>
<div class="col-md-16">
    
<table class="table table-bordered table-condensed table-striped table-hover">
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Titre</th>
            <th>Duree</th>
            <th>En_diffusion</th>
            <th>Commandes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->news as $new) {
            ?>
            <tr>
                <td><?php echo $new['image_root']; ?></td>
                <td><?php echo $new['id_news']; ?></td>
                <td><?php echo $new['titre']; ?></td>
                <td><?php echo $new['duree']; ?></td>
                <td><?php echo $new['en_diffusion']; ?></td>
                <td>  
                    <button name="id" value="<?php echo $new['id']; ?>" form="edit-form" class="btn btn-default btn-xs" title="editer"><span class="glyphicon glyphicon-edit" aria-hiden="true"></span></button>
                    <button name="id" value="<?php echo $new['id']; ?>" form="delete-form" class="btn btn-default btn-xs" title="supprimer"><span class="glyphicon glyphicon-trash"></span></button>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
<form id="delete-form" action="/web/sistr/index.php?controller=news&action=supprimer" method="POST"></form>
<form id="edit-form" action="/web/sistr/index.php?controller=news&action=editer" method="POST"></form>