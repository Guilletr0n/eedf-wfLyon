<?php $this->layout('layout-user-management', ['title'=>'Modification de l\'Adhérent']); ?>
<?php $this->start('sidenav_content') ?>

<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
    <ul id="menuvertical">
        <li><a class="mdl-navigation__link" href="<?= $this->url('admin_dashboard'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">home</i>Accueil</a></li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_admins'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Admins</a>
            <ul>
                <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_add_user_admin_form'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Admin</a></li>
            </ul>
        </li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_users'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Utilisateurs</a></li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('member_members'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Adhérents</a>
            <ul>
                <li><a class="mdl-navigation__link" href="<?= $this->url('member_addMember'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Adhérent</a></li>
            </ul>
        </li>
        <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_inscription'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">person</i>Inscription</a></li>
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
<div class="container-fluid">
	<h3 class="text-center">Modifier l'Adhérent</h3>
	<div class="col-md-3"></div>
    <h1>TEST : <?php echo $listsections[1]['rank'] ?></h1>
    <h1>TEST : <?php echo $listsections[1]['id'] ?></h1>
	<form name= "editMember" class="col-md-6 jumbotron" action="<?= $this->url('member_editMember', ['id' => $members['id']]) ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group text-center">
            <label for="section" class="mr-sm-2">Id User :</label>
            <input type="text" id="id_user" name="id_user" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['id_user'] ?>"/>
        </div>
        <div class="form-group text-center">
            <label> Id section : <?= $members['id_section'];?></label>
                <?= '<select class="form-control" id="id_section" name="id_section">';
                foreach ($listsections as $id => $listsections) {
                    ?>
                 <option id="id_section" <?= $members['id_section'] == $listsections['id'] ? 'selected' : ''; ?>> <?= $listsections['id'].' : '.$listsections['rank']?></option>
                <?php
                }
                ?>
                </select>
        </div>
        <!--
        <div class="form-group text-center">'.$listsections['rank'].'
            <label for="section" class="mr-sm-2">Id Section :</label>
			<input type="text" id="id_section" name="id_section" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['id_section'] ?>"/>
        </div>
        -->
        <div class="form-group text-center">
            <label for="nom" class="mr-sm-2">Nom</label>
			<input type="text" id="name" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['name'] ?>"/>
        </div>
        <div class="form-group text-center">
            <label for="prenom" class="mr-sm-2">Prénom</label>
			<input type="text" id="firstname" name="firstname" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['firstname'] ?>"/>
        </div>
            <div class="form-group text-center">
            <label for="totem" class="mr-sm-2">Totem</label>
			<input type="text" id="totem" name="totem" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['totem'] ?>"/>
        </div>
            <div class="form-group text-center">
            <label for="info" class="mr-sm-2">Info</label>
			<input type="text" id="infosup" name="infosup" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo $members['infosup'] ?>"/>
        <div>
            <div class="form-group text-center">
                <label for="register" class="mr-sm-2">Register</label>
                <input id="register" name="register" type="checkbox" <?= ($members['register']==1) ? 'checked' : ''; ?>>
            </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Appliquer la modification</button>
            </div>
        </div>
	</form>
</div>

<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
    Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>