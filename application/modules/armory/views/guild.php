<section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
    <div class="uk-background-cover uk-height-small header-section"></div>
</section>
<?php foreach ($realms as $charsMultiRealm):
							$MultiRealm = $this->wowrealm->getRealmConnectionData($charsMultiRealm->id);
						?>
<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
	<div class="uk-container">
		<div class="uk-grid uk-grid-medium uk-margin-small" data-uk-grid>
			<div class="uk-width-3-3@s">
				<article class="uk-article">
				<div class="uk-card uk-card-default uk-card-body uk-margin-small">
				<?php foreach($this->armory_model->getGuildInfo($MultiRealm, $guildid)->result() as $guild): ?>
				<h2 style="display:inline;"> <?= $guild->name ?> |</h2><b style="display:inline;">   Mensaje:  </b><i style="display:inline;">"<?= $guild->motd ?>"</i>
				<hr>
				<?php endforeach; ?>
				<h2 class="uk-text-center"> Miembros</h2>
				<div class="uk-overflow-auto uk-margin-small">
							<table class="uk-table dark-table uk-table-divider uk-table-small">
								<thead>
									<tr>
										<th class="uk-table-expand uk-text-center">Nombre</th>
										<th class="uk-table-expand uk-text-center">Nivel</th>
										<th class="uk-table-expand uk-text-center">Raza</th>
										<th class="uk-table-expand uk-text-center">Clase</th>
									</tr>
								<tbody>	
								<?php foreach($this->armory_model->getGuildMembers($MultiRealm, $guildid)->result() as $player): ?>
									<tr>
										<td class="uk-text-center"><h3><a href="<?= base_url().'armory/player/'?><?= $player->guid ?>"><?= $player->name ?></a></h3></td>
								<td class="uk-text-center"><h3><?= $player->level ?></h3></td>
								<td class="uk-text-center"><img align="center" src="<?= base_url('assets/images/races/'.$this->wowgeneral->getRaceIcon($player->race)); ?>" width="40" height="40" title="<?= $this->wowgeneral->getRaceName($player->race); ?>" alt="<?= $this->wowgeneral->getRaceName($player->race); ?>"></td>
								<td class="uk-text-center"><img align="center" src="<?= base_url('assets/images/class/'.$this->wowgeneral->getClassIcon($player->class)); ?>" width="40" height="40" title="<?= $this->wowgeneral->getClassName($player->class); ?>" alt="<?= $this->wowgeneral->getClassName($player->class); ?>"></td>
									</tr>
								<?php endforeach; ?>
								</tbody>
								</thead>
							</table>
							<a href="https://zuldazar-realms.tk"></a>
							<a href="https://www.asmodeosnetworkco.tk.tk"></a>
							</div>
				</div>
				</article>
			</div>
		</div>
	</div>
</section>
<?php endforeach; ?>