<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="<?= ($activePage > 1 ? '?page=' . ($activePage-1) : '#')?>">Previous</a></li>
        <?php
        if ( $maxPages > 0 ) {
            for($i=1;$i<=$maxPages;$i++){
                echo '<li class="page-item'.($activePage==$i?' active':'').'"><a class="page-link" href="?page='. $i .'">'. $i .'</a></li>';
            }
        }?>
        <li class="page-item"><a class="page-link" href="<?= ($activePage < $maxPages ? '?page=' . ($activePage+1) : '#')?>">Next</a></li>
    </ul>
</nav>