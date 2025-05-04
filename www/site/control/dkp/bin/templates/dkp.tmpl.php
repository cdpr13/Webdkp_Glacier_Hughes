<?php if(!defined('DKP')) exit(); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $this->pagetitle ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --wow-gold: #e4c062;
        --wow-dark: #0d0c0a;
        --wow-metal: #3a3632;
        --wow-red: #9a0707;
        --wow-blue: #1a4f7a;
    }

    body {
        background: url('assets/img/wow-bg.jpg') no-repeat center center fixed;
        background-size: cover;
        color: var(--wow-gold);
        font-family: 'Arial Narrow', sans-serif;
        margin: 0;
        padding: 20px;
    }

    .dkp-table-container {
        background: rgba(13, 12, 10, 0.9);
        border: 2px solid var(--wow-gold);
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(228, 192, 98, 0.3);
        margin: 20px 0;
        backdrop-filter: blur(5px);
    }

    .wow-dkp-table {
        color: var(--wow-gold);
        margin-bottom: 0;
    }

    .table-header {
        background: linear-gradient(to right, var(--wow-metal), var(--wow-dark));
        border-bottom: 2px solid var(--wow-gold);
        font-size: 1.1em;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .player-row {
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(228, 192, 98, 0.1);
    }

    .player-row:hover {
        background: rgba(228, 192, 98, 0.05);
        transform: scale(1.005);
        cursor: pointer;
    }

    .class-icon {
        width: 24px;
        height: 24px;
        margin-right: 10px;
        vertical-align: middle;
    }

    .dkp-bar {
        height: 20px;
        background: var(--wow-dark);
        border: 1px solid var(--wow-gold);
        border-radius: 3px;
        overflow: hidden;
    }

    .dkp-progress {
        height: 100%;
        background: linear-gradient(to right, var(--wow-red), var(--wow-gold));
        transition: width 0.5s ease;
    }

    .tier-badge {
        background: var(--wow-blue);
        border: 1px solid var(--wow-gold);
        border-radius: 15px;
        padding: 2px 10px;
        font-size: 0.9em;
        display: inline-block;
    }

    .class-tag {
        padding: 3px 10px;
        border-radius: 15px;
        font-size: 0.9em;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
        min-width: 80px;
        text-align: center;
    }

    .warrior { background: #C79C6E; }
    .paladin { background: #F58CBA; }
    .hunter { background: #ABD473; }
    .rogue { background: #FFF569; color: #000; }
    .priest { background: #FFFFFF; color: #000; }
    .deathknight { background: #C41F3B; }
    .shaman { background: #0070DE; }
    .mage { background: #69CCF0; }
    .warlock { background: #9482C9; }
    .monk { background: #00FF96; }
    .druid { background: #FF7D0A; }
    .demonhunter { background: #A330C9; }
    .evoker { background: #33937F; }

    .empty-table {
        background: rgba(154, 7, 7, 0.8);
        border: 1px solid var(--wow-gold);
        border-radius: 5px;
        padding: 15px;
        text-align: center;
    }

    .table-footer {
        background: rgba(0,0,0,0.7);
        padding: 10px;
        border-top: 2px solid var(--wow-gold);
    }

    @media (max-width: 768px) {
        .class-icon { width: 20px; height: 20px; }
        .class-tag { min-width: 60px; font-size: 0.8em; }
        .table-header th { font-size: 0.9em; }
    }
    </style>
</head>
<body>
    <?= $tabs ?>
    <div class="filters-row mb-3"><?= $filter ?></div>

    <?php if(sizeof($data) == 0) { ?>
        <div class="empty-table wow-alert">
            <i class="fas fa-exclamation-triangle"></i> La tabla está vacía. Sube un archivo de log o añade DKP manualmente.
        </div>
    <?php } else { ?>
    <div class="dkp-table-container">
        <div class="table-responsive">
            <table class="table table-dark wow-dkp-table" id="dkptable">
                <thead class="table-header">
                    <tr>
                        <th sorttype="player" class="link">
                            <i class="fas fa-user"></i> Jugador
                        </th>
                        <th sorttype="class" class="link center">
                            <i class="fas fa-helmet-battle"></i> Clase
                        </th>
                        <th sorttype="dkp" class="link center">
                            <i class="fas fa-coins"></i> DKP
                        </th>
                        <?php if($settings->GetLifetimeEnabled()){ ?>
                        <th sorttype="lifetime" class="link center">
                            <i class="fas fa-history"></i> Vitalicio
                        </th>
                        <?php } ?>
                        <?php if($settings->GetTiersEnabled()){ ?>
                        <th sorttype="tier" class="link center">
                            <i class="fas fa-layer-group"></i> Tier
                        </th>
                        <th class="center">
                            <i class="fas fa-tasks"></i> Progreso
                        </th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $entry): ?>
                    <tr class="player-row">
                        <td>
                            <div class="player-info">
                                <img src="assets/img/classes/<?= strtolower($entry->playerclass) ?>.png" 
                                     class="class-icon" 
                                     alt="<?= $entry->playerclass ?>">
                                <span class="player-name"><?= $entry->player ?></span>
                            </div>
                        </td>
                        
                        <td class="center">
                            <span class="class-tag <?= strtolower($entry->playerclass) ?>">
                                <?= $entry->playerclass ?>
                            </span>
                        </td>
                        
                        <td class="center text-warning">
                            <span class="dkp-value"><?= $entry->dkp ?></span>
                        </td>
                        
                        <?php if($settings->GetLifetimeEnabled()){ ?>
                        <td class="center">
                            <?= $entry->lifetime ?>
                        </td>
                        <?php } ?>
                        
                        <?php if($settings->GetTiersEnabled()){ ?>
                        <td class="center">
                            <span class="tier-badge">Tier <?= $entry->tier ?></span>
                        </td>
                        <td>
                            <div class="dkp-progress-container">
                                <div class="dkp-bar">
                                    <?php 
                                        $currentProgress = $entry->dkp % $tierSize;
                                        $progressWidth = ($currentProgress / $tierSize) * 100;
                                    ?>
                                    <div class="dkp-progress" style="width: <?= $progressWidth ?>%"></div>
                                </div>
                                <small class="progress-text">
                                    <?= $currentProgress ?>/<?= $tierSize ?> para próximo tier
                                </small>
                            </div>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="table-footer">
            <div class="row">
                <div class="col-md-6">
                    <?= $tableselect ?>
                </div>
                <div class="col-md-6 text-right">
                    <small class="update-time">
                        <i class="fas fa-sync"></i> Actualizado: <?= date('d/m/Y H:i') ?>
                    </small>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const table = new PointsTable("dkptable");
        table.SetShowData(<?= $settings->GetLifetimeEnabled() ? "true" : "false" ?>, 
                        <?= $settings->GetTiersEnabled() ? "true" : "false" ?>);
        table.SetPageData(<?= $page ?>, <?= $maxpage ?>);
        table.SetSortData("<?= $sort ?>", "<?= $order ?>");
        
        <?php foreach($data as $entry) { ?>
        table.Add(<?= json_encode($entry) ?>);
        <?php } ?>
        
        table.Draw();
        
        $('.link').hover(
            function() { $(this).css('color', '#e4c062'); },
            function() { $(this).css('color', ''); }
        );
    });
    </script>
    <?php } ?>
</body>
</html>