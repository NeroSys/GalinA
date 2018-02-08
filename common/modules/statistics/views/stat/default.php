<?php
$transition = 1; //счетчик переходов на страницы
$count = 0; //счетчик посетителей
$count_day = 0;
$num_ip = '';

//получаем первую дату из массива объектов
if (isset($count_ip[0])){
    $date = date("d.m.Y",$count_ip[0]->date_ip);
} else $date = null;
?>
<!-- Products Content -->
<div class="table-responsive">
    <table class="table table-bordered table-vcenter">
        <thead>
        <th>Переходы на страницы сайта</th>
        <th>IP</th>
        <th>URL просматриваемой страницы</th>
        <th>Время посещения</th>
        </thead>
        <tbody>
        <tr>
        <?php foreach ($count_ip as $key=>$value){
            //кол-во посетителей по дням (вывод последнего дня после цикла)
            if($date && $date != date("d.m.Y",$value->date_ip)) {
                echo $date . ' - '. $count_day . '<br>';
                $date = date("d.m.Y",$value->date_ip);
                $count_day = 0;
            }
            if ($stat_ip) $count_day++; //для фильтра по определенному IP

            //Если сменился IP, то включаем счетчики
            if ($num_ip != $value->ip){
                $num_ip = $value->ip;
                $transition = 1;
                $count++;
                if (!$stat_ip) $count_day++; //для фильтра по определенному IP
            } else {
                $transition++;
            }

            echo "<tr ";
            if ($transition == 1) {
                echo "class='tr_first'><td colspan='4'>Новый посетитель.</td></tr>";
            } else {
                echo ">";
            }
            echo "<td>$transition</td>
        <td class=\"text-center\"><a href='http://speed-tester.info/ip_location.php?ip=".$value->ip."'>".$value->ip."</a></td>  
        <td class=\"text-center\"><a href='".$value->str_url."'>".$value->str_url."</a></td>                    
        <td class=\"text-center\">".date("d.m.Y H:i:s",$value->date_ip)."</td></tr>";

        }
        //вывод кол-ва посетителей за последнее число
        if($date) echo $date . ' - '. $count_day . '<br>';
        ?>

        </tr>

        <tr class="active">
            <td colspan="3" class="text-right text-uppercase"><strong>Всего посетителей за период :</strong></td>
            <td class="text-right"><strong><?=$count?></strong></td>
        </tr>
        </tbody>
    </table>
</div>
<!-- END Products Content -->
