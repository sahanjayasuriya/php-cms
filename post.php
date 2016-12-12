<?php include 'includes/header.php'?>

<?php
    if(!isset($_GET['id']) || $_GET['id'] == null){
        header("Location: 404.php");
    }else{
        $id = $_GET['id'];
    }
?>

<div id="fh5co-blog-section" class="fh5co-section-gray" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                    $query = "SELECT * FROM posts WHERE idposts=$id";
                    $posts = $db->select($query);
                    if($posts){
                        while ($result = $posts->fetch_assoc()){
                ?>
                <div class="row">
                    <h1 class="pull-left" style="padding-left: 10px; margin-bottom: 10px"><?php echo $result['title'];?></h1>
                    <p class="lead">
                        &nbsp by <a href="#"><?php echo $result['author'];?></a>
                    </p>
                </div>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $fm->formatDate($result['date']);?></p>
                <hr>
                <img class="img-responsive" src="<?php echo $result['image'];?>" alt="">
                <hr>
                <p class="lead"><?php echo $result['body'];?> </p>
                <hr>

                <h3>FB Comment Plugin Here </h3>

                <h2>Related Posts</h2>
                <?php
                $catid = $result['cat'];
                $queryRelated = "SELECT * FROM posts WHERE cat='$catid' ORDER BY rand() limit 3";
                $posts = $db->select($queryRelated);
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
                                    <p><a href="post.php?id=<?php echo $result['idposts'];?>">Read More...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }}?>
            </div>

<!--            <div class="col-md-4">-->
<!--                <div class="well">-->
<!---->
<!--                </div>-->
<!--                <div class="well">-->
<!---->
<!--                </div>-->
<!--                <div class="well">-->
<!---->
<!--                </div>-->
<!--            </div>-->
                <?php }}else{header("Location:404.php");} ?>
        </div>
        <!-- /.row -->
    </div>
</div>

<?php include 'includes/footer.php';?>

</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
</body>
</html>