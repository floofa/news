<h2>Novinky</h2>

<?foreach ($items as $item):?>
  <div class="news">
    <h2><a href="<?=$item->get_url()?>"><?=$item->name?></a></h2>
    <p class="perex"><?=$item->anotation?></p>
  </div>
<?endforeach;?>
