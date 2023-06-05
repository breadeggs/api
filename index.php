<?php

    $qq = $_GET["qq"];

    if(empty($qq)) {

    echo 'qq不能为空！';

    exit;

    }

    $qqurl= 'mqq://card/show_pslcard?src_type=internal&source=sharecard&version=1&uin='.$qq ;

    header("Location:$qqurl"); 

    ?>

    <script type="text/javascript">setTimeout("window.opener=null;window.close()",600);</script>
