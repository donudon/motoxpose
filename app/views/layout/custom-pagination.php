<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);

	$prevUrl = $paginator->getUrl($paginator->getCurrentPage() - 1);

    $nextPage = $paginator->getCurrentPage() + 1;
    if($nextPage > $paginator->getLastPage())
    {
        $nextPage = $paginator->getCurrentPage();
    }
    $nextUrl = $paginator->getUrl($nextPage);
?>

<?php if ($paginator->getLastPage() > 1): ?>
	<div class="btn-group">
	    <a href="<?php echo $prevUrl;?>" class="btn btn-primary">Prev<i class="icon icon-chevron-left"></i></a>
	    	<?php
	    		$cnt = 0;
	    		for($i=1; $i<=$paginator->getLastPage();$i++){
					
					if($i>2){
						if($cnt==0){
							echo "<button class=\"btn btn-primary\">.</button>";
							$cnt++;
						}else if($i==$paginator->getLastPage()){
							echo "<a href=\"?page=$i\" class=\"btn btn-primary\">$i</a>";
						}
						//$i = $paginator->getLastPage()-1;
					}else{
						echo "<a href=\"?page=$i\" class=\"btn btn-primary\">$i</a>";
					}
				}
	    	?>
	    <a href="<?php echo $nextUrl;?>" class="btn btn-primary">Next<i class="icon icon-chevron-right"></i></a>
	</div>
<?php endif; ?>
