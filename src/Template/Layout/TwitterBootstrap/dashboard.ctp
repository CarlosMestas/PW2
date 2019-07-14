<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;
$this->Html->css('style.css');

$this->Html->css('BootstrapUI.dashboard', ['block' =>true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->getParam('controller'), $this->request->getParam('action')]) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>
    <?= $this->element('menu') ?>
<?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash)) {
        echo $this->Flash->render();
    }
    $this->end();
}
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</div></div></div>');
echo $this->fetch('content');
