<?php if (!defined('THINK_PATH')) exit();?><html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
</head>

<body>
<table border=1 cellpadding=0 cellspacing=0 >
    <tr>
        <td style='width:60pt;font-size:16px;font-family: "宋体";' align="center">联系人</td>
        <td style='width:100pt;font-size:16px;font-family: "宋体";' align="center">电话1</td>
        <td style='width:50pt;font-size:16px;font-family: "宋体";' align="center">电话2</td>
        <td style='width:50pt;font-size:16px;font-family: "宋体";' align="center">电话3</td>
        <td style='width:200pt;font-size:16px;font-family: "宋体";' align="center">地址</td>
        <td style='width:100pt;font-size:16px;font-family: "宋体";' align="center">订购产品</td>
        <td style='width:80pt;font-size:16px;font-family: "宋体";' align="center">金额</td>
        <td style='width:80pt;font-size:16px;font-family: "宋体";' align="center">来源</td>
        <td style='width:200pt;font-size:16px;font-family: "宋体";' align="center">备注</td>
        <td style='width:60pt;font-size:16px;font-family: "宋体";' align="center">跟进内容</td>

    </tr>

    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
			<td style='font-size:12px;font-family: "Simsun";'><?php echo ($list["order_name"]); ?></td>
			<td style='font-size:12px;font-family: "Simsun";'><?php echo ($list["order_phone"]); ?></td>
			<td style='font-size:12px;font-family: "Simsun";'></td>
			<td style='font-size:12px;font-family: "Simsun";'></td>
        	<td style='font-size:12px;font-family: "Simsun";'><?php echo ($list["order_area"]); ?></td>
        	<td style='font-size:12px;font-family: "Simsun";'><?php echo ($list["order_pro"]); ?></td>
        	<td style='font-size:12px;font-family: "Simsun";'><?php echo ($list["order_money"]); ?></td>
        	<td style='font-size:12px;font-family: "Simsun";'><?php echo ($list["order_media"]); ?></td>
        	<td style='font-size:12px;font-family: "Simsun";'><?php echo ($list["order_bz"]); ?></td>
        	<td style='font-size:12px;font-family: "Simsun";'></td>
    
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>


</table>
</body>
</html>