<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <ul>
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li >
            <?php
            echo "<a href=\"".$list[$i][wr_link1]."\" class=\"text-white\">";
           
            echo $list[$i]['subject'];

            echo "</a>";
			
            ?>            
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    
</div>
