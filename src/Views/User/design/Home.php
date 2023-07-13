<?php
$titlePage = "Trang chủ";
require_once VIEW.'User/Header.php';

?>

<main style="background: #fff; margin-top: 30px" >
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="main-content">
                    <?php foreach ($postWithMobile as $post): ?>
                    <a href="<?php url('User/home/detail/' . $post->id); ?>" class="link-title-content">
                    <img class="image-title" src="<?php echo $post->image?>" alt="ảnh content">
                    <h5 class="title-content"><?php echo $post->title?></h5>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <?php  foreach ($postWithMovie as $post): ?>
                    <div class="col-md-6 col-sm-12 category-movie">
                        <a href="<?php url('User/home/detail/' . $post->id); ?>" class="link-title-content">
                            <img class="image-title" src="<?php echo $post->image ?>" alt="ảnh content">
                            <h5 class="title-content title-content-main"><?php echo $post->title ?></h5>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-lg-6 right-content-main">
                        <div>
                        <img src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/7/10/avatar1688961579881-16889615802521138232940.jpg" alt="ảnh content">
                        <h5 class="title-content title-content-main">
                            Áo choàng tàng hình ngoài đời thực hoạt động như thế nào?
                        </h5>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <img  class="image-title" src=" https://genk.mediacdn.vn/zoom/80_50/139269124445442048/2023/7/8/1-16887949915352107642744-83-0-1333-2000-crop-16887958815811387130215.jpg" alt="ảnh content">
                            </div>
                            <div class="col-md-8">
                                <h5 class="right-title-content">
                                    Bằng kính hồng ngoại Euclid, khoa học sẽ lý giải hai bí ẩn mang tên vật chất tối và năng lượng tối và năng...
                                </h5>
                            </div>
                        </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img  class="image-title" src=" https://genk.mediacdn.vn/zoom/80_50/139269124445442048/2023/7/8/1-16887949915352107642744-83-0-1333-2000-crop-16887958815811387130215.jpg" alt="ảnh content">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="right-title-content">
                                        Bằng kính hồng ngoại Euclid, khoa học sẽ lý giải hai bí ẩn mang tên vật chất tối và năng lượng tối và năng...
                                    </h5>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img  class="image-title" src=" https://genk.mediacdn.vn/zoom/80_50/139269124445442048/2023/7/8/1-16887949915352107642744-83-0-1333-2000-crop-16887958815811387130215.jpg" alt="ảnh content">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="right-title-content">
                                            Bằng kính hồng ngoại Euclid, khoa học sẽ lý giải hai bí ẩn mang tên vật chất tối và năng lượng tối và năng...
                                        </h5>
                                    </div>
                                </div>
                                <hr>
                        </div>
                    </div>
                </div>
            </div>

        <div class="mb-4">
            <p>Đáng chú ý</p>
            <div class="horizon-main">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3 notable">
                <a href="#" class="link-title-content">
                    <img class="image-title" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/7/7/avatar1688703937660-16887039382991981642927.jpg" alt="ảnh content">
                    <h5 class=" title-content title-content-main ">Bi hài Elon Musk: Đuổi 80% nhân viên Twitter để rồi họ giúp Mark Zuckerberg tạo ra 'phiên bản copy' Threads</h5>
                </a>
            </div>
            <div class="col-md-3 notable">
                <a href="#" class="link-title-content">
                    <img class="image-title" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/7/7/avatar1688699571367-1688699571853608700839.jpg" alt="ảnh content">
                    <h5 class="title-content title-content-main">Đánh giá máy chơi game PC cầm tay ROG Ally: Thiết kế đẹp, cấu hình mạnh, chơi tốt được game nặng nhưng vẫn tồn tại vài điểm trừ</h5>
                </a>
            </div>
            <div class="col-md-3 notable">
                <a href="#" class="link-title-content">
                    <img class="image-title" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/7/7/getty-zuckerberg-musk-800x597-1688690755075-1688690755998967780835-13-0-513-800-crop-1688691011403305629175.jpg" alt="ảnh content">
                    <h5 class="title-content title-content-main">Vừa khai sinh một ngày, mạng xã hội Threads của Mark Zuckerberg đã bị Elon Musk tấn công</h5>
                </a>
            </div>
            <div class="col-md-3 notable">
                <a href="#" class="link-title-content">
                    <img class="image-title" src="https://genk.mediacdn.vn/zoom/260_162/139269124445442048/2023/7/10/avatar1688952680522-1688952681221931904389.jpg" alt="ảnh content">
                    <h5 class="title-content title-content-main">Cục Điện ảnh yêu cầu Netflix, FPT Play gỡ phim có đường lưỡi bò trong vòng 24 giờ</h5>
                </a>
            </div>
        </div>
        </div>


</main>

<?php
 require_once VIEW. 'User/Footer.php';
?>