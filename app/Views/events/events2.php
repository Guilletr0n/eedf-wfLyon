<?php $this->layout('layout-user-management', ['title' => 'Evénements']) ?>

<?php $this->start('style') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
<?php $this->stop('style') ?>

<?php $this->start('main_content') ?>

    	<h2 class="text-center">Calendrier des événements</h2>
      <div class="container text-center">
          <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=eg295kbq80r81gn67nn6srj4eg%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=Europe%2FParis" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>

      <h2 class="text-center">Prochains Evénements</h2>
      <div class="container text-center">
          <input id="afficheElements" type="button" value="Afficher plus d'éléments" class="btn-info btn-md">
      </div>

      <div class="container">
<?php foreach ($events as $key => $events) { ?>

                <?php if($events['id'] < 4){ ?>

                        <div class="container col-md-4">
                            <p>
                              <strong>Sortie : "</strong>  <?php echo $events['title']; ?><strong> "</strong><br />
                              Durée de l'événement: du <?php echo $events['startdate']; ?> au <?php echo $events['enddate']; ?>.<br />
                              Description :  <?php echo $events['description']; ?>.<br />
                              Les participants déjà inscrits sont : <?php echo $events['id_member']; ?>
                            </p>
                        </div>
                <?php }else{ ?>

                  <div class="container col-md-4 event hidden">
                      <p>
                        <strong>Sortie : "</strong>  <?php echo $events['title']; ?><strong> "</strong><br />
                        Durée de l'événement: du <?php echo $events['startdate']; ?> au <?php echo $events['enddate']; ?>.<br />
                        Description :  <?php echo $events['description']; ?>.<br />
                        Les participants déjà inscrits sont : <?php echo $events['id_member']; ?>
                      </p>
                  </div>

               <?php }
      } ?>  <!--fin de la boucle, le tableau contient toute la BDD -->
      </div>




<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
<script src="<?= $this->assetUrl('js/home.js') ?>" type="text/javascript"></script>
<script>
    $('#afficheElements').on('click',function(){
    		  $('.event').removeClass('hidden');
    });
</script>
<?php $this->stop('script') ?>
