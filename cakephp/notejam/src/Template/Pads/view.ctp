<?php $this->assign('title', $pad->name . " ({$notes->count()})"); ?>
<?php if ($notes->count()): ?>
    <table class="notes">
        <tr>
          <th class="note">Note <?= $this->Html->link('↑', ['_name' => 'view_pad', 'order' => '-name', 'id' => $pad->id], ['class' => 'sort_arrow']) ?><?= $this->Html->link('↓', ['_name' => 'view_pad', 'order' => 'name', 'id' => $pad->id], ['class' => 'sort_arrow']) ?></th>
          <th class="date">Last modified <?= $this->Html->link('↑', ['_name' => 'view_pad', 'order' => '-updated_at', 'id' => $pad->id], ['class' => 'sort_arrow']) ?><?= $this->Html->link('↓', ['_name' => 'view_pad', 'order' => 'updated_at', 'id' => $pad->id], ['class' => 'sort_arrow']) ?></th>
        </tr>
        <?php foreach($notes as $note): ?>
            <tr>
              <td><?= $this->Html->link($note->name, ['id' => $note->id, '_name' => 'view_note']) ?></td>
              <td class="hidden-text date"><?= $note->getPrettyDate(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p class="empty">Create your first note in the pad.</p>
<?php endif; ?>
<?= $this->Html->link("New note", ["_name" => "create_note", "pad" => $pad->id], ["class" => "button"]); ?>
