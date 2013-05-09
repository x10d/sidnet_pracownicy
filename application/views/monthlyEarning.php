<table>
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Stawka/h</th>
        <th>Zarobił w tym miesiącu</th>
    </tr>
    <tr>
        <td><?php echo $worker['imie'] ?></td>
        <td><?php echo $worker['nazwisko'] ?></td>
        <td><?php echo $worker['rate_per_hour'] ?></td>
        <td><?php echo $worker['monthlyEarningValue'] ?></td>
    </tr>
</table>