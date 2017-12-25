<?php $this->layout('layout-user-management',['title'=>'Ajouter un adhérent']); ?>
<?php $this->start('sidenav_content') ?>

<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
    <ul id="menuvertical">
        <li><a class="mdl-navigation__link" href="<?= $this->url('admin_dashboard'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">home</i>Accueil</a></li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_admins'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">supervisor_account</i>Admins</a>
            <ul>
                <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_add_user_admin_form'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Admin</a></li>
            </ul>
        </li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_users'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Utilisateurs</a></li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('member_members'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">face</i>Adhérents</a>
            <ul>
                <li><a class="mdl-navigation__link" href="<?= $this->url('member_addMember'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Adhérent</a></li>
            </ul>
        </li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_inscription'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">person_add</i>Inscription</a></li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('events_events_admin'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">event</i>Evénements</a>
            <ul>
                <li><a class="mdl-navigation__link" href="<?= $this->url('events_add_event'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Evénement</a></li>
            </ul>
        </li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('photo_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">photo_camera</i>Photos</a>
            <ul>
                <li><a class="mdl-navigation__link" href="<?= $this->url('photo_add_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Photos</a></li>
            </ul>
        </li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('document_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">insert_drive_file</i>Documents</a>
            <ul>
                <li><a class="mdl-navigation__link" href="<?= $this->url('document_add_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Document</a></li>
            </ul>
        </li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('admin_deconnexion'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">exit_to_app</i>Deconnexion</a></li>
    </ul>
</nav>
<?php $this->stop('sidenav_content') ?>
<?php $this->start('main_content') ?>
<html>
    <head><title>Ma page ajouter Adhérent</title></head>
    <body>
        <div class="container-fluid">
        <h3 id="titredoc" class="text-center">Ajouter un Adhérent</h3>
            <div>
                <div class="col-md-3"></div>
            <form name= "addMember" method="post" action="<?= $this->url('member_addMember')?>"  class="col-md-6 jumbotron">
                <div class="form-group text-center">
                    <div class="form-group text-center">
                        <label for="user" class="mr-sm-2">Id User :</label>
                        <input type="text" id="id_user" name="id_user" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                    </div>
                    <div class="form-group text-center">
                        <label for="section" class="mr-sm-2">Section :</label>
                        <?= '<select class="form-control" id="id_section" name="id_section">';
                        foreach ($listsections as $id => $listsections) {
                            ?>
                            <option id="id_section" <?= $listsections['id'] == $listsections['id'] ? 'selected' : ''; ?>> <?= $listsections['id'].' : '.$listsections['rank']?></option>
                            <?php
                        }
                        ?>
                    </select>
                        <!--<input type="text" id="id_section" name="id_section" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/> -->
                    </div>
                    <div class="form-group text-center">
                    <label for="nom" class="mr-sm-2">Nom</label>
                    <input type="text" id="name" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                    </div>
                    <div class="form-group text-center">
                        <label for="firstname" class="mr-sm-2">Prénom</label>
                        <input type="text" id="firstname" name="firstname" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                    </div>
                    <div class="form-group text-center">
                        <label for="totem" class="mr-sm-2">Totem</label>
                        <input type="text" id="totem" name="totem" class="form-control mb-2 mr-sm-2 mb-sm-0" value=""/>
                    </div>
                    <div class="form-group text-center">
                        <label for="info" class="mr-sm-2">Informations supplémentaires</label>
                        <textarea rows="4" cols="50" type="text" id="infosup" name="infosup" class="form-control mb-2 mr-sm-2 mb-sm-0" value="" placeholder= "ex: tel,mail etc ..."></textarea>
                    <div>
                    <div class="form-group text-center">
                        <label for="register" class="mr-sm-2">Register</label>
                        <input type="checkbox" name="register" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                    </div>
                     <div class="form-group text-center">
                    <input type="submit" value="Ajouter un adhérent"/>
                    </div>
                </div>
                </form>
        </div>
    </body>
</html>

<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
    Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>
