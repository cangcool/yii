<?php
/**
 * main.php
 *
 * @author Martin Ludvik <matolud@gmail.com>
 * @copyright Copyright &copy; 2013 by Martin Ludvik
 * @license http://opensource.org/licenses/MIT MIT license
 */
?>

<?php $view = $dataProvider->getPagination()->getPageSize(); ?>

<table id="<?php echo $id; ?>" class="e-calendar-view <?php echo $view; ?>">
  <?php $this->render($view, array(
    'id' => $id,
    'dataProvider' => $dataProvider,
    'itemViewFile' => $itemViewFile,
    'previousUrl' => $previousUrl,
    'nextUrl' => $nextUrl,
  )); ?>
</table>
