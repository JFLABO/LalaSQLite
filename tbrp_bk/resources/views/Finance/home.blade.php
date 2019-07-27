@extends('layouts.my')

@section('content')
今日の経済指標<BR>

<?php
    //$a= system ('ls');
    //echo $a;
    //$a= system ('PYTHONIOENCODING=utf-8 /usr/bin/python3 /home/jflabo/calender.py');
    //echo $a;
    /*
    exec("/usr/bin/python3 /home/jflabo/calender.py", $output);
    echo var_dump($output);
    echo "<BR>";
    $last_line = system('/usr/bin/python3 ./calender.py', $retval);
    // 追加情報を表示します。
    echo '
    </pre>
    <hr />Last line of the output: ' . $last_line . '
    <hr />Return value: ' . $retval;
    */
     /*
     $html = file_get_contents ('https://www.fxtrade.co.jp/market/calendar?_ga=2.212600023.252555815.1536096558-1419335306.1535814931');
     //var_dump($html);
     //$dom = @DomDocument::loadHTML ( $html );
     $xpath = new DOMXpath($html);
     //$xml = simplexml_import_dom ( $dom );
     //var_dump($xml);
     //$dataList = $xml->xpath('//div[@class="data-table"]text()');
     $a=$xpath->query('/html/body/div[1]/div[2]/div[2]/div/div[1]/div[2]/div[2]/div[2]')->item(0);
     var_dump($a);
     //$ret = $html->find( '.data-table' );
     var_dump($dom);
     */
    ?>
    <BR>
テクニカル分析<BR>

チャート<BR>

@endsection
