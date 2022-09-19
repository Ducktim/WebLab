<table class ="table">
    <caption>Output</caption>
    <colgroup>
    <col width="5%"> //x
    <col width="5%"> //y
    <col width="5%"> //r
    <col width="15%">   //result
    <col width="15%">   //current time
    <col width="15%">   //running time
    </colgroup>
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



   </table>
<div class="table">
    <?php foreach ($_SESSION['history'] as $value) { ?>
        <div class="table-content">
            <div class="table-row">
                <div class="table-data"><?php echo $value[0] ?></div>
                <div class="table-data"><?php echo $value[1] ?></div>
                <div class="table-data"><?php echo $value[2] ?></div>
                <div class="table-data"><?php echo $value[3] ?></div>
                <div class="table-data"><?php echo $value[4] ?></div>
                <div class="table-data"><?php echo number_format($value[5], 10, ".", "")*1000000 ?></div>
            </div>
        </div>
    <?php }?>
</div>
