<?php
foreach ($post as $key){
    $titlePage = $key->title;
}
require_once VIEW.'User/Header.php';

?>

<main>
    <div class= "detail-main mt-20 mb-20">
        <nav aria-label="breadcrumb breadcrumb-admin ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php url('User/home/index'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Current Page</li>
            </ol>
        </nav>
        <?php foreach ($post as $item): ?>
        <div class="row">
            <div class="col-md-7">
                <div class="detail-main-content mt-3 ms-3">
                    <div class="detail-main-content-title">
                        <h2> <?php echo $item->title?></h2>
                    </div>
                    <div class="detail-main-content-author">
                        <p style="color: red"><?php echo $item->author ?></p>
                    </div>
                    <hr>

                    <div class="detail-content">
                        <p><?php echo $item->content ?></p>
                        <img class="mt-2 mb-20" src="<?php echo $item->image ?>" alt="ảnh bài" >
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</main>
<?php
require_once VIEW. 'User/Footer.php';
?>
