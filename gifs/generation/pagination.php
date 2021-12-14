<?php  if($page<$number_of_pages){   

}
if($page>=2){   
    echo "<li><a class = 'prev'  class = 'active' href='?page=".($page-1)."'>&laquo </a></li>";   
}       

for ($i=1; $i<=$number_of_pages; $i++) {   
    if ($i == $page) {   
        //$pagLink .= "<span><a class = 'active' href='?page=".$i."'>".$i." </a> </span>";   

		$pagLink .= "<li><span class = 'delimeter'><a class = 'active' onclick='?page=".$i."'>".$i."</a></li>";   
    }               
    else  {   
        $pagLink .= "<li><a class = 'active' href='?page=".$i."'>   
                                          ".$i." </a></li>";     
    }   
  };     
  echo $pagLink;   

  if($page<$number_of_pages){   
      echo "<li><a class = 'next' class = 'active' href='?page=".($page+1)." '>&raquo</a></li>";   
  }   

?>