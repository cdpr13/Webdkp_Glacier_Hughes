<?=$tabs?>
<div style="position: relative; margin-bottom: 1em;">
  <!-- Imagen grande superpuesta al contenedor -->
  <img 
    src="/themes/default/images/sobrine.png" 
    alt="Banner sobre tabla"
    style="
      position: fixed;
      top: 100px;      /* ajusta para que quede justo encima de la tabla */
      left: 50%;
      transform: translateX(-50%);
      width: 80%;      /* o el ancho que prefieras */
      max-width: 1200px;
      z-index: 999;    /* encima de todo */
      pointer-events: none;  /* para que no interfiera con clicks en la tabla */
    "
  >
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