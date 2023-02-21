<table class="table">
    <thread>
        <tr>
            <th>x</th>
            <th>y</th>
            <th>r</th>
            <th>result</th>
            <th>current time</th>
            <th>running time</th>
        </tr>
    </thread>
    <tbody>
    <?php foreach ($_SESSION['history'] as $value) { ?>
        <tr>
            <td class="table-data"><?php echo $value[0] ?></td>
            <td class="table-data"><?php echo $value[1] ?></td>
            <td class="table-data"><?php echo $value[2] ?></td>
            <td class="table-data"><?php echo $value[3] ?></td>
            <td class="table-data"><?php echo $value[4] ?></td>
            <td class="table-data"><?php echo number_format($value[5], 10, ".", "") * 1000000 ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
