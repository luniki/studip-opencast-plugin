<? if (isset($this->flash['error'])): ?>
    <?= MessageBox::error($this->flash['error']) ?>
<? endif ?>
<? if (isset($message)): ?>
    <?= MessageBox::success($message) ?>
<? endif ?>

<script language="JavaScript">
    OC.initScheduler();
    OC.initUpload(<?= OC_UPLOAD_CHUNK_SIZE ?>);
</script>

<?

$aktionen = array();
$aktionen[] = array(
              "icon" => "icons/16/black/upload.png",
              "text" => '<a id="oc_upload_dialog"href="#">' . _("Medien hochladen") . '</a>');

$infobox_content = array(array(
    'kategorie' => _('Hinweise:'),
    'eintrag'   => array(array(
        'icon' => 'icons/16/black/info.png',
        'text' => _("Hier k�nnen Sie einzelne Aufzeichnungen f�r diese Veranstaltung planen.")
    )
), ),
    array("kategorie" => _("Aktionen:"),
          "eintrag"   => $aktionen
    ));

$infobox = array('picture' => 'infobox/administration.jpg', 'content' => $infobox_content);
?>


<div class="oc_schedule">
    
    <h2><?//=_('Veranstaltungsaufzeichnungen planen')?></h2>
    <?= $this->render_partial("course/_schedule", array('course_id' => $course_id, 'dates' => $dates)) ?>
    
  

</div>


<div id="upload_dialog" title="<?=_("Medienupload")?>">
<?= $this->render_partial("course/_upload", array('course_id' => $course_id, 'dates' => $dates)) ?>
</div>