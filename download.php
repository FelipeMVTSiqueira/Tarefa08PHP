
    <?php 
        $uploads=scandir("uploads");
        foreach($uploads as $upload){
            echo "<a href= 'uploads/".$upload."'download>".$upload."<br></a>";
        }
        ?> </a>
    