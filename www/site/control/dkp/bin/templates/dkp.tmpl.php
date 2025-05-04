<?=$tabs?>
<div 
  id="banner-overlay" 
  style="
    position: fixed;
    top: 100px;
    left: 50%;
    transform: translateX(-50%);
    width: 400px;
    pointer-events: none;
    z-index: 999;
  "
>
  <img 
    src="/themes/default/images/sobrine.png" 
    alt="Banner sobre tabla"
    style="
      display: block;
      width: 100%;
      height: auto;
      opacity: 0.5;      /* 50% de transparencia */
    "
  >

  <div 
    style="
      position: absolute;
      bottom: 10px;
      left: 0;
      width: 100%;
      text-align: center;
      color: white;
      font-size: 1.2em;
      text-shadow: 0 0 4px rgba(0,0,0,0.7);
      background-color: rgba(0,0,0,0.4);  /* fondo semitransparente */
      padding: 5px 0;
      pointer-events: none;
    "
  >
    ¡El poderoso Sobrine!
  </div>
</div>
</div>
<div style="float:right"><?=$filter?></div>
<?=$tableselect?>
<br />
<?php if(sizeof($data) == 0) { ?>
This table is empty. Upload a log file or manually add DKP from the control center.
<?php } else { ?>
<table class="dkp" cellpadding=0 cellspacing=0 id="dkptable">
<thead>
<tr class="header">
	<th class="link" sorttype="player"><a>name</a></th>
	<th class="link center" style="width:200px" sorttype="guild"><a>guild</a></th>
	<th class="link center" style="width:100px" sorttype="class"><a>class</th>
	<th class="link center" style="width:100px" sorttype="dkp"><a>dkp</a></th>
	<?php if($settings->GetLifetimeEnabled()){ ?>
	<th class="link center" style="width:100px" sorttype="lifetime"><a>lifetime</a></th>
	<?php } ?>
	<?php if($settings->GetTiersEnabled()){ ?>
	<th class="link center" style="width:100px" sorttype="tier"><a>tier</a></th>
	<?php } ?>
</tr>
</thead>
<tbody>

</tbody>
</table>

<script type="text/javascript">
table = new PointsTable("dkptable");
table.SetShowData(<?=($settings->GetLifetimeEnabled()?"true":"false")?>, <?=($settings->GetTiersEnabled()?"true":"false")?>);
table.SetPageData(<?=$page?>, <?=$maxpage?>);
table.SetSortData("<?=$sort?>", "<?=$order?>");
<?php foreach($data as $entry) { ?>
table.Add(<?=(util::json($entry))?>);
<?php } ?>
table.Draw();
</script>

<br />
<?php } ?>