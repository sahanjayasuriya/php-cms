<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>

<?php include 'includes/header.php';?>
<?php include 'includes/slider.php';?>

<?php
    $db = new Database();
    $fm = new Format();
?>

<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <?php
            $postsPerPage = 3;
            if(isset($_GET["page"])){
                $page = $_GET["page"];
            }else{
                $page=1;
            }
            $startFrom = ($page-1)*$postsPerPage;
        ?>
        <div class="row" style="margin-bottom: 30px;">
            <?php
                $queryCat = "SELECT * FROM category";
                $categories = $db->select($queryCat);
                if($categories){
                    while ($catResult = $categories->fetch_assoc()){
            ?>
<!--            <div class="col-md-8 col-md-offset-2 animate-box">-->
<!---->
<!--            </div>-->
                        <div class="btn-group animate-box">
                            <button class="btn btn-default" value="<?php echo $catResult['id']?>"><?php echo $catResult['name']?></button>
                        </div>
            <?php }?>
            <?php }else{header("Location:404.php");}?>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <?php
                $queryPost = "SELECT * FROM posts limit $startFrom, $postsPerPage";
                $posts = $db->select($queryPost);
                if($posts){
                    while ($result = $posts->fetch_assoc()){
            ?>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="post.php?id=<?php echo $result['idposts'];?>"><img class="img-responsive" src="<?php echo $result['image']; ?>" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="post.php?id=<?php echo $result['idposts'];?>"><?php echo $result['title'];?></a></h3>
                            <span class="posted_by">On <?php echo $fm->formatDate($result['date']);?> by <?php echo $result['author'];?></span>
<!--                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>-->
                            <p><?php echo $fm->excerpt($result['body'],200);?></p>
                            <p><a href="post.php?id=<?php echo $result['idposts'];?>">Read More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
                    <?php
                        $pageQuery = "SELECT * FROM posts";
                        $pageResult = $db->select($pageQuery);
                        $rowCount = mysqli_num_rows($pageResult);
                        $pageCount = ceil($rowCount/$postsPerPage);

                        echo "<ul class='pagination'>";
                        for($i=1; $i <= $pageCount; $i++){
                            echo "<li><a href='index.php?page=".$i."'>".$i."</a></li>";
                        }
                        echo "</ul>;"
                    ?>
            <?php }else{header("Location:404.php");} ?>
        </div>

<!--<div class="clearfix visible-sm-block"></div>-->

<!--        <div class="row">-->
<!--            <div class="col-md-4 col-md-offset-4 text-center animate-box">-->
<!--                <a href="#" class="btn btn-primary btn-lg">All Posts</a>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>
<!-- fh5co-blog-section -->


<?php include 'includes/footer.php';?>


</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
</body>
</html>