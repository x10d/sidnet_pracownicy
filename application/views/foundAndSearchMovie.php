<?php echo Form::open('', array('id' => 'searchMovie')) ?>
<dl>
    <dt>Wyszukaj w nazwie/opisie filmu:</dt>
    <dd>
        <?php echo Form::input('searchString', '', array(
            'id' => 'searchString',
            'autofocus' => 'autofocus',
            'autocomplete' => 'off'
        )); ?>
    </dd>
</dl>
<?php echo Form::close() ?>
<p>Wyniki dla frazy: <em><?php echo $searchString ?></em></p>
<table>
    <tr>
        <th>ID</th>
        <th>Tytuł</th>
        <th>Opis</th>
    </tr>
<?php foreach ($movies as $key => $value): ?>
    <?php array_walk($value, function(&$n) {
        $n = HTML::chars($n);
    }) ?>
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['title'] ?></td>
        <td><?php echo $value['text'] ?></td>
    </tr>
<?php endforeach; ?>
</table>
